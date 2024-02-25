<?php

include "../koneksi.php";

$id_pegawai=$_POST['id_pegawai'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];


$ubah=$koneksi->query("update pegawai set id_pegawai='$id_pegawai', nama='$nama', alamat='$alamat', no_hp='$no_hp' where id_pegawai='$id_pegawai'");

if($ubah==true){

    header("location:tampil-pegawai.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>