<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>

!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RISTORIA COFFEE</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">

         /*membuat background warna*/
         body{
            background-color: linen;
            color: #000;
            font-family: arial,sans-serif;
        }

        .jumbotron{
            background-color: linen;
            color:#8B4513;
            font-family: lucida caligraphy;
            text-align: center;
        }

	</style>
</head>
<body> 

<!-- Awal script Navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
		  <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			  <span class="sr-only">Toggle Nav</span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
            </button>
		    <a class="navbar-brand">CoffeeShop</a>
		  </div>
		  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
            <li>
				  <a href="home.php"><span class="glyphicon glyphicon-home"></span> Home </a>
			  </li>
			  <li class="active">
				  <a href="tampil-pesanan.php"><span class="glyphicon glyphicon-book"></span> Data pesanan <span class="sr-only">(current)</span></a>
			  </li>
			  <li>
				  <a href="D-pegawai.php"><span class="glyphicon glyphicon-book"></span> Data pegawai </a>
			  </li>
			  <li>
				  <a href="tampil-saran.php"><span class="glyphicon glyphicon-comment"></span> kritik & saran </a>
			  </li>
			  <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-lock"></span> user<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../home.php">profile</a></li>
              <li><a href="../logout.php">logout</a></li>
            </ul>
          </li>
			</ul>
		  </div>
		</div>
	  </nav><!-- Akhir script Navbar -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-pesanan.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from pesanan where  id_costumer='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="id_costumer">id costumer</label>
                        <input type="hidden" name="id_costumer" value="<?php echo $row['id_costumer']?>" class="form-control">
                        <input type="number" name="id_costumer" value="<?php echo $row['id_costumer']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">nama </label>
                        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="alamat">alamat </label>
                        <input type="text" name="alamat" value="<?php echo $row['alamat']?>" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="no_hp">No HP</label>
                        <input type="hidden" name="no_hp" value="<?php echo $row['no_hp']?>" class="form-control">
                        <input type="number" name="no_hp" value="<?php echo $row['no_hp']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_makanan">jenis makanan</label>
                        <input type="text" name="jenis_makanan" value="<?php echo $row['jenis_makanan']?>" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="harga_makanan">Harga_makanan</label>
                        <input type="hidden" name="harga_makanan" value="<?php echo $row['harga_makanan']?>" class="form-control">
                        <input type="number" name="harga_makanan" value="<?php echo $row['harga_makanan']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_minuman">jenis minuman</label>
                        <textarea name="jenis_minuman" class="form-control"><?php echo $row['jenis_minuman']?></textarea>
                    </div>

                    <div class="form-group">
                    <label for="harga_minuman">Harga_minuman</label>
                        <input type="hidden" name="harga_minuman" value="<?php echo $row['harga_minuman']?>" class="form-control">
                        <input type="number" name="harga_minuman" value="<?php echo $row['harga_minuman']?>" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

    <?php include "footer.php";?>  
