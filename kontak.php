!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RISTORIA COFFEE</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/plugins/ckeditor/ckeditor.js"></script>
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
			  <li  class="active">
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
			<div class="col-md-8">	
				<form action="proses-saran.php" method="post">
					<div class="form-group">
						<h1><span class="glyphicon glyphicon-list"></span>  Contact Us</h1>
						<?php 

					if(@$_GET['pesan']=="inputBerhasil"){

					?>
						<div class="alert alert-success">
							Terima kasih, pesan anda sudah terkirim!
						</div>
					<?php

					}

					?>
						<label for="nama">Nama</label>
						<input type="text" class="form-control" name="nama" placeholder="Isikan nama pengirim">
					</div>
					<div class="form-group">
						<label for="pesan">Pesan</label>
						<textarea name="pesan" id="editor"></textarea>
						<script>
						CKEDITOR.replace( 'editor' );
						</script>
					</div>
					<button type="submit" class="btn btn-info">Simpan</button>
					<button type="reset" class="btn btn-danger">Batal</button>
				</form>
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