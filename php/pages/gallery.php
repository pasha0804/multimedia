<?php
include('../backend/b-reduzieren.php'); // schliesst b-reduzieren aus dem Backend verzeichnis ein, um die Bilder zu reduzieren (Erklärung dazu in der Datei b-reduzieren.php)
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="icon" href="../../img/icon.jpg">
    <title>Gallery - AY</title>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-light" id="neubar">
    <div class="container">
        <a class="navbar-brand" href="#">Alperen Yilmaz</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link mx-2" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="wgbs.php">WGBS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="gif.php">GIF</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 active" aria-current="page" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="video.php">Video</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="journal.php">Journal</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="ttl-gallery">
    <h1 class="h1">Gallery</h1>
    <hr>
    <button type="button" class="btn btn-info">
        <a href="gallery.php" style="color: black">
            Reset
        </a>
    </button>
</div>
<div class="gallery">
    <a href="#" id="th1"><img src="../../Thumbnails/1.jpg"
        style="opacity:1;filter:alpha(opacity=100)"
        onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100"
        onmouseover="this.style.opacity=0.6;this.filters.alpha.opacity=60">
    </a>
    <a href="#" id="th2"><img src="../../Thumbnails/2.jpg"
                              style="opacity:1;filter:alpha(opacity=100)"
                              onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100"
                              onmouseover="this.style.opacity=0.6;this.filters.alpha.opacity=60">
    </a>
    <a href="#" id="th3"><img src="../../Thumbnails/3.jpg"
                              style="opacity:1;filter:alpha(opacity=100)"
                              onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100"
                              onmouseover="this.style.opacity=0.6;this.filters.alpha.opacity=60">
    </a>
    <a href="#" id="th4"><img src="../../Thumbnails/4.jpg"
                              style="opacity:1;filter:alpha(opacity=100)"
                              onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100"
                              onmouseover="this.style.opacity=0.6;this.filters.alpha.opacity=60">
    </a>
    <a href="#" id="th5"><img src="../../Thumbnails/5.jpg"
                              style="opacity:1;filter:alpha(opacity=100)"
                              onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100"
                              onmouseover="this.style.opacity=0.6;this.filters.alpha.opacity=60">
    </a>
    <a href="#" id="th6"><img src="../../Thumbnails/6.jpg"
                              style="opacity:1;filter:alpha(opacity=100)"
                              onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100"
                              onmouseover="this.style.opacity=0.6;this.filters.alpha.opacity=60">
    </a>
</div>
<div class="original">
    <img src="../../jpeg/altus_plateau.jpg" id="img-orig1" width="500vw">
    <img src="../../jpeg/castle.jpg" id="img-orig2" width="500vw">
    <img src="../../jpeg/eldenring.jpg" id="img-orig3" width="500vw">
    <img src="../../jpeg/leyndell.jpg" id="img-orig4" width="500vw">
    <img src="../../jpeg/liurnia.jpg" id="img-orig5" width="500vw">
    <img src="../../jpeg/siofra-river.jpg" id="img-orig6" width="500vw">
</div>
<script src="../../js/preview.js"></script>
</body>
</html>