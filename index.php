<?php
$a1 = ['nama mahasiswa' => 'Nabila Rahmawati', 'nim' => '11022', 'nilai' => 95];
$a2 = ['nama mahasiswa' => 'Lutfi Erfaningrum', 'nim' => '11065', 'nilai' => 80];
$a3 = ['nama mahasiswa' => 'Sri Utami', 'nim' => '11032', 'nilai' => 78];
$a4 = ['nama mahasiswa' => 'Raisha Adis Yulia', 'nim' => '11021', 'nilai' => 64];
$a5 = ['nama mahasiswa' => 'Vidia Hapsari', 'nim' => '11097', 'nilai' => 85];
$a6 = ['nama mahasiswa' => 'Alifa Kamila', 'nim' => '11045', 'nilai' => 70];
$a7 = ['nama mahasiswa' => 'Ahmad Fauzi', 'nim' => '11034', 'nilai' => 76];
$a8 = ['nama mahasiswa' => 'Rafli Adestia', 'nim' => '11067', 'nilai' => 75];
$a9 = ['nama mahasiswa' => 'Sylviana Mulia', 'nim' => '11087', 'nilai' => 20];
$a10 = ['nama mahasiswa' => 'Afifah Mulyani', 'nim' => '11029', 'nilai' => 80];
$a11 = ['nama mahasiswa' => 'Adriel Sebastian', 'nim' => '11096', 'nilai' => 30];
$a12 = ['nama mahasiswa' => 'Axcell Alfino', 'nim' => '11051', 'nilai' => 80];
$a13 = ['nama mahasiswa' => 'Dwi Ramadhan', 'nim' => '11019', 'nilai' => 53];
$a14 = ['nama mahasiswa' => 'Audryan Pradipta', 'nim' => '11052', 'nilai' => 75];
$a15 = ['nama mahasiswa' => 'Fazahra Salsabila', 'nim' => '11081', 'nilai' => 47];
$a16 = ['nama mahasiswa' => 'Nur Fidia Alim', 'nim' => '11098', 'nilai' => 50];
$a17 = ['nama mahasiswa' => 'Rafasyah Syafira', 'nim' => '11063', 'nilai' => 83];
$a18 = ['nama mahasiswa' => 'Deden Dharmawan', 'nim' => '11054', 'nilai' => 77];
$a19 = ['nama mahasiswa' => 'Angela Patresia', 'nim' => '11099', 'nilai' => 78];
$a20 = ['nama mahasiswa' => 'Riefky Ichsan', 'nim' => '11027', 'nilai' => 23];

$ar_daftar = [$a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11,
            $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19 ,$a20];

// Deklarasi nama2 judul pada tabel header menggunakan looping array
$ar_judul = ['NO', 'NAMA MAHASIWA', 'NIM', 'NILAI', 'KETERANGAN', 'GRADE', 'PREDIKAT'];

// Mengambil nilai dari array untuk dihitung
$nilai = array_column($ar_daftar, 'nilai');

// Fungsi agregat di array
$nilai_tertinggi = max($nilai);
$nilai_terendah = min($nilai);
$jumlah_nilai = array_sum($nilai);
$jumlah_mahasiswa = count($nilai);
$nilai_rata2 = $jumlah_nilai / $jumlah_mahasiswa;


$keterangan = [
    'Nilai Tertinggi' => $nilai_tertinggi,
    'Nilai Terendah' => $nilai_terendah,
    'Nilai Rata-Rata' => $nilai_rata2,
    'Jumlah Mahasiswa' => $jumlah_mahasiswa,
    'Jumlah Keseluruhan Nilai' => $jumlah_nilai
];

?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="./css/style.css">
<head>
    <title>Daftar Nilai Mahasiswa</title>
</head>
<body>
    <h3 align="center">DAFTAR NILAI MAHASISWA</h3>
    <table>
        <head>
            <tr>
            <?php
                foreach ($ar_judul as $judul) { ?>
                    <th><?= $judul ?></th>
                <?php } ?>
            </tr>
        </head>
        <tbody>
            <?php
            $no = 1;
            foreach ($ar_daftar as $daftar) { 

            // Ternary
            $nilai_status = ($daftar['nilai'] >= 65) ? 'Lulus' : 'Gagal';

            // If multi kondisi
            if ($daftar['nilai'] >= 85 && $daftar['nilai'] <= 100) {
                $grade = 'A';
            } else if ($daftar['nilai'] >= 75) {
                $grade = 'B';
            } else if ($daftar['nilai'] >= 50) {
                $grade = 'C';
            } else if ($daftar['nilai'] >= 25) {
                $grade = 'D';
            } else if ($daftar['nilai'] >= 5) {
                $grade = 'E';
            } else {
                $grade = '';
            }

            // Switch Case
            switch ($grade) {
                case 'A' :
                    $predikat = 'Memuaskan';
                    break;
                case 'B' :
                    $predikat = 'Bagus';
                    break;
                case 'C' :
                    $predikat = 'Cukup';
                    break;
                case 'D' :
                    $predikat = 'Kurang';
                    break;
                case 'E' :
                    $predikat = 'Buruk';
                    break;
                default:
                    $predikat = '';
                }

            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $daftar ['nama mahasiswa'] ?></td>
                <td><?= $daftar ['nim'] ?></td>
                <td><?= $daftar ['nilai'] ?></td>
                <td><?= $nilai_status ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>
            </tr>

            <?php } ?>
        </tbody>
        <tfoot>
            <?php
                foreach ($keterangan as $ket => $hasil) {
            ?>

            <tr>
                <th colspan="6"><?= $ket ?></th>
                <th><?= $hasil ?></th>
            </tr>

            <?php } ?>
        </tfoot>
    </table>
</body>
</html>