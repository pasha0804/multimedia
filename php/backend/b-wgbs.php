<?php
$im = imagecreatefromjpeg('../../Bilder/main.jpeg');
$wg = imagecreatefrompng('../../Bilder/wgbs.png');

$wgsize = imagescale($wg, (imagesx($wg)/20), (imagesy($wg)/20));

$font = '../../arial.ttf';
$hell = 255;
$color = imagecolorallocate($im, $hell, $hell, $hell);

imagettftext($im, 100, 0, 330, 150, $color, $font, 'Alperen Yilmaz');
imagettftext($im, 100, 0, 430, 470, $color, $font, 'I2B');

imagecopy($im, $wgsize, 175, 100, 0, 0, imagesx($wgsize), imagesy($wgsize));

header('Content-Type: image/png');

imagepng($im);
imagedestroy($im);