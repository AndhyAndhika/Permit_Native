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

                <div class="container-fluid">
                    <h3>D a t a &nbsp; T a m u &nbsp; N u s a m e t a l</h3>
                    <div class="row mt-2">
                        <div class="col-12 card tumpul">
                            <!-- <div class="row">
                                <div class="col-5 m-2 ml-auto text-right justify-content-end align-items-right">
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropedit" style="font-size: small;"><i class="fa fa-plus fa-sm fa-fw "></i> Tamu Baru</button>
                                </div>
                            </div> -->
                            <table id="datatablesSimple" class="table table-striped table-responsive w-100 d-block d-md-table" style="color:black; width:100%;">
                                <thead class="table-info ">
                                    <tr>
                                        <th class="text-center">NO</th>
                                        <th class="text-center">TANGGAL KEDATANGAN</th>
                                        <th class="text-center">TANGGAL KEPULANGAN</th>
                                        <th class="text-center">NAMA</th>
                                        <th class="text-center">ASAL PERUSAHAAN</th>
                                        <th class="text-center">KEPERLUAN</th>
                                        <th class="text-center">USER</th>
                                        <th class="text-center">SEKSI</th>
                                        <th class="text-center">STATUS</th>
                                        <th class="text-center">AKSI</th>

                                    </tr>
                                </thead>
                                <tbody class="table-light table-bordered">
                                    <?php
                                    include "../../../koneksi.php";
                                    $no = 1;
                                    $sql = "SELECT * FROM permit ORDER BY date_req DESC;";
                                    $getquery = mysqli_query($conn, $sql);

                                    while ($tampil = mysqli_fetch_array($getquery)) {
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
                                    ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo date('d F Y', strtotime($tampil["tanggal_in"])); ?></td>
                                            <td><?php echo date('d F Y', strtotime($tampil["tanggal_out"])); ?></td>
                                            <td><?= $tampil['nama']; ?></td>
                                            <td><?= $tampil['asal_perusahaan']; ?></td>
                                            <td><?= $tampil['keperluan']; ?></td>
                                            <td><?= $tampil['user']; ?></td>
                                            <td><?= $tampil['seksi']; ?></td>
                                            <td><?= $status ?></td>
                                            <td class="text-center"><a href="view?x=<?= $tampil['id']; ?>" class="fa-solid fa-eye btn btn-success"></a></td>
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
    </div><!-- End of Page Wrapper -->

    <!-- Modal View Data Karyawan -->

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
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <!-- SweetAlert 2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>