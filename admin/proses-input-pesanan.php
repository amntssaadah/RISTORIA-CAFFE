<?php

$id_costumer=$_POST['id_costumer'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];
$jenis_makanan=$_POST['jenis_makanan'];
$harga_makanan=$_POST['harga_makanan'];
$jenis_minuman=$_POST['jenis_minuman'];
$harga_minuman=$_POST['harga_minuman'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into pesanan(id_costumer,nama,alamat,no_hp,jenis_makanan,harga_makanan,jenis-minuman,harga_minuman) 
                        values ('$id_costumer','$nama','$alamat','$no_hp','$jenis_makanan','$harga_makanan','$jenis_minuman','$harga_minuman')");

if($simpan==true){

    header("location:admin/tampil-pesanan.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>