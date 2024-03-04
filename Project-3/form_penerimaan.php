<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran IT Klub</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background: linear-gradient(to right, #ff0000, #0000ff); /* Gradien biru dan merah */
            color: white; /* Warna teks putih */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5 mb-4">Form Pendaftaran IT Klub</h1>
        <form action="proses_form.php" method="POST">
            <div class="form-group row border p-3">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-adn"></i>
                            </div>
                        </div> 
                        <input id="nim" name="nim" type="text" class="form-control" required="required">
                    </div>
                </div>
            </div>
            <!-- Lanjutkan untuk elemen formulir lainnya -->
            <div class="form-group row border p-3">
                <label for="nama" class="col-4 col-form-label">NAMA</label> 
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-card"></i>
                            </div>
                        </div> 
                        <input id="nama" name="nama" type="text" class="form-control" required="required">
                    </div>
                </div>
            </div>
            <!-- Lanjutkan untuk elemen formulir lainnya -->
            <div class="form-group row border p-3">
                <label class="col-4">Jenis Kelamin</label> 
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="Laki-laki" required="required"> 
                        <label for="jenis_kelamin_0" class="custom-control-label">Laki-laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="Perempuan" required="required"> 
                        <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <!-- Lanjutkan untuk elemen formulir lainnya -->
            <div class="form-group row border p-3">
                <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
                <div class="col-8">
                    <select id="prodi" name="prodi" class="custom-select" required="required">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Bisnis Digital">Bisnis Digital</option>
                    </select>
                </div>
            </div>
            <!-- Formulir Keahlian -->
            <div class="form-group row border p-3">
                <label class="col-4">Keahlian</label> 
                <div class="col-8">
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="keahlian" id="keahlian_0" type="checkbox" class="custom-control-input" value="HTML" required="required"> 
                        <label for="keahlian_0" class="custom-control-label">HTML</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="keahlian" id="keahlian_1" type="checkbox" class="custom-control-input" value="CSS" required="required"> 
                        <label for="keahlian_1" class="custom-control-label">CSS</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="keahlian" id="keahlian_2" type="checkbox" class="custom-control-input" value="Java Script" required="required"> 
                        <label for="keahlian_2" class="custom-control-label">Java Script</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="keahlian" id="keahlian_3" type="checkbox" required="required" class="custom-control-input" value="Phyton"> 
                        <label for="keahlian_3" class="custom-control-label">Python</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="keahlian" id="keahlian_4" type="checkbox" required="required" class="custom-control-input" value="PHP"> 
                        <label for="keahlian_4" class="custom-control-label">PHP</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="keahlian" id="keahlian_5" type="checkbox" required="required" class="custom-control-input" value="RWD Bootstrap"> 
                        <label for="keahlian_5" class="custom-control-label">RWD Bootstrap</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="keahlian" id="keahlian_6" type="checkbox" required="required" class="custom-control-input" value="Lainya"> 
                        <label for="keahlian_6" class="custom-control-label">Lainya..</label>
                    </div>
                </div>
            </div>
            <!-- Lanjutkan untuk elemen formulir lainnya -->
            <div class="form-group row border p-3">
                <label for="domisili" class="col-4 col-form-label">Domisili</label> 
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-area-chart"></i>
                            </div>
                        </div> 
                        <input id="domisili" name="domisili" type="text" class="form-control" required="required">
                    </div>
                </div>
            </div>
            <!-- Lanjutkan untuk elemen formulir lainnya -->
            <div class="form-group row border p-3">
                <label for="email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-comments-o"></i>
                            </div>
                        </div> 
                        <input id="email" name="email" type="text" class="form-control" required="required">
                    </div>
                </div>
            </div> 
            <!-- Lanjutkan untuk elemen formulir lainnya -->
            <div class="form-group row border p-3">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
