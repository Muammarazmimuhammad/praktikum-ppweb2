<?php
$proses = isset($_POST['proses']) ? $_POST['proses'] : '';
$nama_siswa = isset($_POST['nama']) ? $_POST['nama'] : '';
$mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : '';
$nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : 0;
$nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : 0;
$nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : 0;

$nilai_akhir = ($nilai_uts * 0.30) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);
$status = ($nilai_akhir > 55) ? 'Lulus' : 'Tidak Lulus';

// Menentukan Grade
if ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
    $grade = 'A';
} elseif ($nilai_akhir >= 70) {
    $grade = 'B';
} elseif ($nilai_akhir >= 56) {
    $grade = 'C';
} elseif ($nilai_akhir >= 36) {
    $grade = 'D';
} elseif ($nilai_akhir >= 0) {
    $grade = 'E';
} else {
    $grade = 'I';
}

// Menentukan Predikat
switch ($grade) {
    case 'A':
        $predikat = 'Sangat Memuaskan';
        break;
    case 'B':
        $predikat = 'Memuaskan';
        break;
    case 'C':
        $predikat = 'Cukup Lumayan';
        break;
    case 'D':
        $predikat = 'Kurang';
        break;
    case 'E':
        $predikat = 'Buruk';
        break;
    default:
        $predikat = 'Tidak Ada';
}

// Mencetak Hasil
if (!empty($proses)) {
    echo 'Proses : ' . htmlspecialchars($proses);
    echo '<br/>Nama : ' . htmlspecialchars($nama_siswa);
    echo '<br/>Mata Kuliah : ' . htmlspecialchars($mata_kuliah);
    echo '<br/>Nilai UTS : ' . htmlspecialchars($nilai_uts);
    echo '<br/>Nilai UAS : ' . htmlspecialchars($nilai_uas);
    echo '<br/>Nilai Tugas Praktikum : ' . htmlspecialchars($nilai_tugas);
    echo '<br/>Nilai Akhir : ' . number_format($nilai_akhir, 2);
    echo '<br/>Status : ' . htmlspecialchars($status);
    echo '<br/>Grade : ' . htmlspecialchars($grade);
    echo '<br/>Predikat : ' . htmlspecialchars($predikat);
}