<?php
include "cek_login.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KomikLovers | Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="shorcut icon" href="img/favicon.ico">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nama">Nama Website</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama website">
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar Website</label>
                                <input type="file" name="gambar" id="gambar" class="form-control" placeholder="Masukkan gambar">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10" placeholder="Masukkan deskripsi"></textarea>
                                <!-- <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukkan deskripsi"> -->
                            </div>
                            <div class="form-group">
                                <label for="link">Link Website</label>
                                <input type="text" name="link" id="link" class="form-control" placeholder="Masukkan link website">
                            </div>
                            <br>
                            <input type="submit" name="tambah" class="btn btn-primary" value="Tambah">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>