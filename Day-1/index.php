<?php 

	$nama = "Muhamad Nur Raply";
	$jurusan = "Teknik Informatika";
	$semester = 2;
	$sudahlulus = false; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2><?php echo $nama ?></h2>
	<p>
		Hai nama saya <?php echo $nama ?>
	</p>
	<p>
		Saya kuliah di jurusan <?php echo $jurusan ?>
	</p>
	<p>
		Saat ini saya berada di semester <?php echo $semester ?>
	</p>
	<p> Saya Belum lulus <?php echo $sudahlulus ?> </p>
</body>
</html>