<?php

include "../koneksi.php";

$id_pegawai=$_POST['id'];
$nama=$_POST['nama_produk'];
$alamat=$_POST['harga_produk'];
$no_hp=$_POST['gambar_produk'];


$ubah=$koneksi->query("update produk set id='$id', nama_produk='$nama_produk', harga_produk='$harga_produk', gambar_produk='$gambar_produk' where id='$id'");

if($ubah==true){

    header("location:tampil-produk.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>