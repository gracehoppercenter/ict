<?php
require_once __DIR__ . '/../config.php';

// Cache-bust: version fetched files by their modification time so edits show up immediately.
header('Cache-Control: no-cache');
$fileVersions = [];
foreach (['../calendar/calendar.html', '../calendar/school_dates.json',
          '../goals/session_topics.json', '../goals/session_dates.json',
          'calendar.js', 'calendar.css'] as $f) {
    $fileVersions[$f] = @filemtime(__DIR__ . '/' . $f) ?: time();
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title><?= COURSE_SHORT_NAME ?> Planning Calendar <?= SEMESTER ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
<link rel="stylesheet" href="calendar.css?v=<?= $fileVersions['calendar.css'] ?>">
<script>const FILE_VERSIONS = <?= json_encode($fileVersions, JSON_UNESCAPED_SLASHES) ?>;</script>
<script src="calendar.js?v=<?= $fileVersions['calendar.js'] ?>"></script>
<script src="../base/js/index.js"></script>
<script>
window.onload = function() {
    var semester = "";
    setUp(semester);
    setValidationLinks();
};
</script>
<link rel="stylesheet" href="../base/css/main.css">

</head>
<body>
<header>
<figure id="logo">
<a href="../index.php"><img src="../base/images/GraceHopperLogo.png" alt="GCTAA Logo"></a>
<figcaption style="font-size: .3vw; margin-left: .5vw;">
Illustration by Martina Scapola, used under CC BY-SA 4.0.</figcaption>
</figure>
<div class="desktop">
<h1><?= COURSE_SHORT_NAME ?> Planning Calendar <?= SEMESTER ?></h1>
<h2>Click on the session number on any date to find the lesson plan and homework for each day</h2>
</div>
<div class="mobile">
    <h1><?= COURSE_CODE ?></h1>
</div>
</header>

<div id="cal">
</div>

<footer>
</footer>

</body>
</html>  
