<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Donasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
    error_reporting();
    include 'koneksi.php';
    
    if(isset($_GET['id'])) {
        // Mendapatkan id donasi dari URL
        $id = $_GET['id'];
        
        // Mengeksekusi query untuk mendapatkan data donasi berdasarkan id
        $result = mysqli_query($koneksi, "SELECT * FROM donasi WHERE id='$id'");
        while($row = mysqli_fetch_array($result)){
            $id = $row['id'];
            $nama_donatur = $row['nama_donatur'];
            $no_donatur = $row['no_donatur'];
            $kategori = $row['kategori'];
            $jumlah = $row['jumlah'];
        }
    } else{
        header("Location: index.php");
    }
?>
    <div class="container col-10 mt-5">
        <a href="index.php">Kembali</a>
        <h2>Edit Data Donasi</h2>

        <form action="prosesEdit.php?id=<?php echo $id ?>" method="post">
            <div class="form-group mt-4">
                <label for="id">ID Donasi</label>
                <input disabled value="<?php echo $id ?>" type="text" class="form-control" name="id" id="id" placeholder="Masukan Nama Donatur">
            </div>
            <div class="form-group mt-4">
                <label for="nama_donatur">Nama Donatur</label>
                <input value="<?php echo $nama_donatur ?>" type="text" class="form-control" name="nama_donatur" id="nama_donatur" placeholder="Masukan Nama Donatur">
            </div>
            <div class="form-group mt-3">
                <label for="no_donatur">No HP Donatur</label>
                <input value="<?php echo $no_donatur ?>" type="text" class="form-control" name="no_donatur" id="no_donatur" placeholder="Masukan No HP Donatur">
            </div>
            <div class="form-group mt-3">
                <label for="kategori">Kategori Donasi</label>
                <input value="<?php echo $kategori ?>" type="text" class="form-control" name="kategori" id="kategori" placeholder="Masukan Kategori Donasi">
            </div>
            <div class="form-group mt-3">
                <label for="jumlah">Jumlah Donasi</label>
                <input value="<?php echo $jumlah ?>" type="number" class="form-control"name="jumlah" id="jumlah" placeholder="Masukan Jumlah Donasi">
            </div>

            <input type="submit" class="btn btn-primary mt-4" value="Update Data">
        </form>
    </div>
</body>
</html>