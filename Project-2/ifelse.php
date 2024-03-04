<?php 
$nilai = 90;

$keterangan = ""

if($nilai > 90) {
    $keterangan = "sanagat baik";
} elseif($nilai > 70 || $nilai <= 90) {
    $keterangan = "Lumayan baik";
} else {
    $keterangan = "Oke dah";
}

echo "<h1>$keterangan</h1>";
