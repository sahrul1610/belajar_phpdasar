<?php
// koneksi database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil table dari mahasiswea
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
//var_dump($result);
//cara mengecek error
// if ( !$result){
//     echo mysqli_error($conn);
// }
//ambil data (fetch) mahasiswa dari data result
//mysqli_fetch_row() // mengembalikab array numerik
//mysqli_fetch_assoc()// mengembalikan array associative
//mysqli_fetch_array() // mengembalikan keduanya
//mysqli_fetch_object() // mengembalikan 

// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs["nama"]);
// while ($mhs = mysqli_fetch_assoc($result)){
//     var_dump($mhs);
// }
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
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
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
    <?php endwhile; ?>
   
    </table>
</body>
</html>