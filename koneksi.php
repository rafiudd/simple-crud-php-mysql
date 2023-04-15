<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "UTS_WahyuBagasDwiPrasetyo";

$koneksi = mysqli_connect($host, $user, $password, $dbname);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

function rupiah($angka){
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}

?>
