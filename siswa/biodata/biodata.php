<?php
class biodata extends Database
{
//Menampilkan Semua Data 
    public function index()
    {
        $databiodata = mysqli_query($this->koneksi, "select * from siswa");
//var_dump($datasiswa);
        return $datasiswa;
    }
//Menambah Data
    public function create($nis, $nama, $alamat)
    {
        mysqli_query(
            this - koneksi,
            "insert into biodata value (null, 'no','nama','alamat','agama','jenkel','tgl_lahir','umur')"
        );
    }
// Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $databiodata = mysqli_query($this->koneksi, "select * from biodata id='$id'");
        return $datasbiodata;
    }
    //mengupdate data berdasarkan id 
    public function update($id, $nis, $nama, $alamat)
    {
        mysqli_query(
            $this->koneksi,
            "update biodata set no='$no',nama='$nama',
        alamat='alamat',agama='agama', jenkel='jenkel','tgl_lahir='tgl_lahir',umur='umur' where id='$id'"
        );
    }
    public function delete($id)
    {
        mysqli_query($this->$koneksi, "delete from biodata where id='$id'");
    }
}
?>
