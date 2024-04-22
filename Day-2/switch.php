<?php 

$grade = "A";

$keterangan = ""

switch ($grade) {
    case"A" :
        $keterangan = "sangat memuaskan";
        break;
    case"B" :
        $keterangan = "memuaskan";
        break;
    case"C" :
        $keterangan = "Kurang memuaskan";
        break;
    case"D" :
        $keterangan = "Tidak memuaskan";
        break;
    default :
        $keterangan = "Tidak Lulus";
        break;
}

echo "<h1>$keterangan</h1>";
