<?php

$im = imagecreatefromjpeg('../../img/main.jpeg'); // weisses Bild aus dem img Ordner main.jpeg wird zu $im angefügt
$wg = imagecreatefrompng('../../img/wgbs.png'); // weisses Bild aus dem img Ordner wgbsjpeg wird zu $wg angefügt

$wgsize = imagescale($wg, (imagesx($wg)/20), (imagesy($wg)/20)); // die x und y grösse von main.jpeg (bzw $wg) wird verkleinert /20

$font = '../../fonts/arial.ttf'; // schriftart arial.ttf aus dem fonts verzeichnis wird für die zeichnung des bildes übernommen
$white = 255; // weisse farbe für die schriftart/text
$color = imagecolorallocate($im, $white, $white, $white); // dem bild main.jpeg ($im) wird die farbe $white mit imagecolorallocate gegeben und zu $color zugefügt

imagettftext($im, 100, 0, 330, 150, $color, $font, 'Alperen Yilmaz'); // Text "Alperen Yilmaz" wird unten auf dem Bild ausgegeben
imagettftext($im, 100, 0, 430, 470, $color, $font, 'I2B'); // Text "I2b" wird unter "Alperen Yilmaz" auf dem Bild ausgegeben

imagecopy($im, $wgsize, 175, 100, 0, 0, imagesx($wgsize), imagesy($wgsize)); // das wgbs.png wird in die mitte des main.jpeg ($im) angefügt bzw. kopiert

header('Content-Type: image/png');

imagepng($im); // $im wird ausgegeben
imagedestroy($im); // $im wird gelöscht/nicht mehr angezeigt (zerstört durch imagedestroy($im))