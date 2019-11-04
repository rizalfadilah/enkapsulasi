<?php
include '../database.php';
$biodata = new biodata();

$aksi = $_GET['aksi'];
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenkel'];
    $umur = $_POST['umur'];
    $aksi = $_POST['aksi'];
}
if ($aksi == "tambah") {
    $biodata->create(
        $no,
        $nama,
        $alamat,
        $jenis_kelamin,
        $agama,
        $tgl_lahir,
        $umur,
        $aksi
    );
    header("location:index.php");
} elseif ($aksi == "update") {
    $biodata->update(
        $no,
        $nama,
        $alamat,
        $jenis_kelamin,
        $agama,
        $tgl_lahir,
        $umur,
        $aksi
    );
    header("location:index.php");
} elseif ($aksi == "delete") {
    $biodata->delete($_GET['id']);
    header("location:index.php");
}
