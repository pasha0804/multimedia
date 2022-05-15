<?php

$dirc = "../../jpeg"; // Verzeichnis zum Ordner mit den JPEG-Bilder (für die Galerie)
$dirc_th = "../../Thumbnails"; // Thumbnails-Verzeichnis
$dirc_bi = "../../Bilder"; // Bilder-Verzeichnis

$img = scandir($dirc); // $img sucht mit "scandir" Dateien in $dirc ab
$img_th = scandir($dirc_th); // $img_th sucht mit "scandir" Dateien in $dirc_th (Thumbnails) ab
$img_bi = scandir($dirc_bi); // $img_bi sucht mit "scandir" Dateien in $dirc_bi (Bilder) ab

$th_scandir = array_slice($img_th, 2); // $th_scandir extrahiert mit "array_slice" einen Ausschnitt aus dem Array $img_th mit dem offset 2 (offset ist positiv (oder non-negativ) d.h. die Arraysequenz wird am Anfang dessen Offsets in dem Array starten (2)
$bi_scandir = array_slice($img_bi, 2); // $bi_scandir extrahiert mit "array_slice" einen Ausschnitt aus dem Array $img_bi mit dem offset 2 (offset ist positiv (oder non-negativ) d.h. die Arraysequenz wird am Anfang dessen Offsets in dem Array starten (2)

if (count($img_th) > 2) { // Zählt alle Elemente aus dem Array $img_th
    foreach ($th_scandir as $item_th){ // $th_scandir wird als $item_th weitergegeben -->
        unlink($dirc_th . "/" . $item_th); // löscht den Dateinamen aus den Dateien von $dirc_th/$item_th
    }
}

if (count($img_bi) > 2) { // Zählt alle Elemente aus dem Array $img_bi
    foreach ($bi_scandir as $item_bi) { // $th_scandir wird als $item_bi weitergegeben -->
        unlink($dirc_bi . "/" . $item_bi); // löscht den Dateinamen aus den Dateien von $dirc_bi/$item_bi
    }
}

for ($i = 2; count($img) > $i; $i++) { // $i wird als erster Ausdruck mit dem Wert 2 weitergegeben und loopt so weit bis die Anzahl der Elemente aus dem Array $img grösser sind als 2 ($i)
    $base = imagecreatefromjpeg($dirc . "/" . $img[$i]); // JPEG-Bilder aus dem/den Verzeichnis(-sen) $dirc/$img[$i] werden erstellt und der Notation $base zugefügt (base = originalbild)
    $th = imagescale($base, 200); // JPEG-Bilder werden mit einer Breite von 200 korrigiert und klein ausgegeben und im Thumbnails-Verzeichnis gespeichert (als 1-6)
    $bi = imagescale($base, 500); // JPEG-Bilder werden mit einer Breite von 500 korrigiert und klein ausgegeben und im Bilder-Verzeichnis gespeichert (als 1-6)

    imagejpeg($th, $dirc_th . "/" . ($i-1) . ".jpg"); // Alle JPEG-Bilder aus dem Thumbnails-Verzeichnis werden mit $th (200px Breite) und mit den Namen 1-6 erstellt/angezeigt
    imagejpeg($bi, $dirc_bi . "/" . ($i-1) . ".jpg"); // Alle JPEG-Bilder aus dem Bilder-Verzeichnis werden mit $bi (200px Breite) und mit den Namen 1-6 erstellt/angezeigt
}