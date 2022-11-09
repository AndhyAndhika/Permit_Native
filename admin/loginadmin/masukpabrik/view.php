<!DOCTYPE html>
<html lang="en">
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

    <title>Administrator | Izin Masuk Pabrik</title>
    <link href="../../../asset/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,600;1,100&display=swap" rel="stylesheet">
    <link href="../../../asset/style/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../../asset/style/css/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../../asset/img/logo-mini.png" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script> -->
</head>

<body id="page-top" style="font-family: bahnschrift light; color:black;">
    <div id="wrapper">
        <div class="sidebar">
            <ul class="navbar-nav putih sidebar sidebar-light accordion" id="accordionSidebar">
                <div class="img-fluid sidebar-brand d-flex align-items-center justify-content-center my-2 flex-column">
                    <img class="logo" src="../../../asset/img/Logo Smart.png">
                </div>
                <hr class="sidebar-divider my-0">

                <li class="nav-item ">

                    <a class="nav-link" href="../../loginadmin">
                        <i class="fas fa-fw fa-home"></i>
                        <span>Beranda</span>
                    </a>

                    <hr class="sidebar-divider my-0">
                    <a class="nav-link" href="../absensi.php">
                        <i class="fa-solid fa-clipboard-user"></i>
                        <span>Absensi</span>
                    </a>
                    <hr class="sidebar-divider my-0">

                    <a class="nav-link" href="../karyawan/">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Karyawan</span></a>


                    <hr class="sidebar-divider my-0">

                <li class="nav-item">

                    <hr class="sidebar-divider my-0">

                    <a class="nav-link" href="../medical/">
                        <i class="fa-solid fa-book-medical"></i>
                        <span>Claim Medical</span></a>

                    <hr class="sidebar-divider my-0">

                    <hr class="sidebar-divider my-0">

                    <a class="nav-link" href="../masukpabrik/">
                        <i class="fa-solid fa-person-through-window"></i>
                        <span>Izin Masuk Pabrik</span></a>

                    <hr class="sidebar-divider my-0">
                    <div class=" dropend nav-item">
                        <a type="button" class="  nav-link " data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="row">
                                <div class="col-lg-10"><i class="fas fa-fw fa-download"></i>
                                    Download
                                </div>
                                <div class="col-2 d-none d-lg-block"><i class="fa-reguler fa-greater-than "></i></div>
                            </div>
                        </a>


                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../download/cuti/">Pengajuan CUTI</a></li>
                            <li><a class="dropdown-item" href="../download/absensi/">Keterangan Absensi</a></li>
                            <li><a class="dropdown-item" href="../download/imp/">Izin Meninggalkan Pekerjaan</a></li>
                            <li><a class="dropdown-item" href="../download/dispensasi/">Dispensasi</a></li>
                            <li><a class="dropdown-item" href="../download/dinasluar/">Izin Dinas Luar</a></li>
                            <li><a class="dropdown-item" href="../download/lembur/">Lembur</a></li>
                            <li><a class="dropdown-item" href="../download/ClaimMedical/">Claim Medical</a></li>
                            <li><a class="dropdown-item" href="../download/suratdokter/">Surat Keterangan Dokter</a></li>
                        </ul>
                    </div>


                </li>

                <hr class="sidebar-divider my-0">
                <div class="col"></div>

                <div class="container my-auto text-left">
                    <div class="copyright text-center font-italic mb-4">
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
                                <img class="img-profile rounded-circle" src="../../../asset/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <p class="dropdown-item text-center">
                                    <?= $_SESSION['nama'] ?>
                                </p>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../change.php">
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
                            <a class="btn btn-primary" href="../../proses/proses_logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END logut Modal-->

            <!--  MAIN CONTENT-->
            <div id="content" class="mt-5 mt-lg-5 px-0 pt-3">

                <div class="container-fluid ">
                    <h3>L i h a t &nbsp; D a t a &nbsp; T a m u </h3>
                    <div class="card card-body mb-5">
                        <div class="row mt-3">
                            <div class="col-12 d-flex align-items-right justify-content-end p-3">
                                <a class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#staticBackdropedit">Edit</a>
                                <a href="../masukpabrik" class="btn btn-primary m-1">Kembali</a>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <?php
                            include "../../../koneksi.php";
                            if (isset($_GET['x'])) {

                                $no = 1;
                                $sql = "SELECT * FROM permit WHERE id = '$_GET[x]';";
                                $getquery = mysqli_query($conn, $sql);
                                $tampil = mysqli_fetch_array($getquery);
                                $approval = $tampil['approval'];
                                if ($approval == 0) {
                                    $status = 'menunggu Approval Staff';
                                } else if ($approval == 1) {
                                    $status = 'menunggu Approval Kasie';
                                } else if ($approval == 2) {
                                    $status = 'menunggu Approval DeptHead';
                                } else if ($approval == 3) {
                                    $status = 'menunggu Approval DivHead';
                                } else if ($approval == 4) {
                                    $status = 'menunggu Approval COO';
                                } else if ($approval == 5) {
                                    $status = 'Silahkan Masuk Ke Area Nusametal';
                                } else if ($approval == 10) {
                                    $status = 'Tidak Diizinkan Masuk Ke Area Nusametal';
                                }

                                $cekin = $tampil['check_in'];
                                $cekin1 = date('d F Y - H : i', strtotime($tampil["check_in"]));
                                if ($cekin == NULL) {
                                    $checkin = 'Belum Datang / Tidak Datang';
                                } else {
                                    $checkin = $cekin1;
                                }

                                $cekout = $tampil['check_out'];
                                $cekout1 = date('d F Y - H : i', strtotime($tampil["check_out"]));
                                if ($cekout == NULL) {
                                    $checkout = 'Belum Kembali / Tidak Kembali';
                                } else {
                                    $checkout = $cekout1;
                                }
                            }
                            ?>
                            <div class="col-12 ml-auto justify-content-end mb-3">
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-2 font-weight-bolder ">ID</div>
                                    <div class="col-12 col-lg-8 "><?= $tampil['id']; ?></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-2 font-weight-bolder ">Tanggal Pengajuan</div>
                                    <div class="col-12 col-lg-8 "><?= date('d F Y ', strtotime($tampil["date_req"])); ?></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-2 font-weight-bolder ">Nama</div>
                                    <div class="col-12 col-lg-8 "><?= $tampil['nama']; ?></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-2 font-weight-bolder ">Asal Perusahaan</div>
                                    <div class="col-12 col-lg-8 "><?= $tampil['asal_perusahaan']; ?></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-2 font-weight-bolder ">Email</div>
                                    <div class="col-12 col-lg-8 "><?= $tampil['email']; ?></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-2 font-weight-bolder ">Keperluan</div>
                                    <div class="col-12 col-lg-8 "><?= $tampil['keperluan']; ?></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-2 font-weight-bolder ">Tanggal Kedatangan</div>
                                    <div class="col-12 col-lg-8 "><?= date('d F Y ', strtotime($tampil["tanggal_in"])); ?></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-2 font-weight-bolder ">Tanggal Kepulangan</div>
                                    <div class="col-12 col-lg-8 "><?= date('d F Y ', strtotime($tampil["tanggal_out"])); ?></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-2 font-weight-bolder ">Jam Kedatangan</div>
                                    <div class="col-12 col-lg-8 "><?= $tampil['jam_in']; ?></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-2 font-weight-bolder ">Jam Kepulangan</div>
                                    <div class="col-12 col-lg-8 "><?= $tampil['jam_out']; ?></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-2 font-weight-bolder ">User</div>
                                    <div class="col-12 col-lg-8 "><?= $tampil['user']; ?></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-2 font-weight-bolder ">Seksi</div>
                                    <div class="col-12 col-lg-8 "><?= $tampil['seksi']; ?></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-2 font-weight-bolder ">Datang Aktual</div>
                                    <div class="col-12 col-lg-8 "><?= $checkin; ?></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-2 font-weight-bolder ">Kembali Aktual</div>
                                    <div class="col-12 col-lg-8 "><?= $checkout; ?></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-2 font-weight-bolder ">No Telpon</div>
                                    <div class="col-12 col-lg-8 ">+62 <?= $tampil['no_telp']; ?></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-2 font-weight-bolder ">Plat Nomor</div>
                                    <div class="col-12 col-lg-8 "><?= $tampil['plat_nomor']; ?></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-2 font-weight-bolder ">Disetujui Oleh</div>
                                    <div class="col-12 col-lg-8 "><?= $tampil['approveby']; ?></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-lg-2 font-weight-bolder ">Approval</div>
                                    <div class="col-12 col-lg-8 "><?= $status; ?></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->
        </div><!-- End of Content wrapper -->
    </div><!-- End of Page Wrapper -->

    <!-- Modal View Data Karyawan -->
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="modal fade" id="staticBackdropedit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel ">Edit Data Tamu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-body pt-0 pb-0">
                        <div class="row">
                            <div class="col col-6  pt-2 mx-0 mt-4 pl-3 ">Bypass Surat Izin Masuk</div>
                            <div class="col col-6  p-0 mt-4">
                                <select type="name" class="form-control chosen" name="approval" required>
                                    <option name="approval" value="1">Bypass Dari Staff</option>
                                    <option name="approval" value="2">Bypass Dari Kepala Seksi</option>
                                    <option name="approval" value="3">Bypass Dari Departemen Head</option>
                                    <option name="approval" value="4">Bypass Dari Divisi Head</option>
                                    <option name="approval" value="5">Silahkan Masuk Ke Area Nusametal</option>
                                    <option name="approval" value="10">Tidak Diizinkan Masuk</option>
                                </select>
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
    <!-- EDN Modal Edit Data Karyawan -->



    <!-- Bootstrap core JavaScript-->
    <script src="../../../asset/style/js/jquery.min.js"></script>
    <script src="../../../asset/style/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../../asset/style/js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../../asset/style/js/sb-admin-2.min.js"></script>
    <script src="../../../asset/style/js/file.js"></script>
    <script src="../../../asset/style/js/datatables-simple-demo.js"></script>
    <script src="../../../asset/style/js/scripts.js"></script>
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

if (isset($_POST['submit'])) {

    include "../../../koneksi.php";

    $appr = htmlspecialchars($_POST['approval']);

    $sql = mysqli_query($conn, "UPDATE permit SET approval='$appr', approveby='$_SESSION[nama]' WHERE id='$_GET[x]'");

    echo "<script>    
    Swal.fire({
        title: 'Bypass Izin Masuk Pabrik Berhasil.',
        icon: 'success',
        showCancelButton: false,
        allowOutsideClick : false,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
      }).then((result) => {
        if (result.isConfirmed) {
          location = '../masukpabrik/'
        }
      })

    </script>";
}
?>