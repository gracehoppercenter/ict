<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/lib.php';
header('Cache-Control: no-cache');

[$frameworks, $byId] = competency_data();
$sessionMap    = competency_session_map();
$assignmentMap = competency_assignment_map();
$sessionCov    = competency_coverage($sessionMap);
$assignmentCov = competency_coverage($assignmentMap);
$info          = competency_session_info();

function session_link(string $s, array $info): string {
    $date  = $info[$s]['date'] ?? '';
    $topic = $info[$s]['topic'] ?? '';
    return '<a class="chip" href="../goals/session.php?num=' . h($s) . '" title="' . h($topic) . '">'
        . 'S' . h($s) . ($date ? ' <span>' . h($date) . '</span>' : '') . '</a>';
}

function assignment_link(string $a, array $assignmentMap): string {
    $item = $assignmentMap[$a];
    return '<a class="chip assignment" href="' . h($item['href']) . '">' . h($item['title']) . '</a>';
}

// IDs used in session/assignment files that don't exist in competencies.json (typos).
$unknown = [];
foreach ($sessionMap as $s => $ids) {
    foreach ($ids as $id) if (!isset($byId[$id])) $unknown[$id][] = session_link((string)$s, $info);
}
foreach ($assignmentMap as $a => $item) {
    foreach ($item['ids'] as $id) if (!isset($byId[$id])) $unknown[$id][] = assignment_link((string)$a, $assignmentMap);
}

function id_chips(array $ids, array $byId): string {
    $out = '';
    foreach ($ids as $id) {
        $out .= '<a class="chip' . (isset($byId[$id]) ? '' : ' bad') . '" href="#' . h($id) . '" title="'
            . h($byId[$id]['text'] ?? 'Unknown ID') . '">' . h($id) . '</a> ';
    }
    return $out;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?= COURSE_CODE ?> Competencies</title>
<link rel="stylesheet" href="../base/css/main.css">
<link rel="stylesheet" href="competencies.css">
</head>
<body>
<header>
<figure id="logo">
<a href="../index.php"><img src="../base/images/GraceHopperLogo.png" alt="GCTAA Logo"></a>
</figure>
<div class="desktop">
<h2>Governor's Career & Technical Academy Arlington</h2>
<h1><?= COURSE_CODE ?> Competencies</h1>
</div>
<div class="mobile">
<h1><?= COURSE_CODE ?></h1>
</div>
</header>
<hr>

<div class="competencies">
<p><a href="../index.php">Back to <?= COURSE_CODE ?></a> · <a href="../calendar/">Lesson Calendar</a>
· <a href="../assignments/">Assignments</a></p>

<h2>Coverage Summary</h2>
<table class="summary">
<tr><th>Framework</th><th>In a lesson</th><th>In an assignment</th><th>Either</th><th></th></tr>
<?php foreach ($frameworks as $fw):
    $total = $inSession = $inAssignment = $either = 0;
    foreach ($fw['groups'] as $g) foreach ($g['items'] as $it) {
        $id = strtoupper($it['id']);
        $s = !empty($sessionCov[$id]);
        $a = !empty($assignmentCov[$id]);
        $total++; $inSession += $s; $inAssignment += $a; $either += ($s || $a);
    }
    $pct = $total ? round(100 * $either / $total) : 0; ?>
<tr>
  <td><a href="#fw-<?= h($fw['short']) ?>"><?= h($fw['name']) ?></a></td>
  <td><?= $inSession ?> / <?= $total ?></td>
  <td><?= $inAssignment ?> / <?= $total ?></td>
  <td><?= $either ?> / <?= $total ?></td>
  <td><div class="bar"><div style="width: <?= $pct ?>%"></div></div></td>
</tr>
<?php endforeach; ?>
</table>
<p>
<label><input type="checkbox" id="uncovered-only"> Show only competencies not yet covered</label>
· <a href="#by-session">View by session</a>
· <a href="#by-assignment">View by assignment</a>
</p>

<?php if ($unknown): ?>
<div class="warning">
<strong>Unknown competency IDs found in session or assignment files:</strong>
<ul>
<?php foreach ($unknown as $id => $links): ?>
<li><code><?= h($id) ?></code> in <?= implode(' ', $links) ?></li>
<?php endforeach; ?>
</ul>
</div>
<?php endif; ?>

<?php foreach ($frameworks as $fw): ?>
<h2 id="fw-<?= h($fw['short']) ?>"><?= h($fw['name']) ?></h2>
<p class="source">Source:
<?php if (strpos($fw['source'], 'http') === 0): ?>
<a href="<?= h($fw['source']) ?>"><?= h($fw['source']) ?></a>
<?php else: ?><?= h($fw['source']) ?><?php endif; ?>
</p>
<table class="comp">
<tr><th>ID</th><th>Competency</th><th>Sessions</th><th>Assignments</th></tr>
<?php foreach ($fw['groups'] as $g): ?>
<tr class="group"><td colspan="4"><?= h($g['name']) ?></td></tr>
<?php foreach ($g['items'] as $it):
    $id = strtoupper($it['id']);
    $sessions = $sessionCov[$id] ?? [];
    $assignments = $assignmentCov[$id] ?? []; ?>
<tr id="<?= h($id) ?>" class="<?= ($sessions || $assignments) ? 'covered' : 'uncovered' ?>">
  <td class="id"><a href="#<?= h($id) ?>"><?= h($id) ?></a></td>
  <td><?= h($it['text']) ?><?= !empty($it['optional']) ? ' <em>(optional)</em>' : '' ?></td>
  <td class="sessions"><?php foreach ($sessions as $s) echo session_link($s, $info) . ' '; ?></td>
  <td class="sessions"><?php foreach ($assignments as $a) echo assignment_link($a, $assignmentMap) . ' '; ?></td>
</tr>
<?php endforeach; endforeach; ?>
</table>
<?php endforeach; ?>

<h2 id="by-session">By Session</h2>
<table class="comp">
<tr><th>Session</th><th>Topic</th><th>Competencies</th></tr>
<?php foreach ($sessionMap as $s => $ids): ?>
<tr>
  <td class="id"><?= session_link((string)$s, $info) ?></td>
  <td><?= h($info[$s]['topic'] ?? '') ?></td>
  <td class="sessions"><?= id_chips($ids, $byId) ?></td>
</tr>
<?php endforeach; ?>
<?php if (!$sessionMap): ?>
<tr><td colspan="3">No sessions tagged yet. Add <code>&lt;!-- competencies: V69 N3 W1.1 --&gt;</code> to a session file.</td></tr>
<?php endif; ?>
</table>

<h2 id="by-assignment">By Assignment</h2>
<table class="comp">
<tr><th>Assignment</th><th>Competencies</th></tr>
<?php foreach ($assignmentMap as $a => $item): ?>
<tr>
  <td><?= assignment_link((string)$a, $assignmentMap) ?></td>
  <td class="sessions"><?= id_chips($item['ids'], $byId) ?></td>
</tr>
<?php endforeach; ?>
<?php if (!$assignmentMap): ?>
<tr><td colspan="2">No assignments tagged yet. Add <code>&lt;!-- competencies: V14 V44 --&gt;</code> to an assignment file.</td></tr>
<?php endif; ?>
</table>
</div>

<script>
document.getElementById('uncovered-only').addEventListener('change', e => {
  document.body.classList.toggle('uncovered-only', e.target.checked);
});
</script>
</body>
</html>
