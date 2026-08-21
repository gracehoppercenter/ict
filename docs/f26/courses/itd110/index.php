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
<img src="../../../images/GraceHopperLogo.png" style="width: 10vw;"
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
<li><a href="info/F_26_ITD110.pdf"><?= COURSE_CODE ?> Syllabus</a></li>
<li><a href="info/F_26_ITD110_DE_Contract.pdf">Dual Enrollment Expectations Contract</a></li>
<li><a href="info/student_portfolio_consent_form.pdf">Student Portfolio Consent Form</a></li>

</ul>

<h2>Important Dates</h2>
<ul>
<li><a href="calendar/">Lesson Calendar</a></li>
<li><a href="projects/">Projects</a></li>
<li><b>Certification Exam</b>: <?= CERT_EXAM_DATE ?> during class.</li>
</ul>
</div>

<div>
<h2>Resources</h2>
<ul>
<li><a href="https://specreaper.github.io/SE_Capstone_Projects/GithubFileLinksTable.html">Grade Helper</a></li>
<li><a href="https://nvcc.my.vccs.edu/">My VCCS</a></li>
<li><a href="http://openbookproject.net/tutorials/getdown/unix">Getting Down
with the Unix CLI</a></li>
<li><a href="http://openbookproject.net/tutorials/getdown/html">Getting Down
with HTML</a></li>
<li><a href="http://openbookproject.net/tutorials/getdown/css">Getting Down
with CSS</a></li>
<li><a href="https://ciw.ucertify.com/?func=load_course&course=1D0-620&desk_copy=1">CIW Advanced HTML5 and CSS3 Specialist Course</a></li>
<li><a href="https://www.khanacademy.org/computing/computer-programming">Khan
Academy</a></li>
<li><a href="https://codeberg.org/GCTAA/BottleZoo">BottleZoo</a></li>
<li><a href="http://openbookproject.net/courses/webappdev/units/webpagedesign/examples/googlewebfonts.html">Google Web Fonts</a>
</li>
<li><a href="https://www.appdevelopmentcost.com/app-mvp">How to Build an App
MVP to Launch Your Business</a></li>
<li><a href="https://www.theodinproject.com">The Odin Project</a></li>
<li><a href="https://html-now.github.io/">The Web Platform: Browser
technologies</a></li>
<li><a href="https://eznvcc.vccs.edu:2443/login?url=https://www.oreilly.com/library/view/temporary-access/">
NVCC O'Reilly for Higher Education</a></li>
</ul>
</div>
</main>

<footer>
</footer>

</body>
</html>
