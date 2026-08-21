<?php require_once __DIR__ . '/../config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>GCTAA <?= COURSE_CODE ?> Activity Details</title>

<link rel="stylesheet" href="../base/css/main.css">
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
<a href="index.php"><img src="../base/images/GraceHopperLogo.png" alt="GCTAA Logo"></a>
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

<p><a href="../calendar/">Back to Calendar</a></p>

<div id="md_to_html"></div>
<script>
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const id = urlParams.get('id');
    console.log(id);
    md_to_html(id+'.md');
</script>

<footer class="desktop">
<hr>
</footer>

</body>
</html>
