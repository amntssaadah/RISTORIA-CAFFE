<?php

$id_costumer=$_POST['id_pegawai'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into pegawai(id_pegawai,nama,alamat,no_hp) 
                        values ('$id_pegawai','$nama','$alamat','$no_hp')");

if($simpan==true){

    header("location:tampil-pegawai.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>