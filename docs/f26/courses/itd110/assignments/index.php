<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../competencies/lib.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>GCTAA <?= COURSE_CODE ?> Activity Details</title>

<link rel="stylesheet" href="../base/css/main.css">
<style>
table, th, tr, td {
    border: 1px black solid;
    border-collapse: collapse;
}
    </style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/showdown/2.1.0/showdown.min.js" integrity="sha512-LhccdVNGe2QMEfI3x4DVV3ckMRe36TfydKss6mJpdHjNFiV07dFpS2xzeZedptKZrwxfICJpez09iNioiSZ3hA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./js/init.js"></script>
<script src="../base/js/index.js"></script>

<script>
window.onload = setValidationLinks;
</script>

</head>
<body>
<header>
<figure id="logo">
<a href="../index.php"><img src="../base/images/GraceHopperLogo.png" alt="GCTAA Logo"></a>
<figcaption style="font-size: .3vw; margin-left: .5vw;">
Illustration by Martina Scapola, used under CC BY-SA 4.0.</figcaption>
</figure>
<div class="desktop">
<h2>Governor's Career & Technical Academy Arlington</h2>
<h1><?= COURSE_CODE ?></h1>
</div>
<div class="mobile">
<h1><?= COURSE_CODE ?></h1>
</div>
</header>
<hr>

<?php
// Graded assignments, in due-date order.

// Formative: [page, id, session introduced, title, due, duck paths]
$formative = [
    ['activity', '01_email', '02',            'Introduction Email',               '8AM on Tuesday, September 8',           []],
    ['activity', '00_repo_setup', '04',       'Git Repo Setup',                   'Start of class, Tuesday, September 15', ['index.html']],
    ['activity', '01_terminal_page', '09',    'Terminal / Vim Lesson Page',       '3PM on Wednesday, September 30',        ['practice/terminal.html']],
    ['activity', '01_schedule_table', '10',   'Class Schedule Table',             'Start of class, Friday, October 2',     ['practice/schedule.html']],
    ['activity', '01_responsive_image', '11', 'Responsive Homepage Image',        'Start of class, Tuesday, October 6',    ['index.html']],
    ['activity', '02_favicon_profile', '17',  'Favicon and Github Profile',       '8AM on Monday, October 26',             ['index.html']],
    ['activity', '02_box_model', '19',        'Box Model Challenge',              '8AM on Friday, October 30',             ['practice/box_model.html']],
    ['activity', '02_zoo_nav', '20',          'Zoo Flex Nav Bar',                 'Start of class, Wednesday, November 4', ['practice/zoo/index.html']],
    ['activity', '02_chocolates', '21',       'Grid Practice: Box of Chocolates', 'Start of class, Tuesday, November 10',    ['practice/chocolates.html']],
    ['activity', '02_exam_prep', '22',        'WDE Exam Prep: Self-Assessment',   '8AM on Tuesday, November 10',           ['practice/exam_prep.html']],
    ['activity', '02_clone', '23',            'Layout Clone',                     'Start of class, Friday, November 13',   ['practice/clone.html']],
    ['activity', '02_top_chef', '24',        'Top Chef',                        '8AM on Tuesday, November 17',           ['practice/top_chef.html']],
];

// Summative: [page, id, session introduced ('' if not yet), title, due, duck paths, in-class writing date]
$summative = [
    ['project', '01_recipes', '12',        'Recipes',                    '8AM on Monday, October 19',  ['projects/recipes/index.html', 'projects/recipes/1.html', 'projects/recipes/2.html'], 'Tuesday, October 20'],
    ['project', '03_client_website', '',   '(Tentative) Client Website', '3PM on Tuesday, February 3', ['projects/client/index.html'], 'TBD'],
];

function session_link(string $session): string {
    static $info = null;
    $info = $info ?? competency_session_info();
    if ($session === '') return 'TBD';
    $date = $info[$session]['date'] ?? '';
    return '<a href="../goals/session.php?num=' . $session . '">Session ' . $session . '</a>'
        . ($date ? " ($date)" : '');
}

function duck_links(array $paths): string {
    if (!$paths) return 'N/A (sent by email)';
    $out = '';
    foreach ($paths as $path) {
        $out .= '<a href="https://duck.apscs.org/file_list?path=' . $path . '">' . $path . '</a><br>';
    }
    return $out;
}
?>
<h2>Summative Assignments</h2>
<table>
    <thead>
    <tr>
        <th>Assignment</th>
        <th>Introduced</th>
        <th>Due</th>
        <th>DUCK</th>
        <th>In-Class Writing Date</th>
    </tr>
    </thead>
    <tbody>
<?php foreach ($summative as [$page, $id, $session, $title, $due, $duck, $writing]): ?>
    <tr>
        <td><a href="<?= $page ?>.php?id=<?= $id ?>"><?= htmlspecialchars($title) ?></a></td>
        <td><?= session_link($session) ?></td>
        <td><?= $due ?></td>
        <td><?= duck_links($duck) ?></td>
        <td><?= $writing ?></td>
    </tr>
<?php endforeach; ?>
    </tbody>
</table>

<h2>Formative Assignments</h2>
<table>
    <thead>
    <tr>
        <th>Assignment</th>
        <th>Introduced</th>
        <th>Due</th>
        <th>DUCK</th>
    </tr>
    </thead>
    <tbody>
<?php foreach ($formative as [$page, $id, $session, $title, $due, $duck]): ?>
    <tr>
        <td><a href="<?= $page ?>.php?id=<?= $id ?>"><?= htmlspecialchars($title) ?></a></td>
        <td><?= session_link($session) ?></td>
        <td><?= $due ?></td>
        <td><?= duck_links($duck) ?></td>
    </tr>
<?php endforeach; ?>
    </tbody>
</table>

<h2>Project Grading</h2>
<p>Each project will be graded in two parts:</p>
<ul>
<li>50% of your grade will come from your code, based on the rubric provided on 
    the project page.
</li>
<li>50% of your grade will come from an in-class written exercise
    where you will explain how your code works</li>
</ul>
<p>The summative assignments table above includes two dates: the deadline to submit the project, and the
    date of the in-class writing exercise. For the in-class writing exercise, I
    will print your code and ask you to annotate it.</p>

<p>The code printouts will be in black-and-white, in a monospace font. All
    code formatting (line breaks/indentation) will be preserved from your 
    source file, but I will add line wraps for lines that are longer than 80
    characters. I will also remove all comments from the printed code.</p>
    
<p>I will also provide sample code from a project that does complete all of the 
    project requirements. If you do not submit code in time, or if your code is
    incomplete, you can use my code for the writing portion.</p>

<footer class="desktop">
<hr>
</footer>

</body>
</html>
