<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman admin</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
    <a href="tambah.php">tambah data</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
    
    <tr>
    <th>No.</th>
    <th>aksi</th>
    <th>gambar</th>
    <th>NPR</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $row) : ?>
    <tr>
    <td><?= $i ?></td>
    <td>
    <a href="">ubah</a> |
    <a href="">hapus</a>
    </td>
    <td><img src="gambar/<?php echo $row["gambar"];?>" width="50"></td>
    <td><?= $row["nrp"];?></td>
    <td><?php echo $row["nama"];?></td>
    <td><?= $row["email"];?></td>
    <td><?= $row["jurusan"];?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
   
    </table>
</body>
</html>