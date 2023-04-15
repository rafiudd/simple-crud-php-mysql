<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        * {
            margin: 0 auto;
        }

        table {
            margin-top: 100px;
            margin-bottom: 100px;
            width: 60%;
            vertical-align: middle;
        }

        td {
            padding: 4px 8px 4px 8px;
        }

        .centered {
            text-align: center;
        }

        .bold {
            font-weight: bold;
        }

        input {
            margin-top: 10px;
            margin-left: 10px;
            /* width: 10%; */
        }
    </style>
</head>
<body>
    <form action="form-hasil.php" method="post">
        <table border=1>
            <tr>
                <td class="p-right" colspan="3"><b>B. EVALUASI KINERJA</b></td>
            </tr>
            <tr>
                <td height="50" rowspan="1" colspan="3">Arti Nilai</td>
            </tr>
            <tr>
                <td class="centered">1</td>
                <td colspan="2">Sangat tidak baik / sangat rendah hati / tidak pernah</td>
            </tr>
            <tr>
                <td class="centered">2</td>
                <td colspan="2">Tidak baik / rendah / jarang</td>
            </tr>
            <tr>
                <td class="centered">3</td>
                <td colspan="2">Biasa / cukup / kadang-kadang</td>
            </tr>
            <tr>
                <td class="centered">4</td>
                <td colspan="2">Baik / tinggi / sering</td>
            </tr>
            <tr>
                <td class="centered">5</td>
                <td colspan="2">Sangat baik / sangat tinggi / selalu</td>
            </tr>

            <tr class="centered">
                <td><b>No</b></td>
                <td><b>Kriteria</b></td>
                <td><b>Nilai</b></td>
            </tr>

            <tr>
                <td height="50" colspan="3"><b>B.1 Mahasiswa</b></td>
            </tr>

            <tr>
                <td class="centered">1</td>
                <td>Rerata kemampuan kognitif</td>
                <td>
                    <input type="radio" id="b1-11" name="b1-1" value="1" required>
                    <label for="b1-11">1</label>

                    <input type="radio" id="b1-12" name="b1-1" value="2">
                    <label for="b1-12">2</label>

                    <input type="radio" id="b1-13" name="b1-1" value="3">
                    <label for="b1-13">3</label>

                    <input type="radio" id="b1-14" name="b1-1" value="4">
                    <label for="b1-14">4</label>

                    <input type="radio" id="b1-15" name="b1-1" value="5">
                    <label for="b1-15">5</label>
                </td>
            </tr>

            <tr>
                <td class="centered">2</td>
                <td>Rerata kemampuan afektif</td>
                <td>
                    <input type="radio" id="b1-21" name="b1-2" value="1" required>
                    <label for="b1-21">1</label>

                    <input type="radio" id="b1-22" name="b1-2" value="2">
                    <label for="b1-22">2</label>

                    <input type="radio" id="b1-23" name="b1-2" value="3">
                    <label for="b1-23">3</label>

                    <input type="radio" id="b1-24" name="b1-2" value="4">
                    <label for="b1-24">4</label>

                    <input type="radio" id="b1-25" name="b1-2" value="5">
                    <label for="b1-25">5</label>
                </td>
            </tr>

            <tr>
                <td class="centered">3</td>
                <td>Kedisiplinan/ketepatan pengumpulan tugas <br> (jika tidak ada nilai=1)</td>
                <td>
                    <input type="radio" id="b1-31" name="b1-3" value="1" required>
                    <label for="b1-31">1</label>

                    <input type="radio" id="b1-32" name="b1-3" value="2">
                    <label for="b1-32">2</label>

                    <input type="radio" id="b1-33" name="b1-3" value="3">
                    <label for="b1-33">3</label>

                    <input type="radio" id="b1-34" name="b1-3" value="4">
                    <label for="b1-34">4</label>

                    <input type="radio" id="b1-35" name="b1-3" value="5">
                    <label for="b1-35">5</label>
                </td>
            </tr>

            <tr>
                <td class="centered">4</td>
                <td>Ketertiban/suasana kelas</td>
                <td>
                    <input type="radio" id="b1-41" name="b1-4" value="1" required>
                    <label for="b1-41">1</label>

                    <input type="radio" id="b1-42" name="b1-4" value="2">
                    <label for="b1-42">2</label>

                    <input type="radio" id="b1-43" name="b1-4" value="3">
                    <label for="b1-43">3</label>

                    <input type="radio" id="b1-44" name="b1-4" value="4">
                    <label for="b1-44">4</label>

                    <input type="radio" id="b1-45" name="b1-4" value="5">
                    <label for="b1-45">5</label>
                </td>
            </tr>

            <tr>
                <td height="50" colspan="3"><b>B.2 Dosen (Evaluasi Diri dalam PBM)</b></td>
            </tr>

            <tr>
                <td class="centered">1</td>
                <td>Pembahaasn latihan soal</td>
                <td>
                    <input type="radio" id="b2-11" name="b2-1" value="1" required>
                    <label for="b2-11">1</label>

                    <input type="radio" id="b2-12" name="b2-1" value="2">
                    <label for="b2-12">2</label>

                    <input type="radio" id="b2-13" name="b2-1" value="3">
                    <label for="b2-13">3</label>

                    <input type="radio" id="b2-14" name="b2-1" value="4">
                    <label for="b2-14">4</label>

                    <input type="radio" id="b2-15" name="b2-1" value="5">
                    <label for="b2-15">5</label>
                </td>
            </tr>

            <tr>
                <td class="centered">2</td>
                <td>Kualitas diskusi dan tanya jawab</td>
                <td>
                    <input type="radio" id="b2-21" name="b2-2" value="1" required>
                    <label for="b2-21">1</label>

                    <input type="radio" id="b2-22" name="b2-2" value="2">
                    <label for="b2-22">2</label>

                    <input type="radio" id="b2-23" name="b2-2" value="3">
                    <label for="b2-23">3</label>

                    <input type="radio" id="b2-24" name="b2-2" value="4">
                    <label for="b2-24">4</label>

                    <input type="radio" id="b2-25" name="b2-2" value="5">
                    <label for="b2-25">5</label>
                </td>
            </tr>

            <tr>
                <td class="centered">3</td>
                <td>Kemampuan menjelaskan materi</td>
                <td>
                    <input type="radio" id="b2-31" name="b2-3" value="1" required>
                    <label for="b2-31">1</label>

                    <input type="radio" id="b2-32" name="b2-3" value="2">
                    <label for="b2-32">2</label>

                    <input type="radio" id="b2-33" name="b2-3" value="3">
                    <label for="b2-33">3</label>

                    <input type="radio" id="b2-34" name="b2-3" value="4">
                    <label for="b2-34">4</label>

                    <input type="radio" id="b2-35" name="b2-3" value="5">
                    <label for="b2-35">5</label>
                </td>
            </tr>

            <tr>
                <td class="centered">4</td>
                <td>Penguasaan materi kuliah</td>
                <td>
                    <input type="radio" id="b2-41" name="b2-4" value="1" required>
                    <label for="b2-41">1</label>

                    <input type="radio" id="b2-42" name="b2-4" value="2">
                    <label for="b2-42">2</label>

                    <input type="radio" id="b2-43" name="b2-4" value="3">
                    <label for="b2-43">3</label>

                    <input type="radio" id="b2-44" name="b2-4" value="4">
                    <label for="b2-44">4</label>

                    <input type="radio" id="b2-45" name="b2-4" value="5">
                    <label for="b2-45">5</label>
                </td>
            </tr>

            <tr>
                <td class="centered">5</td>
                <td>Kemampuan menjawab pertanyaan</td>
                <td>
                    <input type="radio" id="b2-51" name="b2-5" value="1" required>
                    <label for="b2-51">1</label>

                    <input type="radio" id="b2-52" name="b2-5" value="2">
                    <label for="b2-52">2</label>

                    <input type="radio" id="b2-53" name="b2-5" value="3">
                    <label for="b2-53">3</label>

                    <input type="radio" id="b2-54" name="b2-5" value="4">
                    <label for="b2-54">4</label>

                    <input type="radio" id="b2-55" name="b2-5" value="5">
                    <label for="b2-55">5</label>
                </td>
            </tr>

            <tr>
                <td class="centered">6</td>
                <td>Penguasaan kelas</td>
                <td>
                    <input type="radio" id="b2-61" name="b2-6" value="1" required>
                    <label for="b2-61">1</label>

                    <input type="radio" id="b2-62" name="b2-6" value="2">
                    <label for="b2-62">2</label>

                    <input type="radio" id="b2-63" name="b2-6" value="3">
                    <label for="b2-63">3</label>

                    <input type="radio" id="b2-64" name="b2-6" value="4">
                    <label for="b2-64">4</label>

                    <input type="radio" id="b2-65" name="b2-6" value="5">
                    <label for="b2-65">5</label>
                </td>
            </tr>
            <tr>
                <td colspan="3">Keterlambatan waktu mengajar: </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="radio" id="k1-1" name="k1" value="1" required>
                    <label for="k1-1">20 menit</label>

                    <input type="radio" id="k1-2" name="k1" value="2">
                    <label for="k1-2">11 - 20 menit</label>

                    <input type="radio" id="k1-3" name="k1" value="3">
                    <label for="k1-3">1 - 10 menit</label>

                    <input type="radio" id="k1-4" name="k1" value="4">
                    <label for="k1-4">Tepat waktu</label>
                </td>
            </tr>

            <tr>
                <td colspan="3">Jumlah mahasiswa yang terlambat: </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="radio" id="k2-1" name="k2" value="1" required>
                    <label for="k2-1">> 6</label>

                    <input type="radio" id="k2-2" name="k2" value="2">
                    <label for="k2-2">2 - 5 mhs</label>

                    <input type="radio" id="k2-3" name="k2" value="3">
                    <label for="k2-3">1 - 2 mhs</label>

                    <input type="radio" id="k2-4" name="k2" value="4">
                    <label for="k2-4">Tidak ada</label>
                </td>
            </tr>

            <tr>
                <td colspan="3">Pemberian sanksi mahasiswa bermasalah:
                <input type="radio" id="k3-1" name="k3" value="1" required>
                    <label for="k3-1">Ya</label>

                    <input type="radio" id="k3-2" name="k3" value="2">
                    <label for="k3-2">Tidak</label>
                </td>
            </tr>

            <tr>
                <td colspan="3">Pembahasan tugas (jika ada): </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="radio" id="k4-1" name="k4" value="1" required>
                    <label for="k4-1">< 25%</label>

                    <input type="radio" id="k4-2" name="k4" value="2">
                    <label for="k4-2">25 - 50%</label>

                    <input type="radio" id="k4-3" name="k4" value="3">
                    <label for="k4-3">50 - 75%</label>

                    <input type="radio" id="k4-4" name="k4" value="4">
                    <label for="k4-4">< 75%</label>
                </td>
            </tr>

            <tr>
                <td colspan="3">Tingkat kejenuhan mengajar hari ini: </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="radio" id="k5-1" name="k5" value="1" required>
                    <label for="k5-1">Sangat Jenuh</label>

                    <input type="radio" id="k5-2" name="k5" value="2">
                    <label for="k5-2">Jenuh</label>

                    <input type="radio" id="k5-3" name="k5" value="3">
                    <label for="k5-3">Enjoy</label>

                    <input type="radio" id="k5-4" name="k5" value="4">
                    <label for="k5-4">Sangat Enjoy</label>
                </td>
            </tr>

            <tr>
                <td colspan=3 height=80 style="text-align: right; padding-right: 40px;">
                    <button class="btn btn-primary" type="submit">Simpan Data</button>
                    
                </td>
            </tr>
            
        </table>
    </form>
</body>
</html>