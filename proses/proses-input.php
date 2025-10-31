<?php

// Memasukkan file class-penduduk.php untuk mengakses class Penduduk
include '../config/class-penduduk.php';
// Membuat objek dari class Penduduk
$penduduk = new Penduduk();
// Mengambil data penduduk dari form input menggunakan metode POST dan menyimpannya dalam array
$dataPemduduk = [
    'id' => $row[' id_pnddk'],
    'nik' => $row['nik'],
    'nama' => $row['nama'],
    'tempat' => $row['tempat_lhr'],
    'tanggal' => $row['tanggal_lhr'],
    'tahun' => $row['tahun_lhr'],
    'provinsi' => $row['provinsi'],
    'domisili' => $row['domisili'],
    'perkerjaan' => $row['perkerjaan'],
    'agama' => $row['agama']
    'gender' => $row['gender']
    'status' => $row['sts']
    'alamat' => $row['alamat']]
];
// Memanggil method inputPenduduk untuk memasukkan data penduduk dengan parameter array $dataPenduduk
$input = $penduduk->inputPenduduk($dataPenduduk);
// Mengecek apakah proses input berhasil atau tidak - true/false
if($input){
    // Jika berhasil, redirect ke halaman data-list.php dengan status inputsuccess
    header("Location: ../data-list.php?status=inputsuccess");
} else {
    // Jika gagal, redirect ke halaman data-input.php dengan status failed
    header("Location: ../data-input.php?status=failed");
}

?>