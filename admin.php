<?php
      //menghubungkan ke database
    $koneksi = mysqli_connect("localhost","root","","gallerifotorpl1 ");
      //mengambil data dari database
    $hasil = mysqli_query($koneksi,"SELECT * FROM foto ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<img src="robi.jpeg" whith="100%">
    <h1>HALAMAN ADMIN </h1>
    <a href="">tambah data</a>
 
    <table border=1>
        <thead>
            <tr>
                <th>no</td>
                <th>foto kegiatan</td>
                <th>judul kegitan</td>
                <th>tanggal</td>
                <th>eksen</th>
            </tr>
        </thead>    
        <tbody>
            <?php 
                $i = 1;
                while($row= mysqli_fetch_assoc($hasil)): ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <img src="gambar/<?= $row["foto"]?>" alt="" srcset="" width="100">
                </td>
                <td>
                    <?= $row['keterangan'] ?>
                </td>
                <td>
                     <?=$row['tanggal'] ?>

                </td>
                <td>
                    <a href="">edit</a>| <a href="">hapus</a>
                </td>
            </tr>
            <?php 
                $i++;
                endwhile 
            ?>
        </tbody>

</table>


</body>
</html>