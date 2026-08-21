<?php require_once __DIR__ . '/../config.php'; ?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title><?= COURSE_SHORT_NAME ?> Planning Calendar <?= SEMESTER ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
<link rel="stylesheet" href="calendar.css">
<script src="calendar.js"></script>
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
