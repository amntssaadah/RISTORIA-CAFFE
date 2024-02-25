<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:login.php");
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
				  <a href="home.php"><span class="glyphicon glyphicon-home"></span> Home <span class="sr-only">(current)</span></a>
			  </li>
			  <li>
				  <a href="About-us.php"><span class="glyphicon glyphicon-book"></span> About Us </a>
			  </li>
			  <li class="dropdown">
            	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-cutlery"></span> Menu <span class="caret"></span></a>
            	<ul class="dropdown-menu">
              	<li><a href="makanan.php">makanan</a></li>
              	<li><a href="minuman.php">minuman</a></li>
            	</ul>
          	</li>
			  <li>
				  <a href="kontak.php"><span class="glyphicon glyphicon-comment"></span> Contact us</a>
			  </li>			 
			  <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-lock"></span> user<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="home.php">profile</a></li>
              <li><a href="login.php">admin</a></li>
            </ul>
          </li>
			</ul>
		  </div>
		</div>
	  </nav><!-- Akhir script Navbar -->
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Data Pesanan</h1>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>Id costumer</th><th>Nama</th><th>ALamat</th><th>No Hp</th><th>Jenis makanan</th><th>Harga Makanan</th><th>Jenis Minuman</th><th>Harga Minuman</th>
                <th>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "koneksi.php";
        $sql=$koneksi->query("select * from pesanan order by id_costumer ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['id_costumer']?></td>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['alamat']?></td>
                <td><?php echo $row['no_hp']?></td>
                <td><?php echo $row['jenis_makanan']?></td>
                <td><?php echo $row['harga_makanan']?></td>
                <td><?php echo $row['jenis_minuman']?></td>
                <td><?php echo $row['harga_minuman']?></td>
                <td>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<?php include "admin/footer.php";?>