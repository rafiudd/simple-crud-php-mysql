<!DOCTYPE html>
<html>
    <head>
        <title>Donasi Management</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <div class="container col-11">
            <br><br>
            <h2 align="center">Donasi Management</h2>
            <a href="./input.php"><button class="btn btn-primary">Tambah Data</button></a>

            <table class="table table-striped mt-2">
                <thead>
                    <tr>
                        <th scope="col">ID Donasi</th>
                        <th scope="col">Nama Donatur</th>
                        <th scope="col">No HP Donatur</th>
                        <th scope="col">Kategori Donasi</th>
                        <th scope="col">Jumlah Donasi</th>
                        <th scope="col">Tanggal Donasi</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <?php

                            include "koneksi.php";
                            $query = mysqli_query($koneksi, "SELECT * FROM donasi ORDER BY id DESC");

                            while ($data = mysqli_fetch_array($query)) {
                            ?>
                    <tr>
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['nama_donatur']; ?></td>
                        <td><?php echo $data['no_donatur']; ?></td>
                        <td><?php echo $data['kategori']; ?></td>
                        <td><?php echo rupiah($data['jumlah']); ?></td>
                        <td><?php echo $data['created_at']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $data['id']?>"><button class="btn btn-dark">Edit</button></a>
                            <a href="hapus.php?id=<?php echo $data['id']?>"><button class="btn btn-danger">Hapus</button></a>
                            <?php } ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
