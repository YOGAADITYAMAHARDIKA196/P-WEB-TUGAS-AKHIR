<?php
	echo "<title> Data Diri</title>";
	$fp=fopen("filedatadiri.txt", "r");
	echo "<center><table border=1";
	echo "<tr><td>Nama</td> <td>Nim</d> <td>email</td> <td>Prodi</td> <td>Alamat</td> </tr>";

	while($isi=fgets($fp,)){
	$pisah = explode('|',$isi);
	echo "<tr> <td>$pisah[0]</td> <td>$pisah[1]</td> <td>$pisah[2]</td> <td>$pisah[3]</td> <td>$pisah[4]</td> </tr>";
	 }
	echo "</table>";
	echo "<center><a href='index.php'> Isi Form Data Diri </a>";
?>