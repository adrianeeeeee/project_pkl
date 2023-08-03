<?php
include "koneksi.php";
include "cek_login.php";

$id = $_GET['id'];

$sql = "SELECT * FROM website WHERE id = $id";
$query = mysqli_query($koneksi, $sql);
while ($website = mysqli_fetch_assoc($query)) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KomikLovers | Edit Data</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" /> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="shorcut icon" href="img/favicon.ico">
    </head>

    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $website['id']; ?>">
                                <div class="form-group">
                                    <label for="nama">Nama Website</label>
                                    <input type="text" name="nama" value="<?= $website['nama']; ?>" id="nama" class="form-control" placeholder="Masukkan nama website">
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Gambar Website</label>
                                    <!-- <input type="file" name="gambar" value="<?= $website['gambar']; ?>" id="gambar" class="custom-file-input" onchange="previewImg()" placeholder="Masukkan gambar"> -->
                                    <img width="200px" src="file/<?= $website['gambar']; ?>" class="img-thumbnail img-preview">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input " id="gambar" name="gambar" onchange="previewImg()">
                                        <label class="custom-file-label" for="gambar"><?= $website['gambar']; ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10" placeholder="Masukkan deskripsi"><?= $website['deskripsi']; ?></textarea>
                                        <!-- <input type="text" name="deskripsi" value="<?php //$website['deskripsi']; 
                                                                                        ?>" id="deskripsi" class="form-control" placeholder="Masukkan deskripsi"> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="link">Link Website</label>
                                        <input type="text" name="link" value="<?= $website['link']; ?>" id="link" class="form-control" placeholder="Masukkan link website">
                                    </div>
                                    <input type="submit" name="tambah" class="btn btn-primary" value="Simpan">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="main.js"></script>

    </body>

    </html>

<?php } ?>