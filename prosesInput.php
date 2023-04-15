<?php
error_reporting();
include "koneksi.php";

date_default_timezone_set("Asia/Jakarta");
$nama_donatur = $_POST["nama_donatur"];
$no_donatur = $_POST["no_donatur"];
$kategori = $_POST["kategori"];
$jumlah = $_POST["jumlah"];
$created_at = date("Y-m-d h:i:s");

// Query untuk menyimpan data ke database
$query = "INSERT INTO donasi VALUES (0, '$nama_donatur','$no_donatur', '$kategori', '$jumlah', '$created_at')";
$result = mysqli_query($koneksi, $query);

// Cek apakah proses simpan data berhasil atau tidak
if ($result) {
    echo "<script>alert('Data berhasil disimpan!'); window.location = 'index.php';</script>";
} else {
    echo "<script>alert('Data gagal disimpan!'); window.location = 'input.php';</script>";
}

?>
