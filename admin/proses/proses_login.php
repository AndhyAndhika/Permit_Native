<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../../koneksi.php';

// menangkap data yang dikirim dari form login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
};


// menyeleksi data user dengan username dan password yang sesuai
$cekuser = mysqli_query($conn, "SELECT * FROM karyawan WHERE nrp='$username' AND password='$password'");
// menghitung jumlah data yang ditemukan
$hitung = mysqli_num_rows($cekuser);

// cek apakah username dan password di temukan pada database
// berfungsi mengecek apakah username dan password ada pada database
if ($hitung > 0) {
    //kalau data ditemukan
    $ambildatarole = mysqli_fetch_array($cekuser);
    $role = $ambildatarole['posisi'];
    if ($role == 'STAFF') {
        $posisi = 0;
    } else if ($role == 'SEC-HEAD') {
        $posisi = 1;
    } else if ($role == 'DEPART-HEAD') {
        $posisi = 2;
    } else if ($role == 'DIV-HEAD') {
        $posisi = 3;
    } else if ($role == 'COO') {
        $posisi = 4;
    } else if ($role == 'ADMIN') {
        $posisi = 99;
    }
    $nrp = $ambildatarole['nrp'];
    $pass = $ambildatarole['password'];
    $nama = $ambildatarole['nama'];
    $istri = $ambildatarole['istri'];
    $anak_1 = $ambildatarole['anak_1'];
    $anak_2 = $ambildatarole['anak_2'];
    $anak_3 = $ambildatarole['anak_3'];
    $tanggal_lahir = $ambildatarole['tanggal_lahir'];
    $masuk_perusahaan = $ambildatarole['masuk_perushaan'];
    $no_telp = $ambildatarole['no_telp'];
    $alamat = $ambildatarole['alamat'];
    $jabatan = $ambildatarole['jabatan'];
    $seksi = $ambildatarole['seksi'];
    $depart = $ambildatarole['departemen'];
    $div = $ambildatarole['divisi'];
    $bu = $ambildatarole['bisnis_unit'];
    $emailkntr = $ambildatarole['email_kantor'];
    $email_pribadi = $ambildatarole['email_pribadi'];
    $saldo_medical = $ambildatarole['saldo_medical'];
    $cuti_tahunan = $ambildatarole['cuti_tahunan'];
    $cuti_besar = $ambildatarole['cuti_besar'];
    $uk_baju = $ambildatarole['uk_baju'];
    $uk_celana = $ambildatarole['uk_celana'];
    $uk_sepatu = $ambildatarole['uk_sepatu'];
    $periode = $ambildatarole['periode'];
    $status = $ambildatarole['status'];

    if ($status == 'ENABLED') {
        if ($nrp == $username && $pass == $password) {
            if ($role == 'STAFF') {
                //kalau dia admin
                $_SESSION['log'] = ['logged'];
                $_SESSION['nrp'] = $nrp;
                $_SESSION['nama'] = $nama;
                $_SESSION['istri'] = $istri;
                $_SESSION['anak_1'] = $anak_1;
                $_SESSION['anak_2'] = $anak_2;
                $_SESSION['anak_3'] = $anak_3;
                $_SESSION['tanggal_lahir'] = $tanggal_lahir;
                $_SESSION['masuk_perusahaan'] = $masuk_perusahaan;
                $_SESSION['no_telp'] = $no_telp;
                $_SESSION['alamat'] = $alamat;
                $_SESSION['jabatan'] = $jabatan;
                $_SESSION['role'] = $posisi;
                $_SESSION['seksi'] = $seksi;
                $_SESSION['divisi'] = $div;
                $_SESSION['departemen'] = $depart;
                $_SESSION['bisnis_unit'] = $bu;
                $_SESSION['email_kantor'] = $emailkntr;
                $_SESSION['email_pribadi'] = $email_pribadi;
                $_SESSION['saldo_medical'] = $saldo_medical;
                $_SESSION['cuti_tahunan'] = $cuti_tahunan;
                $_SESSION['cuti_besar'] = $cuti_besar;
                $_SESSION['uk_baju'] = $uk_baju;
                $_SESSION['uk_celana'] = $uk_celana;
                $_SESSION['uk_sepatu'] = $uk_sepatu;
                $_SESSION['periode'] = $periode;
                $_SESSION['status'] = $status;
                header("location:../dashboard/");
            } else if ($role == 'SEC-HEAD') {
                //kalau dia bukan admin
                $_SESSION['log'] = ['logged'];
                $_SESSION['nrp'] = $nrp;
                $_SESSION['nama'] = $nama;
                $_SESSION['istri'] = $istri;
                $_SESSION['anak_1'] = $anak_1;
                $_SESSION['anak_2'] = $anak_2;
                $_SESSION['anak_3'] = $anak_3;
                $_SESSION['tanggal_lahir'] = $tanggal_lahir;
                $_SESSION['masuk_perusahaan'] = $masuk_perusahaan;
                $_SESSION['no_telp'] = $no_telp;
                $_SESSION['alamat'] = $alamat;
                $_SESSION['jabatan'] = $jabatan;
                $_SESSION['role'] = $posisi;
                $_SESSION['seksi'] = $seksi;
                $_SESSION['divisi'] = $div;
                $_SESSION['departemen'] = $depart;
                $_SESSION['bisnis_unit'] = $bu;
                $_SESSION['email_kantor'] = $emailkntr;
                $_SESSION['email_pribadi'] = $email_pribadi;
                $_SESSION['saldo_medical'] = $saldo_medical;
                $_SESSION['cuti_tahunan'] = $cuti_tahunan;
                $_SESSION['cuti_besar'] = $cuti_besar;
                $_SESSION['uk_baju'] = $uk_baju;
                $_SESSION['uk_celana'] = $uk_celana;
                $_SESSION['uk_sepatu'] = $uk_sepatu;
                $_SESSION['periode'] = $periode;
                $_SESSION['status'] = $status;
                header("location:../dashboard/");
            } else if ($role == 'DEPART-HEAD') {
                //kalau dia bukan admin
                $_SESSION['log'] = ['logged'];
                $_SESSION['nrp'] = $nrp;
                $_SESSION['nama'] = $nama;
                $_SESSION['istri'] = $istri;
                $_SESSION['anak_1'] = $anak_1;
                $_SESSION['anak_2'] = $anak_2;
                $_SESSION['anak_3'] = $anak_3;
                $_SESSION['tanggal_lahir'] = $tanggal_lahir;
                $_SESSION['masuk_perusahaan'] = $masuk_perusahaan;
                $_SESSION['no_telp'] = $no_telp;
                $_SESSION['alamat'] = $alamat;
                $_SESSION['jabatan'] = $jabatan;
                $_SESSION['role'] = $posisi;
                $_SESSION['seksi'] = $seksi;
                $_SESSION['divisi'] = $div;
                $_SESSION['departemen'] = $depart;
                $_SESSION['bisnis_unit'] = $bu;
                $_SESSION['email_kantor'] = $emailkntr;
                $_SESSION['email_pribadi'] = $email_pribadi;
                $_SESSION['saldo_medical'] = $saldo_medical;
                $_SESSION['cuti_tahunan'] = $cuti_tahunan;
                $_SESSION['cuti_besar'] = $cuti_besar;
                $_SESSION['uk_baju'] = $uk_baju;
                $_SESSION['uk_celana'] = $uk_celana;
                $_SESSION['uk_sepatu'] = $uk_sepatu;
                $_SESSION['periode'] = $periode;
                $_SESSION['status'] = $status;
                header("location:../dashboard/");
            } else if ($role == 'ADMIN') {
                $_SESSION['log'] = ['logged'];
                $_SESSION['log'] = ['logged'];
                $_SESSION['nrp'] = $nrp;
                $_SESSION['nama'] = $nama;
                $_SESSION['istri'] = $istri;
                $_SESSION['anak_1'] = $anak_1;
                $_SESSION['anak_2'] = $anak_2;
                $_SESSION['anak_3'] = $anak_3;
                $_SESSION['tanggal_lahir'] = $tanggal_lahir;
                $_SESSION['masuk_perusahaan'] = $masuk_perusahaan;
                $_SESSION['no_telp'] = $no_telp;
                $_SESSION['alamat'] = $alamat;
                $_SESSION['jabatan'] = $jabatan;
                $_SESSION['role'] = $posisi;
                $_SESSION['seksi'] = $seksi;
                $_SESSION['divisi'] = $div;
                $_SESSION['departemen'] = $depart;
                $_SESSION['bisnis_unit'] = $bu;
                $_SESSION['email_kantor'] = $emailkntr;
                $_SESSION['email_pribadi'] = $email_pribadi;
                $_SESSION['saldo_medical'] = $saldo_medical;
                $_SESSION['cuti_tahunan'] = $cuti_tahunan;
                $_SESSION['cuti_besar'] = $cuti_besar;
                $_SESSION['uk_baju'] = $uk_baju;
                $_SESSION['uk_celana'] = $uk_celana;
                $_SESSION['uk_sepatu'] = $uk_sepatu;
                $_SESSION['periode'] = $periode;
                $_SESSION['status'] = $status;
                header("location:../loginadmin/");
            } else {
                //kalau dia bukan admin
                $_SESSION['log'] = ['logged'];
                $_SESSION['nrp'] = $nrp;
                $_SESSION['nama'] = $nama;
                $_SESSION['istri'] = $istri;
                $_SESSION['anak_1'] = $anak_1;
                $_SESSION['anak_2'] = $anak_2;
                $_SESSION['anak_3'] = $anak_3;
                $_SESSION['tanggal_lahir'] = $tanggal_lahir;
                $_SESSION['masuk_perusahaan'] = $masuk_perusahaan;
                $_SESSION['no_telp'] = $no_telp;
                $_SESSION['alamat'] = $alamat;
                $_SESSION['jabatan'] = $jabatan;
                $_SESSION['role'] = $posisi;
                $_SESSION['seksi'] = $seksi;
                $_SESSION['divisi'] = $div;
                $_SESSION['departemen'] = $depart;
                $_SESSION['bisnis_unit'] = $bu;
                $_SESSION['email_kantor'] = $emailkntr;
                $_SESSION['email_pribadi'] = $email_pribadi;
                $_SESSION['saldo_medical'] = $saldo_medical;
                $_SESSION['cuti_tahunan'] = $cuti_tahunan;
                $_SESSION['cuti_besar'] = $cuti_besar;
                $_SESSION['uk_baju'] = $uk_baju;
                $_SESSION['uk_celana'] = $uk_celana;
                $_SESSION['uk_sepatu'] = $uk_sepatu;
                $_SESSION['periode'] = $periode;
                $_SESSION['status'] = $status;
                header("location:../dashboard/");
            }
        } else {
            header("location:../index.php?alert=salah");
        }
    } else {
        header("location:../index.php?alert=disabled");
    }
} else {
    header("location:../index.php?alert=gagal");
}
