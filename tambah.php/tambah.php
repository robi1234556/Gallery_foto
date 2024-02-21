<?php
    $koneksi = mysqli_connect("localhost", "root","","galeri");
    if(isset($_GET["submit"])){
        $foto = $_GET["ffoto"];
        $ _GET
    }
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <from action="tambah.php" method="get">
    <table>
        <tr>
            <td>foto</td>
            <td>:</td>
            <td><input type="text" name="" id=""></td>
            <tr>
            </tr>
            <td>keterangan</td>
            <td>:</td>
            <td><input type= "text"name=""></td>
            <tr>
            </tr>
            <td>tanggal </td>
            <td>:</td>
            <td><button type= "date"name=""id></td>
           </tr>
           <tr>
            <td></td>
            <td></td>
            <td><button type= "date" name= "fttanggal" id=></td>

        </tr>
    </body>
</html>