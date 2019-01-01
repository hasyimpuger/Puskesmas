<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link href="css/home/bootstrap.min.css" rel="stylesheet">
  <link href="css/home/font.css" rel="stylesheet type="text/css"">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <style>
	  body {
		  font: 400 15px/1.8 Lato, sans-serif;
		  color: #777;
	  }
	  
	  h4 {
		  margin: 10px 0 30px 0;
		  letter-spacing: 10px;      
		  font-size: 20px;
		  color: #111;
		  
	  }
	  
	  .person {
		  border: 10px solid transparent;
		  margin-bottom: 25px;
		  width: 80%;
		  height: 80%;
		  opacity: 0.7;
	  }
	  .person:hover {
		  border-color: #f1f1f1;
	  }
	  .carousel-inner img {
		  -webkit-filter: grayscale(0);
		  filter: grayscale(0); 
		  width: 100%; /* Set width to 100% */
		  margin: auto;
	  }
	  .carousel-caption {
		  color: #fff ;
		  background:#9F8170C0;
		  border-radius:10px;
		  margin-bottom:150px;
		  
	  }
	  @media (max-width: 600px) {
		.carousel-caption {
		  display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
		}
	  }
	  .bg-1 {
		  background: #2d2d30;
		  color: #bdbdbd;
	  }
	  .bg-1 h3 {color: #fff;}
	  .bg-1 p {font-style: italic;}
	  .list-group-item:first-child {
		  border-top-right-radius: 0;
		  border-top-left-radius: 0;
	  }
	  .list-group-item:last-child {
		  border-bottom-right-radius: 0;
		  border-bottom-left-radius: 0;
	  }
	  .thumbnail {
		  padding: 0 0 15px 0;
		  border: none;
		  border-radius: 0;
	  }
	  .thumbnail p {
		  margin-top: 15px;
		  color: #555;
	  }
	  .btn {
		  padding: 10px 20px;
		  background-color: #333;
		  color: #f1f1f1;
		  border-radius: 0;
		  transition: .2s;
	  }
	  .btn:hover, .btn:focus {
		  border: 1px solid #333;
		  background-color: #fff;
		  color: #000;
	  }
	  .modal-header, h4 {
		  background-color: #333;
		  color: #fff !important;
		  text-align: center;
		  font-size: 30px;
	  }
	  .close{
		  background-color: #333;
		  color: #fff !important;
		  text-align: right;
		  font-size: 30px;
	  }
	  
	  .modal-header, .modal-body {
		  padding: 40px 50px;
	  }
	  .nav-tabs li a {
		  color: #777;
	  }
	  #googleMap {
		  width: 100%;
		  height: 400px;
		  -webkit-filter: grayscale(100%);
		  filter: grayscale(100%);
	  }  
	  .navbar {
		  font-family: Montserrat, sans-serif;
		  margin-bottom: 0;
		  background-color: #2d2d30;
		  border: 0;
		  font-size: 11px !important;
		  letter-spacing: 4px;
		  opacity: 0.9;
	  }
	  .navbar li a, .navbar .navbar-brand { 
		  color: #d5d5d5 !important;
	  }
	  .navbar-nav li a:hover {
		  color: #FF7F50 !important;
	  }
	  .navbar-nav li.active a {
		  color: #fff !important;
		  background-color: #555 !important;
	  }
	  .navbar-default .navbar-toggle {
		  border-color: transparent;
	  }
	  .open .dropdown-toggle {
		  color: #fff;
		  background-color: #555 !important;
	  }
	  .dropdown-menu li a {
		  color: #000 !important;
	  }
	  .dropdown-menu li a:hover {
		  background-color: red !important;
	  }
	  footer {
		  background-color: #2d2d30;
		  color: #f5f5f5;
		  padding: 32px;
	  }
	  footer a {
		  color: #f5f5f5;
	  }
	  footer a:hover {
		  color: #777;
		  text-decoration: none;
	  }  
	  .form-control {
		  border-radius: 0;
	  }
	  textarea {
		  resize: none;
	  }
	  form {border: 3px solid #f1f1f1;}

		input[type=text], input[type=password] {
			width: 450px;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: box;
		}

		button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px auto;
			border: none;
			cursor: pointer;
			width: 450px;
		}

		button:hover {
			opacity: 0.8;
		}

		.cancelbtn {
			width: auto;
			padding: 10px 18px;
			background-color: #f44336;
		}


		.container {
			padding: 16px;
		}

		span.psw {
			float: right;
			padding-top: 16px;
		}

		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: px) {
			span.psw {
			   display: block;
			   float: none;
			}
			.cancelbtn {
			   width: 300px;
			}
		}
  </style>
</head>

