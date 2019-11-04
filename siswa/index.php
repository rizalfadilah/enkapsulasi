<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UACompatiible" content="ie=edge">
    <title>Document</title>
</head>
<body>
      <center>Data Siswa</center>
      <fieldset>
      <legend>Data Siswa</legend>
      <a href="create.php">Tambah Data Siswa</a>
      <table border=1>
      <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Nomor</th>
      <th>Alamat</th>
      <th colspan="3">Aksi</th>
      </tr>
<?php
include '../database.php';
$siswa = new Siswa();
$no = 1;
foreach ($siswa->index() as $data) {
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
          <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['nis']; ?></td>
              <td><?php echo $data['alamat'] ?></td>
                <td><a href="show.php?id=<?php echo $data['id']; ?>">Show</a></td>
                  <td><a href=edit.php?id=<?php echo $data['id']; ?>"Edit</a></td>
                  <td>
<a href="proses.php?id=<?php echo $data['id']; ?>$aksi=delete"
onclick="return confirm('Apakah Anda Yakin Mau Menghapus Data Ini ?')">Delete</a>    
</tr>
<?php

}
?>
</table>
</fieldset>
</body>
</html>