<?php
	$nama_pengirim = $_POST['nama_pengirim'];
	$nama_penerima = $_POST['nama_penerima'];
	$alamat = $_POST['alamat'];
	$jarak = $_POST['jarak'];
	$keterangan = $_POST['keterangan'];
	$biaya = $jarak * 5000;
	$Tanggal = date("Y-m-d");
	if ($nama_pengirim!="" && $nama_penerima!="" && $alamat!="" && $jarak!="" && $keterangan!="") {
		$fp = fopen("responsi.txt", "a+");
		fputs($fp, "$Tanggal|$nama_pengirim|$nama_penerima|$alamat|$jarak|$keterangan|$biaya\n");
		fclose($fp);
	}
	echo "<table border=1 align=center>";
	echo "<center><h1>Terimakasih telah menggunakan jasa kami</h1></center>";
	echo "<center>Tanggal : $Tanggal</center>";
	echo "<br>";
	echo "<tr><td>Nama Pengirim</td><td>$nama_pengirim</td></tr></center>";
	echo "<tr><td>Nama Penerima</td><td>$nama_penerima</td></tr>";
	echo "<tr><td>Alamat</td><td>$alamat</td></tr>";
	echo "<tr><td>Jarak</td><td>$jarak</td></tr>";
	echo "<tr><td>Biaya</td><td>$biaya</td></tr>";
	echo "<tr><td>Keterangan</td><td>$keterangan</td></tr>";
	echo "<br>";
	echo "<center><a href='responsi.html'>Kembali Halaman Utama</a><br></center>";
	echo "<center><a href='lihat.php'>Lihat Data Pengiriman</a><br></center>";
?>