<!-- Body -->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		  </button>
		  <a class="navbar-brand" href="#myPage"> </a>
		  <img src="gambar/Logo.png"  width="50" height="50" >
		  <img src="gambar/lmmc.png"  width="70" height="50" >
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="#myPage">HOME</a></li>
			<li><a href="#band">TENTANG</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">HAPUS<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="dokter/dokter_LMMC/form.html" >Dokter</a></li>
					<li><a href="resepsionis/home.html" >Resepsionis</a></li> 
					<li><a href="apoteker/apotek_LMMC/Tampilan Beranda.html" >Apoteker</a></li>
				</ul>
			</li>
			<li ><a href="../puskesmas/login.php" data-toggle="modal" data-target="">LOGIN</a>
			  
			</li>
			
		  </ul>
		</div>
	  </div>
	</nav>
	<?php
include('koneksi.php');?>
	
	<!-- Modal -->
	  <div class="modal fade" id="myLogin" role="dialog">
		<div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">LOGIN AS</h4>
			</div>
			<div class="modal-body">
				<form action="login_proses.php" method="post">
				  <div class="container">
					<div class="form-group>
					<label for="nama"><b>Username</b></label><br/>
					<input type="text" placeholder="Masukkan Username" name="nama" required>
					</div> 
					<div class="form-group>
					<label for="password"><b>Password</b></label><br/>
					<input type="password" placeholder="Masukkan Password" name="password" required><br/>
		 
					<button name= "submit" type="submit" value="Login">Login</button><br/>
					<label>
					  <input type="checkbox" checked="checked" name="remember"> Remember me
					</label>
					</div>
				  </div>
				</form>
			</div>
			<div class="modal-footer"></div>
		  </div>
		</div>
	  </div>
	
		
	<!-- Slider -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  <li data-target="#myCarousel" data-slide-to="1"></li>
		  <li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" >
		  <div class="item active">
			<img src="gambar/gerbang.jpg" alt="ulm" alt="apotik" width="1200" height="700">
			<div class="carousel-caption" >
			  <h3>UNIVERSITAS LAMBUNG MANGKURAT</h3>
			  <p>Gerbang utama kampus Universitas Lambung Mangkurat.</p>
			</div>      
		  </div>

		  <div class="item">
			<img src="gambar/klinik.jpg" alt="apotik" width="1200" height="700">
			<div class="carousel-caption">
			  <h3>MEDICAL CENTER UNIVERSITAS LAMBUNG MANGKURAT</h3>
			  <p>Gedung Klinik dan Apotik Medical Center Universitas Lambung Mangkurat.</p>
			</div>      
		  </div>
		
		  <div class="item">
			<img src="gambar/clinik.jpg" alt="clinik" width="1200" height="700">
			<div class="carousel-caption">
			  <h3>RUANGAN MEDIS</h3>
			  <p>Salah satu ruangan medis di Medical Center Universitas Lambung Mangkurat</p>
			</div>      
		  </div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
		</a>
	</div>

	<!-- Keterangan -->
	<div id="band" class="container text-center">
	  <br><br>
	  <h3> LAMBUNG MANGKURAT MEDICAL CENTER</h3>
	  <p><em>Welcome To Lambung Mangkurat Medical Center</em></p>
	  <p>Klinik Rawat Jalan Universitas Lambung Mangkurat di resmikan pada Jum’at 18 
		September 2018. Sebelumnya klinik ini hanyalah poliklinik biasa namun kini sudah 	  berubah menjadi klinik rawat jalan. Klinik ini berlokasi 
		di ULM tepatnya bersebelahan dengan Koperasi Mahasiswa (KOPMA). Fasilitas klinik diantaranya Dokter umum, 	  Dokter gigi, Psikologi, Gawat 
		Darurat, Laboratorium, dan Medical Check Up. Klinik ini melayani Mahasiswa, Dosen/Karyawan, Umum, dan BPJS.</p> 	  
	  <br>
	  <div class="row">
		<div class="col-sm-4">
		  <p class="text-center"><strong>KLINIK</strong></p><br>
		  <a href="layanan.html" data-toggle="collapse" data-target="klinik">
			<img src="gambar/klinik.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
		  </a>
		  <div id="demo" class="collapse">
		  </div>
		</div>
		<div class="col-sm-4">
		  <p class="text-center"><strong>APOTEK</strong></p><br>
		  <a href="layanan.html" data-toggle="collapse" data-target="apotek">
			<img src="gambar/apotek.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
		  </a>
		  <div id="demo2" class="collapse">
		  </div>
		</div>
		<div class="col-sm-4">
		  <p class="text-center"><strong>LABORATORIUM</strong></p><br>
		  <a href="layanan.html" data-toggle="collapse" data-target="laboratorium">
			<img src="gambar/clinik.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
		  </a>
		  <div id="demo3" class="collapse">
		  </div>
		</div>
	  </div>
	</div>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
</body>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>LMMC &copy <a href="https://www.pilkom.ulm.ac.id" data-toggle="tooltip" title="Visit w3schools">Mahasiswa Pendidikan Ilmu Komputer 2015</a></p> 
</footer>
</html>