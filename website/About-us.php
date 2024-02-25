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
            color: #000;
            font-family: lucida caligraphy;
        }
        .jumbotron h1{
            text-align: center;
            color: #8B4513;
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
			  <li class="active">
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
              	<li><a href="tampil-pesanan.php">profile</a></li>
              	<li><a href="login.php">admin</a></li>
            	</ul>
          	</li>
			</ul>
		  </div>
		</div>
	  </nav><!-- Akhir script Navbar -->

     <div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-md-12">	
				    <h1> About Us </h1>
                    <h2> Discover Our Story </h2>
                    <h4>Welcome to Ristoria Caffe</h4>
                    <h4> this cafe focuses on the taste of premium food and drinks
                    Ristora is a restaurant, bar and coffee roaster located on a busy corner of Exmouth Farringdon Market. With glass frontages on both sides of the building, it overlooks the market and busy market intersection.</h4>
				</div>
			</div>
		</div>
	</div>

    <div class="container">
		<div class="row">
			<div class="col-md-12">	
				  <div class="carousel slide" id="contoh-carousel" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#contoh-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#contoh-carousel" data-slide-to="1"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="img/k.jpg" alt="Keterangan Gambar satu">
								<div class="carousel-caption">							
								</div>
							</div>
							<div class="item">
								<img src="img/l.jpg"  alt="Keterangan Gambar dua">
								<div class="carousel-caption">									
								</div>
							</div>
						</div>
						<a class="left carousel-control" href="#contoh-carousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Prev</span>
						</a>
						<a class="right carousel-control" href="#contoh-carousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
			</div>
		</div>
	</div>
    </div>

      <br>
        <div class="row">
			<div class="col-md-12">
				<center>Copyright &copy <?php echo date ('Y');?> Website CoffeeShop, design with <span class="glyphicon glyphicon-heart"></span> by Nur Amanatus Sa'adah<br/>
				<a href="home.php">Home</a> | 
				<a href="About-us.php">About Us</a> | 
                <a href="menu.php">Menu</a> | 
				<a href="kontak.php"> contact us</a> |
                <a href="login.php">Login</a> |  <br>
				<label class="label label-danger">PERHATIAN:</label>
				Semua informasi di halaman ini memiliki hak cipta, anda tidak diperkenankan untuk menyebarluaskan tanpa seijin pengelola website
				</center>
			</div>
			</div>
	    </div><!-- Akhir FOOTER -->


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