<?php 

class Mahasiswa 
{
    public $namaMahasiswa, $nim, $domisili, $prodi, $ipk;

    function __construct($namaMahasiswa, $nim, $domisili, $prodi, $ipk)
    {
        $this->namaMahasiswa = $namaMahasiswa;
        $this->nim = $nim;
        $this->domisili = $domisili;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }

    function setPredikatIPK($ipk)
    {
        if ($ipk > 3.5) {
            echo "cumlaude yeeeh 4 taun";
        } else {
            echo "you did a great job!";
        }
    }
}
$mahasiswa = new Mahasiswa("John Doe", "0896 mau nomornya dong", "hogwarts", "Teknik perefefan", 3.8);
echo "Nama Mahasiswa: " . $mahasiswa->namaMahasiswa . "<br>";
echo "NIM: " . $mahasiswa->nim . "<br>";
echo "Domisili: " . $mahasiswa->domisili . "<br>";
echo "Program Studi: " . $mahasiswa->prodi . "<br>";
echo "IPK: " . $mahasiswa->ipk . "<br>";
$mahasiswa->setPredikatIPK($mahasiswa->ipk);
