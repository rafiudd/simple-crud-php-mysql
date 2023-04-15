<?php
include 'koneksi.php';

// Mendapatkan data yang di-submit dari form
$id = $_GET['id'];
$nama_donatur = $_POST["nama_donatur"];
$no_donatur = $_POST["no_donatur"];
$kategori = $_POST["kategori"];
$jumlah = $_POST["jumlah"];

// Menyimpan data donasi ke database
$hasil = mysqli_query($koneksi, "UPDATE donasi SET nama_donatur='$nama_donatur', no_donatur = '$no_donatur', kategori = '$kategori', jumlah = '$jumlah' WHERE id='$id'");

if (!$hasil){
    die ("Data Gagal Diubah".mysqli_errno($koneksi).mysqli_error($koneksi));
} else {
    echo "<script>alert('Data Berhasil Diubah');window.location.href='index.php'</script>";
}
?>
