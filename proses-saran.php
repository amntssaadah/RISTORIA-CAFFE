
<?php

include "koneksi.php";

$id = $koneksi->real_escape_string($_POST['id']); 
$nama = $koneksi->real_escape_string($_POST['nama']); 
$pesan = $koneksi->real_escape_string($_POST['pesan']); 


$simpan=$koneksi->query("insert into saran(id,nama,pesan) 
                        values ('$id', '$nama', '$pesan')");

if($simpan==true){

    header("location:kontak.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>