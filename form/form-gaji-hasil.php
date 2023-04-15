<?php
    $nama_lengkap = $_POST["nama_lengkap"];
    $golongan = $_POST["golongan"];
    $jabatan_fungsional = $_POST["jabatan_fungsional"];
    $jabatan_struktural = $_POST["jabatan_struktural"];
    $pinjaman = $_POST["pinjaman"];

    // gaji
    $gaji = 0;
    $tunjangan_fungsional = 0;
    $tunjangan_struktural = 0;
    $pph = 0;

    // total
    $total_pemasukan = 0;
    $total_pengeluaran = 0;
    $total_penerimaan = 0;

    // var_dump($nama_lengkap, $golongan, $jabatan_fungsional, $jabatan_struktural);

    switch ($golongan) {
        case 'I':
            $gaji = 1000000;
            $pph = 10;
            break;
        case 'II':
            $gaji = 2000000;
            $pph = 10;
            break;
        case 'III':
            $gaji = 2500000;
            $pph = 15;
            break;
        case 'IV':
            $gaji = 3000000;
            $pph = 17.5;
            break;
        default:
            break;
    }

    switch ($jabatan_fungsional) {
        case 'Asisten Ahli':
            $tunjangan_fungsional = 400000;
            break;
        case 'Lektor':
            $tunjangan_fungsional = 1000000;
            break;
        case 'Lektor Kepala':
            $tunjangan_fungsional = 2000000;
            break;
        case 'Guru Besar':
            $tunjangan_fungsional = 5000000;
            break;
        default:
            break;
    }

    switch ($jabatan_struktural) {
        case 'Ketua Prodi':
            $tunjangan_struktural = 5000000;
            break;
        case 'Wakil Ketua Prodi':
            $tunjangan_struktural = 4000000;
            break;
        case 'Dekan':
            $tunjangan_struktural = 10000000;
            break;
        case 'Pembantu Dekan':
            $tunjangan_struktural = 7000000;
            break;
        case 'Rektor':
            $tunjangan_struktural = 15000000;
            break;
        case 'Pembantu Rektor':
            $tunjangan_struktural = 10000000;
            break;
        default:
            break;
    }

    $total_pemasukan = $gaji + $tunjangan_fungsional + $tunjangan_struktural;
    $total_pengeluaran = ($pph * $total_pemasukan / 100) - $pinjaman;
    $total_penerimaan = $total_pemasukan - $total_pengeluaran;

    function rupiah($angka){
        $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
        return $hasil_rupiah;
    }
?>

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
                <h3>Hasil Perhitungan Gaji</h3>
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input disabled type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="<?php echo $nama_lengkap; ?>">
                    </div>

                    <div class="form-group">
                        <label for="golongan">Golongan</label>
                        <input disabled type="text" class="form-control" name="golongan" id="golongan" value="<?php echo $golongan; ?> (<?php echo rupiah($gaji) ?>)">
                    </div>

                    <div class="form-group">
                        <label for="jabatan_fungsional">Jabatan Fungsional</label>
                        <input disabled type="text" class="form-control" name="jabatan_fungsional" id="jabatan_fungsional" value="<?php echo $jabatan_fungsional; ?> (<?php echo rupiah($tunjangan_fungsional) ?>)">
                    </div>

                    <div class="form-group">
                        <label for="jabatan_struktural">Jabatan Struktural</label>
                        <input disabled type="text" class="form-control" name="jabatan_struktural" id="jabatan_struktural" value="<?php echo $jabatan_struktural; ?> (<?php echo rupiah($tunjangan_struktural) ?>)">
                    </div>

                    <div class="form-group">
                        <label for="pinjaman">Pinjaman</label>
                        <input disabled type="text" class="form-control" name="pinjaman" id="pinjaman" value="<?php echo rupiah($pinjaman); ?>">
                    </div>

                    <div class="form-group">
                        <label for="pph">PPH</label>
                        <input disabled type="text" class="form-control" name="pph" id="pph" value="<?php echo $pph; ?>%">
                    </div>

                    <div class="form-group">
                        <label for="total_pemasukan">Gaji Kotor</label>
                        <input disabled type="text" class="form-control" name="total_pemasukan" id="total_pemasukan" value="<?php echo rupiah($total_pemasukan); ?>">
                    </div>

                    <div class="form-group">
                        <label for="total_penerimaan">Gaji Bersih Sudah Pajak</label>
                        <input disabled type="text" class="form-control" name="total_penerimaan" id="total_penerimaan" value="<?php echo rupiah($total_penerimaan); ?>">
                    </div>
                    
                    <a href="form-gaji.php"><button class="btn btn-danger" type="submit">Hitung Ulang Gaji</button></a>
            </div>
        </div>
    </div>
</body>
</html>