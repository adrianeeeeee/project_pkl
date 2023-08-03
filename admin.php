<?php
include "koneksi.php";
include "cek_login.php";


$sql = "SELECT * FROM website";
$query = mysqli_query($koneksi, $sql);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KomikLovers | Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="shorcut icon" href="img/favicon.ico">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <a href="index.php" class="btn btn-md btn-secondary mb-3">Kembali </a>
                <a href="tambah.php" class="btn btn-md btn-success mb-3">Tambah Data</a>
                <a href="logout.php" class="btn btn-md btn-danger mb-3">Logout</a>
                <table class="table table-bordered table-stripped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Deskripsi</th>
                            <th>Link Web</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($website = mysqli_fetch_assoc($query)) { ?>
                            <tr>
                                <td><?= $website['nama'] ?></td>
                                <td class="text-center"><img width="200px" src="file/<?= $website['gambar'] ?>" alt=""></td>
                                <td><?= $website['deskripsi'] ?></td>
                                <td><?= $website['link'] ?></td>
                                <td class="text-center">
                                    <a href="edit.php?id=<?= $website['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                                    <button onclick="if(confirm('Apakah anda yakin?')) { document.location='hapus.php?id=<?= $website['id'] ?>'}" class="btn btn-sm btn-danger">HAPUS</button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</body>

</html>