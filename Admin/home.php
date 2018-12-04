<?php
include 'koneksi.php';
session_start();
if(!empty($_SESSION['nama']) AND !empty($_SESSION['username']) AND !empty($_SESSION['password']) AND !empty($_SESSION['level'])){
	$nama = $_SESSION['nama'];
	$level = $_SESSION['level'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Puskesmas</title>
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="../assets/css/datepicker3.css" rel="stylesheet">
	<link href="../assets/css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Puskesmas</span></a>
				<ul class="nav navbar-top-links navbar-right">
					
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $nama ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span><?php echo $level; ?></div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li><a href="?page=beranda"><em class="fa fa-dashboard">&nbsp;</em> Beranda</a></li>
			<li><a href="?page=pasien"><em class="fa fa-ambulance ">&nbsp;</em> Pasien</a></li>
			<li><a href="?page=data_kepegawaian"><em class="fa fa-address-card ">&nbsp;</em> Data Kepegawaian</a></li>
			<li><a href="?page=kunjungan"><em class="fa fa-calendar ">&nbsp;</em> Kunjungan</a></li>
			<li><a href="?page=dokter"><em class="fa fa-address-book">&nbsp;</em> Dokter</a></li>
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				
			</ol>
		</div><!--/.row-->
		
		
		
		<?php 
        if(isset($_GET['page'])) {
            $page = $_GET['page'];
            if($page == "beranda") {
                include 'beranda.php';
			} 
			
			elseif($page == "pasien") {
                include 'pasien.php';
            }elseif($page == "tambah_pasien") {
                include 'tambah_pasien.php';
            } elseif($page == "edit_pasien") {
            	include 'edit_pasien.php';
            } elseif($page == "tambah_pasienproses") {
            	include 'tambah_pasienproses.php';
			} elseif($page == "edit_pasienproses") {
				include 'edit_pasienproses.php';
			} elseif($page == "hapus_pasien") {
				include 'hapus_pasien.php';
			}

			elseif($page == "data_kepegawaian") {
                include 'data_kepegawaian.php';
            }elseif($page == "tambah_datakepegawaian") {
                include 'tambah_datakepegawaian.php';
            } elseif($page == "edit_data") {
            	include 'edit_data.php';
            } elseif($page == "tambah_dataproses") {
            	include 'tambah_dataproses.php';
			} elseif($page == "edit_kepegawaian") {
				include "edit_kepegawaian.php";
			} elseif($page == "edit_dataproses") {
				include 'edit_dataproses.php';
			} elseif($page == "hapus_kepegawaian") {
				include "hapus_kepegawaian.php";
			}
			
			elseif ($page == "kunjungan") {
            	include 'kunjungan.php';
			}
			
			elseif ($page == "dokter") {
            	include 'dokter.php';
            }elseif($page == "tambah_dokter") {
                include 'tambah_dokter.php';
            } elseif($page == "edit_dokter") {
            	include 'edit_dokter.php';
            } elseif($page == "tambah_dokterproses") {
            	include 'tambah_dokterproses.php';
            }
        } else {
            include 'beranda.php';
        }
        ?>
		
	</div>	<!--/.main-->
	
	<script src="../assets/js/jquery-1.11.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/chart.min.js"></script>
	<script src="../assets/js/chart-data.js"></script>
	<script src="../assets/js/easypiechart.js"></script>
	<script src="../assets/js/easypiechart-data.js"></script>
	<script src="../assets/js/bootstrap-datepicker.js"></script>
	<script src="../assets/js/custom.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};

$(document).ready( function () {
    $('#myTable').DataTable();
} );
flatpickr("#date", {
	dateFormat: "Y-m-d"
});
	</script>
		
</body>
</html>
<?php
} else {
	echo "Harus Diisi";
}
?>