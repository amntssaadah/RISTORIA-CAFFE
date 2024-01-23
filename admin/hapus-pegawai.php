<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$id=$_GET['id'];

include "../koneksi.php";

$hapus=$koneksi->query("delete from pegawai where id_pegawai='$id'");

if($hapus==true){

    header("location:admin/tampil-pesanan.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>