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
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
			  <li>
				  <a href="tampil-pesanan.php"><span class="glyphicon glyphicon-book"></span> Data pesanan <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="active">
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
    
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-pegawai.php" method="POST">
                    <div class="form-group">
                        <label for="id_pegawai">Id pegawai</label>
                        <input type="number" name="id_pegawai" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama </label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="no_ hp">No Hp</label>
                        <input type="number" name="no_hp" class="form-control">
                    </div>
                    

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
    
<?php include "footer.php";?>