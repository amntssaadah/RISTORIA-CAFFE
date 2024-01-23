<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RISTORIA COFFEE</title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		
		/* buat background full screen dengan gambar*/
		body{
			margin: 0;
			padding: 0;
			background: url(<?php echo "../img/al.jpg"; ?>) no-repeat center center fixed;
			background-size: cover;
			font-family: Arial, sans-serif;
			color: #ffffff; 
			align-items: center;
			}

			.content {
			text-align: center;
			padding: 50px;
		    }
		
		/* buat background di bagian jumbotron transparan*/
		.jumbotron{
			text-align : center;
			padding : 270px;
			background : rgba(0,0,0,0.5);
			border-radius : 10px;
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
            <li class="active">
				  <a href="home.php"><span class="glyphicon glyphicon-home"></span> Home </a>
			  </li>
			  <li>
				  <a href="tampil-pesanan.php"><span class="glyphicon glyphicon-book"></span> Data pesanan <span class="sr-only">(current)</span></a>
			  </li>
			  <li>
				  <a href="tampil-pegawai.php"><span class="glyphicon glyphicon-book"></span> Data pegawai </a>
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
	<div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-md-12">	
				<center><h2>WELCOME TO</h2>
				<H1>RISTORIA COFFEE</H1>
			<p><a class = "btn btn-primary btn-lg" href = "D-pesanan.php"role = "button"> Next </a></p> </center>
				</div>
			</div>
		</div>
	</div>
	

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
	

<script src="../bootstrap/js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>

<script src="../DataTables/datatables.min.js"></script>

<script type="text/javascript">
 $(document).ready(function(){
     $('#dataTables').DataTable();
 });

</script>

</body>
</html>