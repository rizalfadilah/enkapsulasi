<?php
class Database
{
    public $host = "localhost", $user = "root", $pass, $db = "xirpl2";
    public $koneksi;
    public function __construct()
    {
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
        if ($this->koneksi) {
            // echo "berhasil"; 
        } else {
            echo "koneksi Database Gagal";
        }
    }
}
//Data Tabel Biodata
include 'biodata.php';

//koneksi DB
$db = new Database();
?>