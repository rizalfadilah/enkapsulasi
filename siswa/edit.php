<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Edit Data</title>
</head>

<body>
    <?php
    include '../database.php';
    $biodata = new biodata();
    foreach ($biodata > edit($_GET['id']) as $data) {
        $id = $data['id'];
        $nis = $data['nis'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
    }
    ?>
    <fieldset>
        <legend>Edit Data biodata</legend>
        <form action="proses.php?aksi=update" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Nomor biodata</th>
                    <td><input type="number" name="no" value="<?php echo $nis; ?>" required></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" required></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><textarea name="alamat" required><?php echo $alamat; ?></textarea></td>
                </tr>
                <tr>
                    <th>Jenis_Kelamin</th>
                    <td><input type="date" name="jenkel" required><?php echo $jenkel; ?></in></td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td><textarea name="agama"  required><?php echo $agama; ?></textarea></td>
                </tr>
                <tr>
                    <th>tgl_lahir</th>
                    <td><textarea name="tgl_lahir" required><?php echo $tgl_lahir; ?></textarea></td>
                </tr>
                <tr>
                    <th>umur</th>
                    <td><textarea name="umur" required><?php echo $alamat; ?></textarea></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>
