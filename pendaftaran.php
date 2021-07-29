<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MUHAMMAD TAUFIQ RAMADHAN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="beranda.php">WEBSITE  STTI - NIIT</a></h1>
			<ul>
				<li><a href="beranda.php">BERANDA</a></li>
				<li><a href="prosedur.php">PROSEDUR</a></li>
				<li><a href="pendaftaran.php">PENDAFTARAN</a></li>
				<li><a href="kontak.php">KONTAK KAMI</a></li>
			</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>PENDAFTARAN</p>
		</div>
	</section>

	<!-- service -->
	<section class="service">
		<div class="container">
			<h3>FORM PENDAFTARAN SIDANG PROYEK</h3>
				<form>
				<table>
				  <tr><td>NIM </td><td><input type="text" name="NIM"></td></tr>
				  <tr><td>NAMA </td><td><input type="text" name="NAMA"></td></tr>
				  <tr><td>PROYEK</td>
				  <td>
					<select name ="PROYEK">
							  <option value="PROYEK 1">PROYEK 1</option>
								 <option value="PROYEK 2">PROYEK 2</option>
					</select>
				   </td>
				  </tr>
				  <tr><td>JUDUL PROYEK  </td><td><textarea name="JDL" width="300"></textarea></td></tr>
				  <tr><td><input type="submit" value="Simpan" name="simpan"></td></tr>
				  
				 </table>
				</form>
				
				<?php
					$NIM =@$_GET['NIM'];
					$NAMA =@$_GET['NAMA'];
					$PROYEK =@$_GET['PROYEK'];
					$JDL =@$_GET['JDL'];
					$simpan=@$_get['simpan'];


					if ($NIM) {
						echo " <br><br> <P> Terima Kasih telah melakukan pendaftaran sidang, silahkan tunggu info berikutnya untuk jadwal sidang! </P>
								<P> Data yang anda masukan adalah sebagai berikut:</P> <br> <strong>NIM:</strong> {$NIM} <br>";
					}

					if ($NAMA) {
						echo "<strong>NAMA:</strong> {$NAMA} <br>";
					}
					if ($PROYEK) {
						echo "<strong>PROYEK:</strong> {$PROYEK} <br>";
					}
					if ($JDL) {
						echo "<strong>JUDUL:</strong> {$JDL} <br><br><br><br><br>";
						
					}
				?>
		</div>
	</section>
	



	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2021 - Muhammad Taufiq Ramadhan. All Rights Reserved.</small>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>