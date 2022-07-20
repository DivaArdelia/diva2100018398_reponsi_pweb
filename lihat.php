<?php
	function cetak_data(){
		$fp = fopen("responsi.txt", "r");
		echo "<table border=1>";

		echo "<td>Tanggal</td> <td>Nama Pengirim</td> <td>Nama Penerima</td><td>Alamat</td><td>Jarak</td><td>Keterangan</td><td>Biaya</td>";
		while ($isi = fgets($fp, 80)) {
		$kirim = explode("|", "$isi");
		echo "<tr>";
		echo "<td>$kirim[0]</td><td>$kirim[1]</td><td>$kirim[2]</td><td>$kirim[3]</td><td>$kirim[4]</td><td>$kirim[5]</td><td>$kirim[6]</td>";
		echo "</tr>";
		}
	}
	echo "Data Pengiriman barang<br><br>";
	cetak_data();
	
?>