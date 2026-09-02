<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?= COURSE_TITLE ?></title>
<link rel="stylesheet" href="base/css/main.css">
<script src="base/js/index.js"></script>
<script>
window.onload = setValidationLinks;
</script>
</head>
<body>
<header>
<figure id="logo">
<a href="index.php"><img src="base/images/GraceHopperLogo.png" alt="GCTAA Logo"></a>
<figcaption style="font-size: .3vw; margin-left: .5vw;">
Illustration by Martina Scapola, used under CC BY-SA 4.0.</figcaption>
</figure>
<div>
<h2>Grace Hopper Center</h2>
<h1><?= COURSE_TITLE ?></h1>
</div>
</header>

<hr>
<div id="content">
<h1>Student ePortfolios (Git Repos)</h1>

<h2>5B</h2>

  <ul>
    <li><a href="https://codeberg.org/gar821/ITE140">Joshua</a></li>
    <li><a href="https://codeberg.org/CWahl/ITE140">Clara</a></li>
    <li><a href="https://codeberg.org/perryjc/ITE140">James</a></li>
    <li><a href="https://codeberg.org/NadiaNayr/ITE140">Aidan</a></li>
    <li><a href="https://github.com/DaRealCoolGaming/ITE140">Nicole</a></li>
    <li><a href="https://codeberg.org/cworst/ITE140">Madi</a></li>
    <li><a href="https://codeberg.org/StarLilly/ITE-140">Lilly</a></li>
</div>

<footer>
</footer>

</body>
</html>
