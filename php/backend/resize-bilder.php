<?php
function resize(){

    $dirc = '../../Bilder/';
    $images = glob($dirc . "*.jpg");
// 500px breite
    foreach ($images as $image) {
        $im_php = imagecreatefromjpeg($image);
        $im_php = imagescale($im_php, 500);
        $new_height = imagesy($im_php);
        $new_name = str_replace('-1920x1080', '-500x' . $new_height, basename($image));
        imagejpeg($im_php, $dirc . 'resize500/' . $new_name);
    }
// 200px breite
    foreach ($images as $image) {
        $im_php = imagecreatefromjpeg($image);
        $im_php = imagescale($im_php, 200);
        $new_height = imagesy($im_php);
        $new_name = str_replace('-1920x1080', '-200x' . $new_height, basename($image));
        imagejpeg($im_php, $dirc . 'resize200/' . $new_name);
    }
}