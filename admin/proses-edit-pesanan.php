<?php

include "../koneksi.php";

$id_costumer=$_POST['id_costumer'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];
$jenis_makanan=$_POST['jenis_makanan'];
$harga_makanan=$_POST['harga_makanan'];
$jenis_minuman=$_POST['jenis_minuman'];
$harga_minuman=$_POST['harga_minuman'];

$ubah=$koneksi->query("update pesanan set id_costumer='$id_costumer', nama='$nama', alamat='$alamat', no_hp='$no_hp', jenis_makanan ='$jenis_makanan', harga_makanan='$harga_makanan', jenis_minuman='$jenis_minuman',  harga_minuman='$harga_minuman' where id_costumer='$id_cosumer'");

if($ubah==true){

    header("location:admin/tampil-pesanan.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>