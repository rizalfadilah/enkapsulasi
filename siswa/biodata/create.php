<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Create Data</title>
</head>
<body>
    <fieldset>
        <legend>Input Data Biodata</legend>
        <form action="proses.php?aksi=tambah" method="get">
            <table>
                <tr>
                    <th>Nomor</th>
                    <td><input type="number" name="nis" required></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><textarea name="alamat" cols="40" required></textarea></td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td><select name="agama">
                    <option value ="islam">islam</option>
                    <option value ="hindu">hindu</option>
                    <option value ="budha">budha</option>
                    <option value ="kristen">kristen</option>
                    <option value ="protestan">protestan</option>>
                    </select></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td><input type = "date" name="tgllahir" cols="40" required></input></td>
                </tr>
                <tr>
                    <th>Umur</th>
                    <td><textarea name="umur" cols="40" required></textarea></td>
                </tr>
                <tr>


                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>