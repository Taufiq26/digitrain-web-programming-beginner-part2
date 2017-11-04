<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah</title>
</head>
<body>
    <?php
        // Sertakan koneksi yang telah dibuat sebelumnya


    ?>

    <form action="" method="post">
    <h1>Tambah Data Siswa</h1>
    <table>
        <tr>
            <td>Nama</td>
            <td> : </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td> : </td>
            <td><textarea name="alamat" id="" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" name="tambah" value="Tambah"></td>
            <td></td>
            <td><input type="submit" name="kembali" value="Kembali"></td>
        </tr>
    </table>
    </form>
</body>
</html>

<?php
    // TODO 4.2 - Sertakan fungsi untuk menambah data
    

?>