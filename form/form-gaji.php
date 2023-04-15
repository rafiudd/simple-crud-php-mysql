<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        * {
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 mt-5">
                <h3>Form Perhitungan Gaji</h3>
                <form action="form-gaji-hasil.php" method="post">
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input required type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Masukan Nama Langkap">
                    </div>

                    <div class="form-group">
                        <label for="golongan">Golongan</label>
                        <select name="golongan" class="form-control" id="golongan">
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jabatan_fungsional">Jabatan Fungsional</label>
                        <select name="jabatan_fungsional" class="form-control" id="jabatan_fungsional">
                            <option value="Asisten Ahli">Asisten Ahli</option>
                            <option value="Lektor">Lektor</option>
                            <option value="Lektor Kepala">Lektor Kepala</option>
                            <option value="Guru Besar">Guru Besar</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jabatan_struktural">Jabatan Struktural</label>
                        <select name="jabatan_struktural" class="form-control" id="jabatan_struktural">
                            <option value="Ketua Prodi">Ketua Prodi</option>
                            <option value="Wakil Ketua Prodi">Wakil Ketua Prodi</option>
                            <option value="Dekan">Dekan</option>
                            <option value="Pembantu Dekan">Pembantu Dekan</option>
                            <option value="Rektor">Rektor</option>
                            <option value="Pembantu Rektor">Pembantu Rektor</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pinjaman">Pinjaman</label>
                        <input required type="number" class="form-control" name="pinjaman" id="pinjaman" placeholder="Masukan Pinjaman">
                    </div>
                    
                    <button class="btn btn-primary" type="submit">Hitung Gaji</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>