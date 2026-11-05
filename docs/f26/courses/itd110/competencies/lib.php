<?php
/*
 * Competency mapping helpers.
 *
 * Competency definitions live in competencies.json (VDOE = V#, NOVA = N#,
 * WDE = W#.#.#). Sessions declare what they cover with a single line anywhere
 * in goals/sessionXX.md:
 *
 *     <!-- competencies: V69 V71 N13 W3.2.1 -->
 *
 * IDs may be separated by spaces and/or commas. The line is an HTML comment,
 * so it doesn't show up in the rendered lesson. Everything else (the session
 * page box and the competency table) is computed from these lines on each
 * request, so there's no build step.
 */

const COMPETENCY_PATTERN = '/<!--\s*competencies?\s*:(.*?)-->/is';

/** Load competencies.json; returns [frameworks, flat id => item map]. */
function competency_data(): array {
    static $cache = null;
    if ($cache !== null) return $cache;
    $data = json_decode(file_get_contents(__DIR__ . '/competencies.json'), true);
    $byId = [];
    foreach ($data['frameworks'] as $fw) {
        foreach ($fw['groups'] as $group) {
            foreach ($group['items'] as $item) {
                $item['framework'] = $fw['short'];
                $item['group'] = $group['name'];
                $byId[strtoupper($item['id'])] = $item;
            }
        }
    }
    return $cache = [$data['frameworks'], $byId];
}

/** Pull competency IDs out of a session's markdown text. */
function competency_ids_from_markdown(string $md): array {
    $ids = [];
    if (preg_match_all(COMPETENCY_PATTERN, $md, $m)) {
        foreach ($m[1] as $list) {
            foreach (preg_split('/[\s,]+/', trim($list), -1, PREG_SPLIT_NO_EMPTY) as $id) {
                $ids[] = strtoupper($id);
            }
        }
    }
    return array_values(array_unique($ids));
}

/** Session number => list of competency IDs, for every goals/sessionNN.md. */
function competency_session_map(): array {
    $map = [];
    foreach (glob(__DIR__ . '/../goals/session*.md') as $file) {
        if (!preg_match('/session(\d+)\.md$/', $file, $m)) continue; // skips sessionXX.md, *_old.md
        $ids = competency_ids_from_markdown(file_get_contents($file));
        if ($ids) $map[$m[1]] = $ids;
    }
    ksort($map, SORT_NATURAL);
    return $map;
}

/**
 * Assignment id => ['title', 'href', 'ids'] for every tagged assignments/*.md.
 * The title is the file's first "# " heading. The link (activity.php vs
 * project.php) is whichever one assignments/index.php uses for that id,
 * defaulting to activity.php.
 */
function competency_assignment_map(): array {
    $dir = __DIR__ . '/../assignments/';
    $pages = [];
    if (preg_match_all('/href="(\w+\.php)\?id=([\w-]+)"/', (string)@file_get_contents($dir . 'index.php'), $m, PREG_SET_ORDER)) {
        foreach ($m as $link) $pages[$link[2]] = $link[1];
    }
    $map = [];
    foreach (glob($dir . '*.md') as $file) {
        $md = file_get_contents($file);
        $ids = competency_ids_from_markdown($md);
        if (!$ids) continue;
        $id = basename($file, '.md');
        $title = preg_match('/^#\s+(.+)$/m', $md, $t) ? trim($t[1]) : $id;
        $map[$id] = [
            'title' => $title,
            'href'  => '../assignments/' . ($pages[$id] ?? 'activity.php') . '?id=' . rawurlencode($id),
            'ids'   => $ids,
        ];
    }
    ksort($map, SORT_NATURAL);
    return $map;
}

/** Reverse map: competency ID => list of keys (session numbers or assignment ids). */
function competency_coverage(array $map): array {
    $coverage = [];
    foreach ($map as $key => $ids) {
        if (isset($ids['ids'])) $ids = $ids['ids']; // assignment entries
        foreach ($ids as $id) $coverage[$id][] = (string)$key;
    }
    return $coverage;
}

/** "Competencies Addressed" list for a lesson or assignment page. */
function competency_list_html(array $ids, string $competencyPage = '../competencies/'): string {
    if (!$ids) return '';
    [, $byId] = competency_data();
    $out = "<h2>Competencies Addressed</h2>\n<ul class=\"competency-list\">\n";
    foreach ($ids as $cid) {
        $c = $byId[$cid] ?? null;
        $out .= '<li><a href="' . h($competencyPage) . '#' . h($cid) . '">' . h($cid) . '</a> '
            . ($c ? '(' . h($c['framework']) . ') ' . h($c['text']) : '<em>Unknown competency ID</em>')
            . "</li>\n";
    }
    return $out . "</ul>\n";
}

/** Session number => ['date' => 'Sep 30', 'topic' => '...'] from the goals JSON files. */
function competency_session_info(): array {
    $info = [];
    $dir = __DIR__ . '/../goals/';
    foreach (json_decode(@file_get_contents($dir . 'session_topics.json'), true) ?: [] as $t) {
        $info[$t['session']]['topic'] = $t['topic'];
    }
    foreach (json_decode(@file_get_contents($dir . 'session_dates.json'), true) ?: [] as $d) {
        // dates look like "September30"
        $ts = strtotime(preg_replace('/^([A-Za-z]+)(\d+)$/', '$1 $2', $d['date']));
        $info[$d['session']]['date'] = $ts ? date('M j', $ts) : $d['date'];
    }
    return $info;
}

if (!function_exists('h')) { function h($s): string {
    return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8');
}
}
