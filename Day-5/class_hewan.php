<?php 

class HewanMamalia 
{
    public $warna;
    public $namaHewan;
    public $habitat;

    function makan() 
    {
        return "mamalia makan";
    }
    function minum() 
    {
        return "mamalia minum"; 
    }
    function menyusui() 
    {
        return "mamalia menyusui"; 
    }
    function melahirkan() 
    {
        return "mamalia melahirkan"; 
    }
}

$mamalia = new HewanMamalia();
// $mamalia ->makan();
// knp harus echo karena mengandung return kecuali dari awal echo maka kita ga usah menambahkan echo lagi 
$mamalia->namaHewan = "maung bandung";//contoh aja
echo $mamalia->namaHewan;
echo "<br>";
echo $mamalia->warna = "biru";
echo "<br>";
echo $mamalia->habitat = "hutan viking tropis";
echo "<br>";
echo $mamalia->makan();
echo "<br>";
echo $mamalia->minum();
echo "<br>";
echo $mamalia->menyusui();
echo "<br>";
echo $mamalia->melahirkan();