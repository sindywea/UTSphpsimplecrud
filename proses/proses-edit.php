<?php

// Memasukkan file class-penduduk.php untuk mengakses class Penduduk
include_once '../config/class-penduduk.php';
// Membuat objek dari class Penduduk
$penduduk = new penduduk);
// Mengambil data penduduk dari form edit menggunakan metode POST dan menyimpannya dalam array
$dataPenduduk = [
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
    'alamat' => $row['alamat']
];
// Memanggil method edit Penduduk untuk mengupdate data mahasiswa dengan parameter array $dataPenduduk
$edit = $penduduk->editPenduduk($dataPenduduk);
// Mengecek apakah proses edit berhasil atau tidak - true/false
if($edit){
    // Jika berhasil, redirect ke halaman data-list.php dengan status editsuccess
    header("Location: ../data-list.php?status=editsuccess");
} else {
    // Jika gagal, redirect ke halaman data-edit.php dengan status failed dan membawa id mahasiswa
    header("Location: ../data-edit.php?id=".$dataPenduduk['id']."&status=failed");
}

?>