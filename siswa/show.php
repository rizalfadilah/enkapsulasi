<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UACompatiible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
foreach ($siswa->show($_GET['id']) as $key) {
    $id = $data['id'];
    $nis = $data['nis'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
}
?>
    <fieldset>
    <legend>edit data siswa</legend>
    <form action="/siswa/proses.php?aksi=update" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
<table>
<tr>
<th>Nomor Induk Siswa</th>
<td>input type="number" name="id"  value="<?php echo $nis; ?>"   readonly></td>
</tr>
<tr>
<th>Nama Siswa</th>
<td>input type="text" name="nama"  value="<?php echo $nama; ?>"   readonly></td>
</tr>
<tr>
<th>alamat</th>
<td><textarea  name="alamat" cols="40" readonly><?php echo $alamat; ?></textarea></td>
</tr>
</table>
    </form>
    </fieldset>
    </boddy>
    </html>
