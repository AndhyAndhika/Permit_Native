<!DOCTYPE html>
<html lang="en" class="notranslate">
<?php
session_start();
if (isset($_SESSION['role']) == false) {
    header("location:../");
}
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Claim Medical | Fasilitas</title>

    <link href="../../../../asset/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,600;1,100&display=swap" rel="stylesheet">
    <link href="../../../../asset/style/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../../../asset/style/css/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../../../asset/img/logo-mini.png" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script> -->
    <script>
        function toggleField(hideObj, showObj) {
            hideObj.disabled = true;
            hideObj.style.display = 'none';
            showObj.disabled = false;
            showObj.style.display = 'inline';
            showObj.focus();
        }
    </script>

    <?php function buatRupiah($angka)
    {
        $hasil = "Rp " . number_format($angka, 2, ',', '.');
        return $hasil;
    } ?>


</head>

<body id="page-top" style="font-family: bahnschrift light; color:black;">
    <div id="wrapper">
        <div class="sidebar">
            <ul class="navbar-nav putih sidebar sidebar-light accordion" id="accordionSidebar">
                <div class="img-fluid sidebar-brand d-flex align-items-center justify-content-center my-2 flex-column">
                    <img class="logo" src="../../../../asset/img/Logo Smart.png">
                </div>
                <hr class="sidebar-divider my-0">

                <li class="nav-item ">
                    <a class="nav-link" href="../../../dashboard">
                        <i class="fas fa-fw fa-home"></i>
                        <span>Beranda</span>
                    </a>

                    <hr class="sidebar-divider my-0">

                    <div class=" dropend nav-item">
                        <a type="button" class="  nav-link " data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="row">
                                <div class="col-lg-10"><i class="fas fa-fw fa-book"></i>
                                    Administrasi
                                </div>
                                <div class="col-2 d-none d-lg-block"><i class="fa-reguler fa-greater-than "></i></div>
                            </div>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../../administrasi/cuti/">Pengajuan CUTI</a></li>
                            <li><a class="dropdown-item" href="../../administrasi/absensi/">Keterangan Absensi</a></li>
                            <li><a class="dropdown-item" href="../../administrasi/imp/">Izin Meninggalkan Pekerjaan</a></li>
                            <li><a class="dropdown-item" href="../../administrasi/dispensasi/">Dispensasi</a></li>
                            <li><a class="dropdown-item" href="../../administrasi/dinasluar/">Izin Dinas Luar</a></li>
                            <li><a class="dropdown-item" href="../../administrasi/suratdokter/">Surat Keterangan Dokter</a></li>
                            <li><a class="dropdown-item" href="../../administrasi/lembur/">Lembur</a></li>
                        </ul>
                    </div>

                    <hr class="sidebar-divider my-0">

                    <div class=" dropend nav-item">
                        <a type="button" class="  nav-link " data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="row">
                                <div class="col-lg-10"><i class="fas fa-fw fa-user-check"></i>
                                    Persetujuan
                                </div>
                                <div class="col-2 d-none d-lg-block"><i class="fa-reguler fa-greater-than "></i></div>
                            </div>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../../persetujuan/masukpabrik/">Menyetujui Izin Masuk Pabrik</a></li>
                            <li><a class="dropdown-item" href="../../persetujuan/cuti/">Menyetujui CUTI</a></li>
                            <li><a class="dropdown-item" href="../../persetujuan/absensi/">Menyetujui Keterangan Absensi</a></li>
                            <li><a class="dropdown-item" href="../../persetujuan/imp/">Menyetujui Izin Meninggalkan Pekerjaan</a></li>
                            <li><a class="dropdown-item" href="../../persetujuan/dispensasi/">Menyetujui Dispensasi</a></li>
                            <li><a class="dropdown-item" href="../../persetujuan/dinasluar/">Menyetujui Izin Dinas Luar</a></li>
                            <li><a class="dropdown-item" href="../../persetujuan/suratdokter/">Surat Keterangan Dokter</a></li>
                            <li><a class="dropdown-item" href="../../persetujuan/lembur/">Menyetujui Lembur</a></li>

                        </ul>
                    </div>

                    <hr class="sidebar-divider my-0">

                    <div class=" dropend nav-item">
                        <a type="button" class="  nav-link " data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="row">
                                <div class="col-lg-10"><i class="fas fa-fw fa-box"></i>
                                    &nbsp;Produksi
                                </div>
                                <div class="col-2 d-none d-lg-block"><i class="fa-reguler fa-greater-than "></i></div>
                            </div>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../../../../../Data_Stock/Dashboard/tables.php">Data Stock</a></li>
                            <li><a class="dropdown-item" href="../../../../../smart_qi/dashboardd/index.php">Dashboard Produksi</a></li>
                            <li><a class="dropdown-item" href="#">Laporan Harian produksi</a></li>
                            <li><a class="dropdown-item" href="#">Total Productive Maintenance</a></li>
                        </ul>
                    </div>

                    <hr class="sidebar-divider my-0">

                    <div class=" dropend nav-item">
                        <a type="button" class="  nav-link " data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="row">
                                <div class="col-lg-10"><i class="fas fa-fw fa-chair"></i>
                                    &nbsp;Fasilitas
                                </div>
                                <div class="col-2 d-none d-lg-block"><i class="fa-reguler fa-greater-than "></i></div>
                            </div>
                        </a>


                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../ClaimMedical/">Claim Medical</a></li>
                            <li><a class="dropdown-item" href="../Rmeeting/">Ruang Meeting</a></li>
                            <li><a class="dropdown-item" href="../Seragam/">Seragam</a></li>
                        </ul>
                    </div>

                    <hr class="sidebar-divider my-0">

                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-file"></i>
                        <span>SOP</span></a>
                </li>

                <hr class="sidebar-divider my-0">

                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-archive"></i>
                        <span>IK</span>
                    </a>
                </li>

                <hr class="sidebar-divider my-0">

                <div class="container my-auto text-left">
                    <div class="copyright text-center font-italic">
                        <span class="small">&copy; P.E - Digitalization - 2022 </span>
                    </div>
                </div>
            </ul><!-- End of Sidebar -->
        </div><!-- End of Class Sticky sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div class="topbar">
                <nav class="navbar navbar-expand navbar-light biru topbar mb-2 shading">
                    <ul class="navbar-nav ml-auto">
                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle ml-1 mt-3">
                            <i class="fa fa-bars text-white text-xs"></i>
                        </button>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="../../../../asset/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <p class="dropdown-item text-center">
                                    <?= $_SESSION['nama'] ?>
                                </p>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../../change.php">
                                    <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i><span> Ubah Password</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i><span> Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>

                </nav><!-- End of Topbar -->
            </div>
            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Anda Ingin Keluar</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Silahkan pilih "Logout" untuk keluar dari halaman ini.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="../../../proses/proses_logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END logut Modal-->

            <!--  MAIN CONTENT-->
            <div id="content" class="mt-5 mt-lg-5 px-0 pt-3">

                <div class="container-fluid">
                    <h3>C l a i m &ensp; M e d i c a l</h3>
                    <div class="row ">
                        <div class="col-md-9 col-sm-12 card tumpul p-3">
                            <div class="row">
                                <div class="col mb-4 mt-1">
                                    Form ini HANYA digunakan untuk klaim obat rawat jalan dan di masa pandemi virus Covid-19. Syarat klaim kuitansi sama seperti dengan klaim sebelumnya. Tata cara klaim obat via e-form sebagai berikut:
                                    <div class="row mt-2">
                                        <div class="col-1 text-center">1.</div>
                                        <div class="col-9">Tulislah NPK dan TANGGAL PENGAJUAN/UPLOAD di pojok kanan kuitansi obat dengan format NPK/TglBulanTahun. contoh: 1300/170420 (*Terdapat pada Kolom ID)</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-1 text-center">2.</div>
                                        <div class="col-9">Upload kuitansi dengan cara memfoto bagian depan dan belakang kuitansi atau rincian obat. (gambar harus jelas)</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-1 text-center">3.</div>
                                        <div class="col-9">1 kali pengisian hanya untuk 1 kuitansi klaim untuk memudahkan verifikasi.</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-1 text-center">4.</div>
                                        <div class="col-9">Hanya kuitansi yang memenuhi syarat dan ketentuan yang akan mendapat klaim penggantian.</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-1 text-center">5.</div>
                                        <div class="col-9">Kuitansi Asli wajib diberikan ke HRD (paramedis) SEBELUM DIBAYARKAN, kuitansi dikumpulkan di drop box yang sudah disediakan di klink NM sebagai bukti sah klaim obat. (perubahan).</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-1 text-center">6.</div>
                                        <div class="col-9">Apabila kuitansi tersebut hilang atau tidak dikumpulkan diwaktu yang sudah ditentukan dikemudian hari, maka akan dipotong gaji saat penggajian sesuai jumlah klaim di kuitansi tersebut.</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-1 text-center">7.</div>
                                        <div class="col-9">Isilah form klaim obat yang tertera di bagian berikutnya/next.</div>
                                    </div>
                                    <div class="row col-12 font-italic  mt-4"> Setiap pemalsuan atau penggandaan Kuitansi akan ditindak tegas sesuai dengan ketentuan perusahaan yang tertuang dalam Perjanjian Kerja Bersama PT. Astra Otoparts Tbk. Divisi Nusametal.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MODAL ABSENSI -->
                    <div class="row">
                        <div class="col-12 col-sm-2"> <button type="button" class="btn bg-warning mt-3 mr-3 text-dark" id="button1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                + Ajukan Claim Medical
                            </button></div>
                        <!--<div class="col-12 col-sm-6">-->
                        <!--    <p class="btn bg-secondary mt-3 text-light">-->
                              <?php
                        // <!--        error_reporting(0);-->
                        // <!--        include "../../../../koneksi.php";-->
                               // $query = mysqli_query($conn, "SELECT IFNULL(a.saldo_medical-SUM(IF(b.jenis_claim='Obat',b.biaya , 0 )),(SELECT saldo_medical FROM karyawan WHERE nrp='$_SESSION[nrp]' )) FROM karyawan a INNER JOIN medical b ON a.nrp=b.nrp WHERE b.nrp='$_SESSION[nrp]';");
                                // $query = mysqli_query($conn, "SELECT saldo_medical FROM karyawan WHERE nrp=$_SESSION[nrp]");
                                // $saldo = mysqli_fetch_array($query);
                                ?>

                                <?php
                                // error_reporting(0);
                                // $sql = "SELECT * FROM medical WHERE nrp = '$_SESSION[nrp]' AND jenis_claim='Kacamata' AND status=1 ORDER BY date_req DESC;";
                                // $getquery = mysqli_query($conn, $sql);
                                // $tampil = mysqli_fetch_array($getquery);

                                ?>


                        <!--        <span>Saldo Medical Anda : <?= buatRupiah($saldo[0]) ?> &ensp; </span>-->
                        <!--    </p>-->
                        <!--</div>-->
                        <div class="col"></div>
                    </div>

                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                                <div class="modal-content ">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel ">Form Claim Medical</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row m-0">
                                            <div class="col-sm-9 col-xl-5">
                                                <div class="row mt-2">
                                                    <div class="col">
                                                        <label for="txtJenis" class="form-label">Jenis Claim</label>
                                                        <select type="name" class="form-control chosen" id="txtJenis" name="jenis_claim" required>
                                                            <option>--Pilih Jenis--</option>
                                                            <option name="jenis_claim" value="Obat">Obat</option>
                                                            <option name="jenis_claim" value="KB">KB</option>
                                                            <option name="jenis_claim" value="Kacamata">Kacamata</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col">
                                                        <label for="txtTanggungan" class="form-label">Nama Tanggungan</label>
                                                        <select type="text" class="form-control chosen" id="txtTanggungan" name="nama_tanggungan" onchange="if(this.options[this.selectedIndex].value=='customOption'){
                                        toggleField(this,this.nextSibling); this.selectedIndex='0';}" required>
                                                            <option>--Pilih Tanggungan--</option>
                                                            <option value="<?= $_SESSION['nama']; ?>">Sendiri (Karyawan sendiri yang berobat)</option>
                                                            <option value="customOption">Yang Lain :</option>
                                                        </select><input class="form-control" id="txtTanggungan" name="nama_tanggungan" style="display:none;" disabled="disabled" onblur="if(this.value==''){toggleField(this,this.previousSibling);}">
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col">
                                                        <label for="txtTglKwitansi" class="form-label">Tanggal Kwitansi</label>
                                                        <input type="date" class="form-control" id="txtTglKwitansi" name="tanggal_kwitansi" required />
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col">
                                                        <label for="txtBiaya" class="form-label">Nama Klinik/RS/Bidan</label>
                                                        <input type="text" class="form-control" id="txtKlinik" name="nama_rs" required />
                                                    </div>

                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col">
                                                        <label for="txtDiagnosa" class="form-label">Diagnosa Penyakit</label>
                                                        <textarea class="form-control" id="txtDiagnosa" name="diagnosa" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-xl-5">

                                                <div class="row mt-2">
                                                    <div class="col">
                                                        <label for="txtObat" class="form-label">Obat yang Diberikan</label>
                                                        <textarea class="form-control" id="txtObat" name="obat_diberikan" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="txtKwitansi">Upload Kwitansi</label>
                                                            <input type="file" name="upload_kwitansi" id="upload_kwitansi" class="form-control-file" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col">
                                                        <label for="txtBiaya" class="form-label">Biaya Claim</label>
                                                        <input type="number" class="form-control" id="txtBiaya" name="biaya_claim" required />
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <label>
                                                                <input class="form-check-input" id="check_1" name="check_1" type="checkbox" required>Semua isian diatas diisi dengan sadar dan benar sesuai dengan
                                                                yang tercantum dalam kwitansi obat.</input>
                                                                <div class="invalid-feedback">You must check the box.</div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn  btn-danger" data-bs-dismiss="modal">Tutup</button>
                                        <button type="input" class="btn btn-success" name="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- MODAL ABSENSI -->


                    <div class="row mt-2">
                        <div class="col card-body tumpul bg-light-biru text-primary mb-1" style="background-color: #ffe699;">
                            <i class="fas fa-fw fa-lightbulb"></i>
                            <span>B e r i k u t &ensp; A d a l a h &ensp; R i w a y a t &ensp; C l a i m &ensp; M e d i c a l &ensp; A n d a </span>
                        </div>
                        <div class="col-12 card tumpul table-borderless">
                            <table id="datatablesSimple" class="table table-hover table-responsive border " style="color:black">
                                <thead class="table-info ">
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>TANGGAL PENGAJUAN</th>
                                        <th>NPK</th>
                                        <th>NAMA</th>
                                        <th>SEKSI</th>
                                        <th>JENIS CLAIM</th>
                                        <th>TANGGAL KWITANSI</th>
                                        <th>DIAGNOSA</th>
                                        <th>NAMA TERTANGGUNG</th>
                                        <th>OBAT YANG DIBERIKAN</th>
                                        <th>BIAYA CLAIM</th>
                                        <th>BUKTI KWITANSI</th>
                                        <th>NAMA RS/KLINIK/BIDAN</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody class="table-light">
                                    <?php
                                    include "../../../../koneksi.php";
                                    $no = 1;
                                    $sql = "SELECT * FROM medical WHERE nrp = '$_SESSION[nrp]' ORDER BY date_req DESC;";
                                    $getquery = mysqli_query($conn, $sql);
                                    while ($tampil = mysqli_fetch_array($getquery)) {
                                        $stat = $tampil['status'];;
                                        if ($stat == 10) {
                                            $status = "<p style='color:red'> Silahkan input ulang dan pastikan semua data benar</p>";
                                        } else if ($stat == 1) {
                                            $status = "<p style='color:green'>Sudah Diproses</p>";
                                        } else if ($stat == 0) {
                                            $status = "<p >Sedang Dalam Proses Pengecekan</p>";
                                        }
                                    ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $tampil['id']; ?></td>
                                            <td><?= date('d F Y', strtotime($tampil["date_req"])); ?></td>
                                            <td><?= $tampil['nrp']; ?></td>
                                            <td><?= $tampil['nama']; ?></td>
                                            <td><?= $tampil['seksi']; ?></td>
                                            <td><?= $tampil['jenis_claim']; ?></td>
                                            <td><?= date('d F Y', strtotime($tampil["tanggal_kwitansi"])); ?></td>
                                            <td><?= $tampil['diagnosa']; ?></td>
                                            <td><?= $tampil['nama_tertanggung']; ?></td>
                                            <td><?= $tampil['obat_diberikan']; ?></td>
                                            <td><?= buatRupiah($tampil['biaya']); ?></td>
                                            <td><img src="bukti_kwitansi/<?= $tampil['bukti_kwitansi']; ?>" style="max-width:100px; max-height:100px"></td>
                                            <td><?= $tampil['nama_rs']; ?></td>
                                            <td><?= $status ?> </td>
                                        </tr>
                                    <?php
                                        $no++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End of Main Content -->
        </div><!-- End of Content wrapper -->
    </div>
    </div><!-- End of Page Wrapper -->


    <!-- Bootstrap core JavaScript-->
    <script src="../../../../asset/style/js/jquery.min.js"></script>
    <script src="../../../../asset/style/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../../../asset/style/js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../../../asset/style/js/sb-admin-2.min.js"></script>
    <script src="../../../../asset/style/js/file.js"></script>
    <script src="../../../../asset/style/js/datatables-simple-demo.js"></script>
    <script src="../../../../asset/style/js/scripts.js"></script>
    <!-- Scripts For Icon-->
    <script src="https://kit.fontawesome.com/630a92c5e5.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

    <!-- SweetAlert 2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>

<?php
include "../../../../koneksi.php";

// code uniq untuk cuti
$code = mysqli_query($conn, "SELECT max(id) AS maxID FROM medical WHERE date_req >= CURRENT_DATE");
$data = mysqli_fetch_array($code);

$kode = substr($data['maxID'], 14);
$ed = 'MEDI';
$date = date("dmy");

$kode++;

$kodeauto = $_SESSION['nrp'] . '/' . $date . '-' . sprintf("%04s", $kode);

echo "$kodeauto";

//alert
$alert = "<script>    
        Swal.fire({
            title: 'Claim Medical Berhasil!',
            icon: 'success',
            showCancelButton: false,
            allowOutsideClick : false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
          }).then((result) => {
            if (result.isConfirmed) {
              location = '../ClaimMedical/'
            }
          })
        
        </script>";

//tosql

// Fungsi untuk kompres gamber sebelum upload
function compressImage($source, $destination, $quality)
{
    // mendapatkan info image
    $imgInfo = getimagesize($source);
    $mime = $imgInfo['mime'];
    // membuat image baru
    switch ($mime) {
            // proses kode memilih tipe tipe image 
        case 'image/jpeg':
            $image = imagecreatefromjpeg($source);
            break;
        case 'image/png':
            $image = imagecreatefrompng($source);
            break;
        case 'image/gif':
            $image = imagecreatefromgif($source);
            break;
        default:
            $image = imagecreatefromjpeg($source);
    }

    // Menyimpan image dengan ukuran yang baru
    imagejpeg($image, $destination, $quality);

    // Return image
    return $destination;
}
$uploadPath = "bukti_kwitansi/";
$status = $statusMsg = '';
if (isset($_POST['submit'])) {

    $jenis_claim = htmlspecialchars($_POST['jenis_claim']);
    $nama_tertanggung = htmlspecialchars($_POST['nama_tanggungan']);
    $tanggal_kwitansi = htmlspecialchars($_POST['tanggal_kwitansi']);
    $diagnosa = htmlspecialchars($_POST['diagnosa']);
    $obat_diberikan = htmlspecialchars($_POST['obat_diberikan']);
    $biaya_claim = htmlspecialchars($_POST['biaya_claim']);
    $nama_rs = htmlspecialchars($_POST['nama_rs']);
    $fileName = basename($_FILES["upload_kwitansi"]["name"]);
    $imageUploadPath = $uploadPath . $fileName;
    $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
    $sisasaldo =  $saldo[0] - $biaya_claim;
    // echo "ini adalah biaya $biaya_claim ygy";
    // echo "ini adalah saldo $saldo[0] ysy";
    // echo "ssss $sisasaldo sss";
    // Tipe format yang diperbolehkan 
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
    if (in_array($fileType, $allowTypes)) {

        if ($jenis_claim == 'Obat') {
            if ($biaya_claim <= $saldo[0]) {

                // Image temp source 
                $imageTemp = $_FILES["upload_kwitansi"]["tmp_name"];

                // Ukuran Kompresi 75 (bisa diganti dengan yang lain)
                $compressedImage = compressImage($imageTemp, $imageUploadPath, 30);

                if ($compressedImage) {
                    $sql = mysqli_query($conn, "INSERT INTO medical VALUES ('$kodeauto',(NOW()),'$_SESSION[nrp]','$_SESSION[nama]','$_SESSION[seksi]','$_SESSION[departemen]','$_SESSION[divisi]','$jenis_claim','$tanggal_kwitansi','$diagnosa','$nama_tertanggung','$obat_diberikan','$biaya_claim','$fileName','$nama_rs',0,'NULL')");
                    $sql1 = mysqli_query($conn, "UPDATE karyawan SET  saldo_medical='$sisasaldo' WHERE nrp='$_SESSION[nrp]'"); //UPDATE SISA saldo
                    echo "$alert";
                }
            } else {
                echo "<script>    
                Swal.fire({
                    title: 'Saldo Medical Anda Tidak Mencukupi!',
                    icon: 'error',
                    showCancelButton: false,
                    allowOutsideClick : false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      location = '../ClaimMedical/'
                    }
                  })
                
                </script>";
            }
        } else {

            // Image temp source 
            $imageTemp = $_FILES["upload_kwitansi"]["tmp_name"];

            // Ukuran Kompresi 75 (bisa diganti dengan yang lain)
            $compressedImage = compressImage($imageTemp, $imageUploadPath, 30);

            if ($compressedImage) {
                $sql = mysqli_query($conn, "INSERT INTO medical VALUES ('$kodeauto',(NOW()),'$_SESSION[nrp]','$_SESSION[nama]','$_SESSION[seksi]','$_SESSION[departemen]','$_SESSION[divisi]','$jenis_claim','$tanggal_kwitansi','$diagnosa','$nama_tertanggung','$obat_diberikan','$biaya_claim','$fileName','$nama_rs',0,'NULL')");
                echo "$alert";
            }
        }
    } else {
        echo "<script>    
        Swal.fire({
            title: 'Claim Medical Gagal!',
            text: '*hanya JPG, JPEG, PNG, & GIF yang diperbolehkan.',
            icon: 'error',
            showCancelButton: false,
            allowOutsideClick : false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
          }).then((result) => {
            if (result.isConfirmed) {
              location = '../ClaimMedical/'
            }
          })
        
        </script>";
    }
}
?>