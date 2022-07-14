<?php
$kirim = isset($_POST['kirim']);
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$prodi = $_POST['prodi'];
$alamat=$_POST['alamat'];

echo "<head> <title> Data Diri </head></title>";
$fp=fopen("filedatadiri.txt", "a+");
fputs($fp,"$nama|$nim|$email|$prodi|$alamat\n");
fclose($fp);

echo "Terimakasih atas partisipasi anda mengisi data diri<br>";
echo "<a href=lihat.php> Lihat Data Diri </a><br>";
?>