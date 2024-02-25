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
	  <div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-md-12">	
				<h1>Makanan</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img src="img/14.jpg"width="200px" class="img-round" alt="Tampilan gambar dengan class img-round">
				<h4>AYAM GEPREK</h4>
				<p class="card-text">Rp 15.000,-</p>
       			<a href="input-pesanan.php" class="btn btn-danger">Beli</a>
			</div>
			<div class="col-md-3">
				<img src="img/18.jpg" width="250px" class="img-round" alt="Tampilan gambar dengan class img-round">
				<h4>NASI GORENG</h4>
				<p class="card-text">Rp 15.000,-</p>
       			<a href="input-pesanan.php" class="btn btn-danger">Beli</a>
			</div>
			<div class="col-md-3">
				<img src="img/16.jpg"width="200px" class="img-round" alt="Tampilan gambar dengan class img-round">
				<h4>SPAGETTI</h4>
				<p class="card-text">Rp 15.000,-</p>
       			<a href="input-pesanan.php" class="btn btn-danger">Beli</a>
			</div>
			<div class="col-md-3">
				<img src="img/25.jpg"width="200px" class="img-round" alt="Tampilan gambar dengan class img-round">
				<h4>DIMSUM</h4>
				<p class="card-text">Rp 25.000,-</p>
       			<a href="input-pesanan.php" class="btn btn-danger">Beli</a>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3">
				<img src="img/26.jpg" width="250px" class="img-round" alt="Tampilan gambar dengan class img-round">
				<h4>NUGGET</h4>
				<p class="card-text">Rp 8.000,-</p>
       			<a href="input-pesanan.php" class="btn btn-danger">Beli</a>
			</div>
			<div class="col-md-3">
				<img src="img/27.jpg"width="200px" class="img-round" alt="Tampilan gambar dengan class img-round">
				<h4>KEBAB</h4>
				<p class="card-text">Rp 15.000,-</p>
				<a href="input-pesanan.php" class="btn btn-danger">Beli</a>
			</div>
			<div class="col-md-3">
				<img src="img/soto.jpg"width="150px" class="img-round" alt="Tampilan gambar dengan class img-round">
				<h4>SOTO</h4>
				<p class="card-text">Rp 25.000,-</p>
       			<a href="input-pesanan.php" class="btn btn-danger">Beli</a>
			</div>
			<div class="col-md-3">
				<img src="img/seafood.jpg" width="100px" class="img-round" alt="Tampilan gambar dengan class img-round">
				<h4>SEAFOOD</h4>
				<p class="card-text">Rp 8.000,-</p>
       			<a href="Rinput-pesanan.php" class="btn btn-danger">Beli</a>
			</div>
		</div>
		<br>  
		
		<div class="row">
			<div class="col-md-3">
				<img src="img/sate.jpg"width="200px" class="img-round" alt="Tampilan gambar dengan class img-round">
				<h4>SATE</h4>
				<p class="card-text">Rp 15.000,-</p>
				<a href="input-pesanan.php" class="btn btn-danger">Beli</a>
			</div>
			<div class="col-md-3">
				<img src="img/corn dogs.jpg"width="200px" class="img-round" alt="Tampilan gambar dengan class img-round">
				<h4>CORN DOGS</h4>
				<p class="card-text">Rp 25.000,-</p>
       			<a href="input-pesanan.php" class="btn btn-danger">Beli</a>
			</div>
			<div class="col-md-3">
				<img src="img/bakso.jpg" width="150px" class="img-round" alt="Tampilan gambar dengan class img-round">
				<h4>BAKSO</h4>
				<p class="card-text">Rp 8.000,-</p>
       			<a href="input-pesanan.php" class="btn btn-danger">Beli</a>
			</div>
			<div class="col-md-3">
				<img src="img/tteobokki.jpg"width="150px" class="img-round" alt="Tampilan gambar dengan class img-round">
				<h4>TTEOBOKKI</h4>
				<p class="card-text">Rp 15.000,-</p>
				<a href="input-pesanan.php" class="btn btn-danger">Beli</a>
			</div>
		</div>
	</div>

	<br>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>  
<script src="DataTables/datatables.min.js"></script>	  
<script type="text/javascript">
$(document).ready(function(){
	$('#dataTables').DataTable();
});
	  
</script>
	  
</body>
</html>