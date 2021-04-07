<?php 
session_start();
require_once '../config/db.php';
require_once '../config/function.php';
$username = $_GET['nama'];
header("Content-type: aplication/vnd-ms-excel");
header("Content-Disposition: attachment; filename= data kehadiran $username.xls");   
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>data kehadiran guru</title>
</head>
<body>
<?php 
	$username = $_GET['nama'];
	$as = mysqli_query($conn, "SELECT * FROM guru WHERE nama = '$username' ");
	$s = mysqli_fetch_assoc($as)
 ?>
<h2 style="text-align: left;" >data kehadiran guru</h2>
<h2 style="text-align: left;" >SMK Full Day Bustanul Ulum Bulugading</h2>

dicetak pada : <?= hari().",".date("d-m-Y"); ?><br>
nama         : <?= $s['nama'];  ?>

<table border="1">
	<tr>
		<th>No</th>
		<th>tanggal</th>
         <th>waktu</th>
          <th>Bulan</th>
         <th>Keterangan jam ke - </th>
         <th>struktural </th>

         <th>Status </th>

	</tr>
	<?php 
	$username = $_GET['nama'];
	$no = 1;
	$res = mysqli_query($conn, "SELECT * FROM presensi WHERE nama = '$username' ");
	while ( $sql = mysqli_fetch_assoc($res) ) : ?>
	<tr>
		<td><?= $no; ?></td>
		<td><?= $sql['tanggal']; ?></td>
		<td><?= $sql['waktu']; ?></td>
			<td><?= $sql['bulan']; ?></td>
		<td><?= $sql['keterangan_jam']; ?></td>
		<td><?= $sql['status_jabatan']; ?></td>

		<td><?= $sql['status']; ?></td>

	
	</tr>
	<?php
	$no++;
	 endwhile ?>

</table>

</body>
</html>
