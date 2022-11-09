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

    <title>Permit | Beranda</title>

    <link href="../../asset/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,600;1,100&display=swap" rel="stylesheet">
    <link href="../../asset/style/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../asset/style/css/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../asset/img/logo-mini.png" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script>
        window.OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "91e90f0f-7547-47aa-9f8e-7809c28e3d7d",
            });
            OneSignal.showNativePrompt();
            OneSignal.sendTag("role", "<?php echo $_SESSION['role'] ?>")
            OneSignal.sendTag("seksi", "<?php echo $_SESSION['seksi'] ?>")
            OneSignal.sendTag("departemen", "<?php echo $_SESSION['departemen'] ?>")
            OneSignal.sendTag("divisi", "<?php echo $_SESSION['divisi'] ?>")
            OneSignal.getUserId(function(userId) {
                console.log("OneSignal User ID:", userId);
            });
        });
    </script>

</head>

<body id="page-top" style="font-family: bahnschrift light;">
    <div id="wrapper">
        <div class="sidebar">
            <ul class="navbar-nav putih sidebar sidebar-light accordion" id="accordionSidebar">
                <div class="img-fluid sidebar-brand d-flex align-items-center justify-content-center my-2 flex-column">
                    <img class="logo" src="../../asset/img/Logo Smart.png">
                </div>
                <hr class="sidebar-divider my-0">

                <li class="nav-item ">
                    <a class="nav-link" href="../dashboard">
                        <i class="fas fa-fw fa-home"></i>
                        <span>Beranda</span>
                    </a>

                    <hr class="sidebar-divider my-0">

                    <div class=" dropend nav-item">
                        <a type="button" class="  nav-link " data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="row">
                                <div class="col-lg-10 "><i class="fas fa-fw fa-book"></i>
                                    Administrasi
                                </div>
                                <div class="col-2 d-none d-lg-block"><i class="fa-reguler fa-greater-than "></i></div>
                            </div>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="administrasi/cuti/">Pengajuan CUTI</a></li>
                            <li><a class="dropdown-item" href="administrasi/absensi/">Keterangan Absensi</a></li>
                            <li><a class="dropdown-item" href="administrasi/imp/">Izin Meninggalkan Pekerjaan</a></li>
                            <li><a class="dropdown-item" href="administrasi/dispensasi/">Dispensasi</a></li>
                            <li><a class="dropdown-item" href="administrasi/dinasluar/">Izin Dinas Luar</a></li>
                            <li><a class="dropdown-item" href="administrasi/suratdokter/">Surat Keterangan Dokter</a></li>
                            <li><a class="dropdown-item" href="administrasi/lembur/">Lembur</a></li>
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
                            <li><a class="dropdown-item" href="persetujuan/masukpabrik/">Menyetujui Izin Masuk Pabrik</a></li>
                            <li><a class="dropdown-item" href="persetujuan/cuti/">Menyetujui CUTI</a></li>
                            <li><a class="dropdown-item" href="persetujuan/absensi/">Menyetujui Keterangan Absensi</a></li>
                            <li><a class="dropdown-item" href="persetujuan/imp/">Menyetujui Izin Meninggalkan Pekerjaan</a></li>
                            <li><a class="dropdown-item" href="persetujuan/dispensasi/">Menyetujui Dispensasi</a></li>
                            <li><a class="dropdown-item" href="persetujuan/dinasluar/">Menyetujui Izin Dinas Luar</a></li>
                            <li><a class="dropdown-item" href="persetujuan/suratdokter/">Surat Keterangan Dokter</a></li>
                            <li><a class="dropdown-item" href="persetujuan/lembur/">Lembur</a></li>
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
                            <li><a class="dropdown-item" href="../../../Data_Stock/Dashboard/tables.php">Data Stock</a></li>
                            <li><a class="dropdown-item" href="../../../smart_qi/dashboardd/index.php">Dashboard Produksi</a></li>
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
                            <!--<li><a class="dropdown-item" href="fasilitas/ClaimMedical/">Claim Medical</a></li>-->
                            <li><a class="dropdown-item" href="../indexa.html">Claim Medical</a></li>
                            <li><a class="dropdown-item" href="fasilitas/Rmeeting/">Ruang Meeting</a></li>
                            <li><a class="dropdown-item" href="fasilitas/Seragam/">Seragam</a></li>
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
                                <img class="img-profile rounded-circle" src="../../asset/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <p class="dropdown-item text-center">
                                    <?= $_SESSION['nama'] ?>
                                </p>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="change">
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

            <div id="content" class="mt-5 mt-lg-5 px-0 pt-3">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col col-12 col-sm-4  p-0 ">
                            <!-- PROFILE SINGKAT -->
                            <div class="card mb-2 tumpul shading pb-4">
                                <div class="row-cols-sm-2 img-fluid my-lg-2 pt-3 p-5 p-lg-2">
                                    <img class="img-thumbnail rounded-circle mx-auto d-block" src="../../asset/img/undraw_profile.svg">
                                </div>
                                <div class="row-2 card-body">
                                    <h6 class="font-weight-bolder text-center text-uppercase"><?= $_SESSION['nama']; ?></h6>
                                    <P class="mt-1 mb-lg-4 text-center text-uppercase"><?= $_SESSION['nrp']; ?></P>
                                    <div class="smol">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 font-weight-bolder">Jabatan</div>
                                            <div class="col-12 col-lg-8 text-uppercase"><?= $_SESSION['jabatan']; ?></div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-12 col-lg-4 font-weight-bolder">Seksi</div>
                                            <div class="col-12 col-lg-8 text-uppercase"><?= $_SESSION['seksi']; ?></div>
                                        </div>
                                        <div class="row  mt-1">
                                            <div class="col-12 col-lg-4 font-weight-bolder">Departemen</div>
                                            <div class="col-12 col-lg-8 text-uppercase"><?= $_SESSION['departemen']; ?></div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-12 col-lg-4 font-weight-bolder">Divisi</div>
                                            <div class="col-12 col-lg-8 text-uppercase"><?= $_SESSION['divisi']; ?></div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-12 col-lg-4 font-weight-bolder">Bisnis Unit</div>
                                            <div class="col-12 col-lg-8 text-uppercase"><?= $_SESSION['bisnis_unit']; ?></div>
                                        </div>
                                    </div>
                                    <div class="row-cols-1 text-center justify-content-center my-4">
                                        <a href="#" class="btn  btn-icon-split btn-sm btn-biru" style="width: 6rem;" id="button1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            <span class=" text">Cek Profil</span>
                                        </a>
                                        <a href="#" class="btn  btn-icon-split btn-sm btn-warning btn-kuning ml-2" style="width: 6rem;" id="button2" data-bs-toggle="modal" data-bs-target="#staticBackdropabsen">
                                            <span class=" text">Absensi</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE SINGKAT -->
                        <div class="col col-12 col-sm-8 ">
                            <div class="row ">
                                <div class="col col-12  p-0 pl-sm-3 ">
                                    <h5>BERITA TERKINI</h5>
                                    <!-- CAROSEL GAMBAR -->
                                    <div id="demo" class="carousel slide shading" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ul class="carousel-indicators">
                                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                                            <li data-target="#demo" data-slide-to="1"></li>
                                            <li data-target="#demo" data-slide-to="2"></li>
                                            <li data-target="#demo" data-slide-to="3"></li>
                                            <li data-target="#demo" data-slide-to="4"></li>
                                        </ul>

                                        <!-- The slideshow -->
                                        <div class="carousel-inner w-100  rounded-top shading">
                                            <div class="carousel-item active">
                                                <img src="../../asset/img/Slide1.PNG" alt="" class="d-block w-100 h-100 shading">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../../asset/img/Slide2.PNG" alt="" class="d-block w-100 h-100 shading">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../../asset/img/Slide3.PNG" alt="" class="d-block w-100 h-100 shading">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../../asset/img/Slide4.PNG" alt="" class="d-block w-100 h-100 shading">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../../asset/img/Slide5.PNG" class="d-block w-100 h-100 shading">
                                            </div>
                                        </div>

                                        <!-- Left and right controls -->
                                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                            <span class="carousel-control-prev-icon"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#demo" data-slide="next" style="z-index: 0;">
                                            <span class="carousel-control-next-icon"></span>
                                        </a>

                                    </div>
                                    <!-- END CAROSEL GAMBAR -->
                                </div>
                                <div class="col col-12 p-0 pl-sm-3">
                                    <!-- BRITHDAY  -->
                                    <!--<div class="kotak tumpul-bawah shading flex-column ">-->
                                        <!--<div class="row-cols-md-1">-->
                                        <!--    <div class="col-sm-2 mt-3  text-center pb-4 pb-sm-2">-->
                                        <!--        <div class="nav-link text-left">-->
                                        <!--            <i class="fas fa-fw fa-birthday-cake mr-2"></i>-->
                                        <!--            <span>Selamat Ulang Tahun</span>-->
                                        <!--        </div>-->
                                        <!--        <div class="table-responsive">-->
                                        <!--            <table class="table-bordered smol " width="100%" cellspacing="0">-->
                                        <!--                <thead class="kuning">-->
                                        <!--                    <tr>-->
                                        <!--                        <th>NO</th>-->
                                        <!--                        <th>NRP</th>-->
                                        <!--                        <th>NAMA</th>-->
                                        <!--                    </tr>-->
                                        <!--                </thead>-->
                                        <!--                <tbody>-->
                                        <!--                    <tr>-->
                                                                <?php
                                                                require '../../koneksi.php';
                                                                $sql = mysqli_query($conn, "SELECT * FROM karyawan WHERE date_format(tanggal_lahir,'%m-%d')=date_format(now(),'%m-%d');");
                                                                $no = 1;
                                                                while ($tampil = mysqli_fetch_array($sql)) {
                                                                ?>

                                                                    <!--<td style="text-align: center;"><?= $no ?></td>-->
                                                                    <!--<td><?= $tampil['nrp']; ?></td>-->
                                                                    <!--<td><?= $tampil['nama']; ?></td>-->
                                                            </tr>
                                                        <?php $no++;
                                                                } ?>
                                    <!--                    </tbody>-->
                                    <!--                </table>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!-- END BRITHDAY -->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->
        </div><!-- End of Content wrapper -->
    </div><!-- End of Page Wrapper -->
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda Ingin Keluar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">Silahkan pilih "Logout" untuk keluar dari halaman ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../proses/proses_logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL Profil -->
    <div class="modal fade bd-example-modal-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel ">Profil Karyawan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body p-3">
                    <div class="row">
                        <button class="btn btn-primary ml-2" onclick="show()" style=" font-size: small;"><i class="fa fa-pen fa-sm fa-fw "></i> Edit</button>
                    </div>
                    <div id="hasil" style="display: block; padding-top: 1rem;">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-3 pt-2 font-weight-bolder">Nama</div>
                                    <div class="col-12 col-lg-9 "><label class="form-control"><?= $_SESSION['nama']; ?></label></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-3 pt-2 font-weight-bolder">NRP</div>
                                    <div class="col-12 col-lg-9 "><label class="form-control"><?= $_SESSION['nrp']; ?></label></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-3 pt-2 font-weight-bolder ">Jabatan</div>
                                    <div class="col-12 col-lg-9 "><label class="form-control"><?= $_SESSION['jabatan']; ?></label></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-3 pt-2 font-weight-bolder ">Seksi</div>
                                    <div class="col-12 col-lg-9 "><label class="form-control"><?= $_SESSION['seksi']; ?></label></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-3 pt-2 font-weight-bolder ">Departemen</div>
                                    <div class="col-12 col-lg-9 "><label class="form-control"><?= $_SESSION['departemen']; ?></label></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-3 pt-2 font-weight-bolder ">Divisi</div>
                                    <div class="col-12 col-lg-9 "><label class="form-control"><?= $_SESSION['divisi']; ?></label></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-3 pt-2 font-weight-bolder ">Bisnis Unit</div>
                                    <div class="col-12 col-lg-9 "><label class="form-control"><?= $_SESSION['bisnis_unit']; ?></label></div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-3 pt-2 font-weight-bolder ">No Telpon</div>
                                    <div class="col-12 col-lg-9 "><label class="form-control"><?= $_SESSION['no_telp']; ?></label></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-3 pt-2 font-weight-bolder ">Email Kantor</div>
                                    <div class="col-12 col-lg-9 "><label class="form-control"><?= $_SESSION['email_kantor']; ?></label></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-3 pt-2 font-weight-bolder ">Email Pribadi</div>
                                    <div class="col-12 col-lg-9 "><label class="form-control"><?= $_SESSION['email_pribadi']; ?></label></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-3 pt-2 font-weight-bolder ">Alamat</div>
                                    <div class="col-12 col-lg-9 "><label class="form-control" style="height: 15vh;"><?= $_SESSION['alamat']; ?></label></div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                    <div id="hasil1" style="display: none;">
                        <form action="" method="POST">
                            <div class="row mt-2">
                                <div class="col-12">
                                    <p class="text-danger"><sub>*</sub>) Anda hanya dapat merubah yang kami beri tanda &ensp;<sup>*</sup> </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="row mt-2">
                                        <div class="col-12 col-lg-3 pt-2 font-weight-bolder">Nama</div>
                                        <div class="col-12 col-lg-9 bg-muted"><label class="form-control"><?= $_SESSION['nama']; ?></label></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12 col-lg-3 pt-2 font-weight-bolder">NRP</div>
                                        <div class="col-12 col-lg-9 bg-muted"><label class="form-control"><?= $_SESSION['nrp']; ?></label></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12 col-lg-3 pt-2 font-weight-bolder ">Jabatan</div>
                                        <div class="col-12 col-lg-9 bg-muted"><label class="form-control"><?= $_SESSION['jabatan']; ?></label></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12 col-lg-3 pt-2 font-weight-bolder ">Seksi</div>
                                        <div class="col-12 col-lg-9 bg-muted"><label class="form-control"><?= $_SESSION['seksi']; ?></label></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12 col-lg-3 pt-2 font-weight-bolder ">Departemen</div>
                                        <div class="col-12 col-lg-9 bg-muted"><label class="form-control"><?= $_SESSION['departemen']; ?></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12 col-lg-3 pt-2 font-weight-bolder ">Divisi</div>
                                        <div class="col-12 col-lg-9 bg-muted"><label class="form-control"><?= $_SESSION['divisi']; ?></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12 col-lg-3 pt-2 font-weight-bolder ">Bisnis Unit</div>
                                        <div class="col-12 col-lg-9 bg-muted"><label class="form-control"><?= $_SESSION['bisnis_unit']; ?></label></div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="row mt-1">
                                        <div class="col-3 pt-2 font-weight-bolder ">No Telpon<sup class="text-danger">*</sup></div>
                                        <div class="col-12 col-lg-9 "><input type="tel" class="form-control" value="<?= $_SESSION['no_telp']; ?>" name="no_telp"></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12 col-lg-3 pt-2 font-weight-bolder ">Email Kantor<sup class="text-danger">*</sup></div>
                                        <div class="col-12 col-lg-9 "><input class="form-control" type="email" name="email_kantor" value="<?= $_SESSION['email_kantor']; ?>"></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12 col-lg-3 pt-2 font-weight-bolder ">Email Pribadi<sup class="text-danger">*</sup></div>
                                        <div class="col-12 col-lg-9 "><input class="form-control" type="email" name="email_pribadi" value="<?= $_SESSION['email_pribadi']; ?>"></div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-12 col-lg-3 pt-2 font-weight-bolder ">Alamat<sup class="text-danger">*</sup></div>
                                        <div class="col-12 col-lg-9 text-justify "><textarea class="form-control" style="height: 15vh;" name="alamat"><?= $_SESSION['alamat']; ?></textarea></div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn  btn-danger" onclick="batal()">Batal</button>
                                <button type="input" class="btn btn-success" name="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- MODAL Profil -->

    <!-- Modal Absen -->
    <div class="modal fade bd-example-modal-lg" id="staticBackdropabsen" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel ">Data Absensi</h5>
                    <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body p-3">
                    <div class="row">
                        <div class="col-sm-12 text-center pb-4 pb-sm-2 font-weight-bold">
                            <div class="nav-link text-center">
                                <i class="fa-solid fa-clipboard-user"></i>
                                <span>Berikut Adalah Data Absensi Anda</span>
                            </div>
                            <table id="table_id" class="table table-hover table-responsive border w-100 d-block d-md-table" style="color:black">
                                <thead class="kuning ">
                                    <tr>
                                        <th>NO</th>
                                        <th>NRP</th>
                                        <th>TANGGAL</th>
                                        <th>SHIFT</th>
                                        <th>JAM MASUK</th>
                                        <th>JAM PULANG</th>
                                        <th>TERLAMBAT</th>
                                        <th>PULANG CEPAT</th>
                                        <th>KETERANGAN</th>
                                        <th>UPDATE</th>
                                    </tr>
                                </thead>
                                <tbody class="table-light">
                                    <tr>
                                        <?php
                                        require '../../koneksi.php';
                                        $sql = mysqli_query($conn, "SELECT * FROM data_ta WHERE nrp='$_SESSION[nrp]';");
                                        $no = 1;
                                        while ($tampil = mysqli_fetch_array($sql)) {
                                        ?>
                                            <td style="text-align: center;"><?= $no ?></td>
                                            <td><?= $tampil['nrp']; ?></td>
                                            <td><?php echo date('d M Y', strtotime($tampil["tanggal_ta"])); ?></td>
                                            <td><?= $tampil['shift']; ?></td>
                                            <td><?= $tampil["jam_masuk"]; ?></td>
                                            <td><?= $tampil["jam_pulang"]; ?></td>
                                            <td><?= $tampil["terlambat"]; ?></td>
                                            <td><?= $tampil["pulang_cepat"]; ?></td>
                                            <td><?= $tampil['kode']; ?></td>
                                            <td><?php echo date('d/m/y - H:i ', strtotime($tampil["data_masuk"])); ?></td>
                                    </tr>

                                <?php $no++;
                                        } ?>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Absen -->

    <!-- Bootstrap core JavaScript-->
    <script src="../../asset/style/js/jquery.min.js"></script>
    <script src="../../asset/style/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../asset/style/js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../asset/style/js/sb-admin-2.min.js"></script>
    <script src="../../asset/style/js/file.js"></script>

    <!-- Scripts For Icon-->
    <script src="https://kit.fontawesome.com/630a92c5e5.js" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <!-- swwetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function show() {
            var x = document.getElementById("hasil");
            var y = document.getElementById("hasil1");
            if (x.style.display == "block") {
                y.style.display = "block";
                x.style.display = "none"
            } else if (y.style.display == "block") {
                y.style.display = "none";
                x.style.display = "block"
            }
        }

        function batal() {
            var x = document.getElementById("hasil");
            var y = document.getElementById("hasil1");
            if (x.style.display == "none") {
                y.style.display = "none";
                x.style.display = "block"
            } else if (y.style.display == "none") {
                y.style.display = "block";
                x.style.display = "none"
            }
        }

        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $email_kantor = htmlspecialchars($_POST['email_kantor']);
    $email_pribadi = htmlspecialchars($_POST['email_pribadi']);
    $no_telp = htmlspecialchars($_POST['no_telp']);
    $alamat = htmlspecialchars($_POST['alamat']);
    include '../../koneksi.php';
    // echo "$email_kantor";
    // echo "$email_pribadi";
    $sql = mysqli_query($conn, "UPDATE karyawan SET email_kantor='$email_kantor', email_pribadi='$email_pribadi', no_telp='$no_telp', alamat='$alamat' WHERE nrp='$_SESSION[nrp]'");
    echo "<script>    
                            Swal.fire({
                                title: 'Berhasil Dirubah!',
                                icon: 'success',
                                showCancelButton: false,
                                allowOutsideClick : false,
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK'
                              }).then((result) => {
                                if (result.isConfirmed) {
                                  location = '../dashboard/'
                                }
                              })
                            </script>";
}

?>