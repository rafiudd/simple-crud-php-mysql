<!DOCTYPE html>
<html>
<head>
	<title>Input Data Donasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php
        error_reporting();
        include 'koneksi.php';
    ?>
    <div class="container col-10 mt-5">
        <a href="index.php">Kembali</a>
        <h2>Input Data Donasi</h2>

        <form action="prosesInput.php" method="post">
            <div class="form-group mt-4">
                <label for="nama_donatur">Nama Donatur</label>
                <input required type="text" pattern="^[a-zA-Z]+$" class="form-control" name="nama_donatur" id="nama_donatur" placeholder="Masukan Nama Donatur">
            </div>
            <div class="form-group mt-3">
                <label for="no_donatur">No HP Donatur</label>
                <input required type="text" class="form-control" name="no_donatur" id="no_donatur" placeholder="Masukan No HP Donatur">
            </div>
            <div class="form-group mt-3">
                <label for="kategori">Kategori Donasi</label>
                <input required type="text" class="form-control" name="kategori" id="kategori" placeholder="Masukan Kategori Donasi">
            </div>
            <div class="form-group mt-3">
                <label for="jumlah">Jumlah Donasi</label>
                <input required type="number" class="form-control"name="jumlah" id="jumlah" placeholder="Masukan Jumlah Donasi">
            </div>

            <input type="submit" class="btn btn-primary mt-4" value="Simpan Data">
        </form>
    </div>
</body>
</html>
