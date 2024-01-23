<?php

$id_costumer=$_POST['id'];
$nama=$_POST['nama_produk'];
$alamat=$_POST['harga_produk'];
$no_hp=$_POST['gambar_produk'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into produk(id,nama_produk,harga_produk,gambar_produk) 
                        values ('$id','$nama_produk','$harga_produk','$gambar_produk')");

if($simpan==true){

    header("location:tampil-produk.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>