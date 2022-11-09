<?php 
//ini reset tahunan
include "koneksi.php";
mysqli_query($conn, "UPDATE karyawan SET cuti_tahunan = 6 WHERE date_format(masuk_perusahaan,'%m-%d') = date_format(now(),'%m-%d');");



//ini reset 5 tahunan
$n = date('Y');
$a = mysqli_query($conn, "SELECT date_format(masuk_perusahaan, '%Y') AS tahun_masuk, cuti_besar, nrp FROM karyawan WHERE date_format(masuk_perusahaan,'%m-%d') = date_format(now(),'%m-%d');");

foreach ($a as $b) {

    if (($n - $b['tahun_masuk']) % 5 == 0) {
        // $bc = mysqli_query($conn, "SELECT cuti_besar FROM karyawan WHERE date_format(masuk_perusahaan,'%m-%d') = date_format(now(),'%m-%d');");
        if ($b['cuti_besar'] != 0) {
            mysqli_query($conn, "UPDATE karyawan SET cuti_besar_extend = $b[cuti_besar] WHERE nrp = $b[nrp]");
            $hasil = $b['cuti_besar'] + 22;
            mysqli_query($conn, "UPDATE karyawan SET cuti_besar = $hasil WHERE nrp = $b[nrp]");
        } else {
            mysqli_query($conn, "UPDATE karyawan SET cuti_besar = 22 WHERE nrp = $b[nrp] ");
        }
    }
}

//untuk cuti extend
$n = date('Y');
$a = mysqli_query($conn, "SELECT date_format(cb_extend_date, '%Y') AS extend_cb, cuti_besar_extend, cuti_besar, nrp FROM karyawan WHERE date_format(masuk_perusahaan,'%m-%d') = date_format(now(),'%m-%d');");

foreach ($a as $b) {

    if (($n - $b['extend_cb']) % 5 == 0) {

        if ($b['cuti_besar_extend'] == 0 && $b['cuti_besar'] >= 22) {
            mysqli_query($conn, "UPDATE karyawan SET cuti_besar = 22 WHERE nrp = $b[nrp] ");
        } elseif ($b['cuti_besar_extend'] == 0 && $b['cuti_besar'] <= 22) {
        } else {
            $hasil = $b['cuti_besar'] - $b['cuti_besar_extend'];
            mysqli_query($conn, "UPDATE karyawan SET cuti_besar = $hasil WHERE nrp = $b[nrp]");
            mysqli_query($conn, "UPDATE karyawan SET cuti_besar_extend = 0 WHERE nrp = $b[nrp]");
        }
    }
}
?>