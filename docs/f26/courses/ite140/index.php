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
<figure id="logo"><a href="../../../index.php?sem=f26">
<img src="base/images/GraceHopperLogo.png" style="width: 10vw;"
alt="Grace Hopper Logo"></a>
<figcaption style="font-size: .3vw; margin-left: .5vw;">
Illustration by Martina Scapola, used under CC BY-SA 4.0.</figcaption>
</figure>
<div class="desktop">
<h1 style="font-size: 4vw; margin-top: 1.8vw; margin-left: -3vw;">
<?= COURSE_TITLE ?></h1>
</div>
<div class="mobile">
<h1><?= COURSE_CODE ?></h1>
</div>
</header>
<hr>

<main>
<div id="description" class="desktop">

<p>(Course Description Copied From 
    <a href="<?= NOVA_COURSE_LINK ?>">NOVA's Course Catalog</a>): 
<?= COURSE_DESCRIPTION ?>
</p>

<p class="students"><a href="students.php">Student Websites</a>

</p>
</div>

<div>

    <h2>Course Information</h2>
<ul>
<!-- <li><a href="goals"> Lesson Goals </a> </li>-->
<li><a href="info/F_26_ITE140.pdf"><?= COURSE_CODE ?> Syllabus</a></li>
<li><a href="info/F_26_DE_Contract.pdf">Dual Enrollment Expectations Contract</a></li>

</ul>

<h2>Important Dates</h2>
<ul>
<li><a href="calendar/">Lesson Calendar</a></li>
<li><a href="assignments/">Projects</a></li>
<li><b>Certification Exam</b>: <?= CERT_EXAM_DATE ?> during class.</li>
</ul>
</div>

<div>
<h2>Resources</h2>
<ul>
</ul>
</div>
</main>

<footer>
</footer>

</body>
</html>
