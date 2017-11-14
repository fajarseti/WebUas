<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ujian | Genap 2015/2016 | Dosen : MY Teguh S, M.Kom</title>
	<link rel="stylesheet" type="text/css" href="tes.css">
</head>
<body>
	
	 <div class="fly">
		<div class="content">
			<ul>
				<li>< class="active">&nbsp </li>
				<li>< class="active">&nbsp </li>
				<li><a class="active" href="index.php?page=masuk">Home</a></li>
				
				<li><a href="index.php?page=lihat_pasien">Daftar Member</a></li>
				
				
				<li><a href="index.php?page=lihat_dokter">Sewa</a></li>
				<li><a href="index.php?page=lihat_periksa">Kembali</a></li>
				<li><a href="index.php?page=lihat_brg">Barang</a></li>
				<li><a href="index.php?page=lihat_ptgs">Petugas</a></li>
				<li><a href="index.php?page=lihat_obat">FAQ</a></li>
				<li><a href="#">Log out</a></li>
			</ul>
		</div>
	</div> --> <!-- /.fly -->
	<div class="flying-books"><img src="PR2.png" alt=""></div>
		<div class="main">
			<div class="content">
			<center>
			<h1>CV. Istana Rental</h1>
			<p>Jalan Gaharu Raya, Banyumanik, Semarang<br>Phone : 024 - 913505161</p></center>
			<?php
				$page = (isset($_GET['page']))? $_GET['page'] : "main";
				switch ($page) 
				{
				case 'masuk': include "home.php"; break;
				case 'lihat_pasien': include "laporan_pasien.php"; break;
				case 'input_pasien': include "input_pasien.php"; break;	
				case 'lihat_sopir': include "laporan_sopir.php"; break;
				case 'input_sopir': include "input_sopir.php"; break;	
				case 'lihat_dokter': include "laporan_dokter.php"; break;
				case 'input_dokter': include "input_dokter.php"; break;
				case 'input_sewa': include "input_sewa.php"; break;	
				case 'lihat_obat': include "laporan_obat.php"; break;
				case 'input_obat': include "input_obat.php"; break;	
				case 'lihat_periksa': include "form_periksa.php"; break;
				case 'input_periksa': include "input_periksa.php"; break;
				case 'input_dtlperiksa': include "input_dtlperiksa.php"; break;	
				case 'lihat_brg': include "laporan_brg.php"; break;
				case 'input_brg': include "input_brg.php"; break;	
				case 'lihat_ptgs': include "laporan_ptgs.php"; break;
				case 'input_ptgs': include "input_ptgs.php"; break;	
				case 'main' :
				default : include 'home.php';
				}
			?>
			</div>
		</div>
	<div class="footer">
		<div class="content">
			<p>
				<center><font color=white>Copyright &copy; 2017 | Fajar Setiadi</font></center>
			</p>
		</div>
	</div> <!-- /.footer -->
		
</body>
</html>