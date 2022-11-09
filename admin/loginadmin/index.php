<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (isset($_SESSION['role']) != 99) {
    header("location:../");
};
?>
<?php
if ($_SESSION['role'] != 99) {
?>
    <script>
        setTimeout('Redirect()', 0);

        function Redirect() {
            window.location = "../proses/proses_logout.php";
        }
    </script>

<?php } else {
?>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SuperAdmin | Kanri</title>

        <link href="../../asset/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,600;1,100&display=swap" rel="stylesheet">
        <link href="../../asset/style/css/sb-admin-2.min.css" rel="stylesheet">
        <link href="../../asset/style/css/main.css" rel="stylesheet">
        <link rel="shortcut icon" href="../../asset/img/logo-mini.png" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
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

                        <a class="nav-link" href="../loginadmin">
                            <i class="fas fa-fw fa-home"></i>
                            <span>Beranda</span>
                        </a>

                        <hr class="sidebar-divider my-0">

                        <a class="nav-link" href="../loginadmin/absensi">
                            <i class="fa-solid fa-clipboard-user"></i>
                            <span>Absensi</span>
                        </a>

                        <hr class="sidebar-divider my-0">

                        <a class="nav-link" href="karyawan/">
                            <i class="fas fa-fw fa-user"></i>
                            <span>Karyawan</span></a>

                        <hr class="sidebar-divider my-0">
                    </li>
                    <li class="nav-item">
                        <hr class="sidebar-divider my-0">

                        <a class="nav-link" href="medical/">
                            <i class="fa-solid fa-book-medical"></i>
                            <span>Claim Medical</span></a>

                        <hr class="sidebar-divider my-0">

                        <hr class="sidebar-divider my-0">

                        <a class="nav-link" href="masukpabrik/">
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
                                <li><a class="dropdown-item" href="download/cuti/">Pengajuan CUTI</a></li>
                                <li><a class="dropdown-item" href="download/absensi/">Keterangan Absensi</a></li>
                                <li><a class="dropdown-item" href="download/imp/">Izin Meninggalkan Pekerjaan</a></li>
                                <li><a class="dropdown-item" href="download/dispensasi/">Dispensasi</a></li>
                                <li><a class="dropdown-item" href="download/dinasluar/">Izin Dinas Luar</a></li>
                                <li><a class="dropdown-item" href="download/lembur/">Lembur</a></li>
                                <li><a class="dropdown-item" href="download/ClaimMedical/">Claim Medical</a></li>
                                <li><a class="dropdown-item" href="download/suratdokter/">Surat Keterangan Dokter</a></li>
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
                                    <img class="img-profile rounded-circle" src="../../asset/img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <p class="dropdown-item text-center">
                                        <?= $_SESSION['nama'] ?>
                                    </p>
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
                                <a class="btn btn-primary" href="../proses/proses_logout.php">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content" class="mt-5 mt-lg-5 px-0 pt-3">
                    <div class="container-fluid">
                        <!-- TABLE KARYAWAN CUTI -->
                        <div class="row">
                            <div class="col-12 card tumpul table-borderless  mt-3 p-2">
                                <h3 class="text-center font-weight-bold"><u>Karyawan Cuti</u></h3>
                                <table id="TableCuti" class="table table-hover table-responsive border w-100 d-block d-md-table" style="color:black">
                                    <thead class="table-info ">
                                        <tr>
                                            <th>NO</th>
                                            <th>NRP</th>
                                            <th>NAMA</th>
                                            <th>SEKSI</th>
                                            <th>DEPARTEMEN</th>
                                            <th>DIVISI</th>
                                            <th>TANGGAL CUTI</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-light">
                                        <?php
                                        include "../../koneksi.php";
                                        $no = 1;
                                        $sql = "SELECT * FROM cuti WHERE approval=5 ORDER BY tanggal_mulai ASC;";
                                        $getquery = mysqli_query($conn, $sql);

                                        while ($tampil = mysqli_fetch_array($getquery)) {
                                        ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $tampil['nrp']; ?></td>
                                                <td><?= $tampil['nama']; ?></td>
                                                <td><?= $tampil['seksi']; ?></td>
                                                <td><?= $tampil['departemen']; ?></td>
                                                <td><?= $tampil['divisi']; ?></td>
                                                <td><?= date('d F Y ', strtotime($tampil["tanggal_mulai"])); ?></td>
                                                <td style="text-align: center;"><a onclick="triggerModal('<?= $tampil['id'] ?>', '<?= $tampil['role'] ?>', '<?= $tampil['nrp'] ?>','<?= $tampil['jumlah_cuti'] ?>','<?= $tampil['jenis_cuti'] ?>')"><i class="btn fa-solid fa-x" style="background-color:red; color: white; height: 30px;"></i></a></td>
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="modalReject" tabindex="-1" role="dialog" aria-labelledby="modalReject" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form action="" method="POST" id="formReject">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tolak Pengajuan Cuti</h5>
                                            <button type="button" id="close" class="close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="komentar">Silahkan Beri Alasan Mengapa Ditolak.<sup class="text-danger">*</sup></label>
                                            <input type="text" name="komentar" class="form-control" placeholder="Isi komentar..." id="komentar" autofocus>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" name="tolak">Save changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- TABLE KARYAWAN TA LEBIH DARI 2 HARI -->
                        <div class="row">
                            <div class="col-12 card tumpul table-borderless  mt-3 p-2">
                                <h3 class="text-center font-weight-bold"><u>KARYAWAN TA LEBIH DARI 2 HARI</u></h3>
                                <table id="TableDinlu" class="table table-hover table-responsive border w-100 d-block d-md-table" style="color:black ">
                                    <thead class="table-info">
                                        <tr>
                                            <th>NO</th>
                                            <th>NRP</th>
                                            <th>NAMA</th>
                                            <th>SEKSI</th>
                                            <th>DEPARTEMEN</th>
                                            <th>DIVISI</th>
                                            <th>KETERANGAN</th>
                                            <!-- <th>TANGGAL TA</th> -->
                                            <th>JUMLAH TA</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-light">
                                        <?php
                                        include "../../koneksi.php";
                                        $no = 1;
                                        // $sql = "SELECT * FROM dinasluar WHERE tanggal_berangkat >= CURDATE() AND approval=5 ORDER BY tanggal_berangkat ASC;";
                                        $sql = "SELECT *, COUNT(*) AS 'AWK' FROM karyawan a INNER JOIN data_ta b ON a.nrp=b.nrp WHERE b.kode = 'TA' GROUP BY b.nama HAVING COUNT(*) >= 2 ORDER BY AWK DESC;";
                                        $getquery = mysqli_query($conn, $sql);

                                        while ($tampil = mysqli_fetch_array($getquery)) {
                                        ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $tampil['nrp']; ?></td>
                                                <td><?= $tampil['nama']; ?></td>
                                                <td><?= $tampil['seksi']; ?></td>
                                                <td><?= $tampil['departemen']; ?></td>
                                                <td><?= $tampil['divisi']; ?></td>
                                                <td><?= $tampil['kode']; ?></td>
                                                <td><?= $tampil['AWK']; ?> Kali</td>
                                                <!-- <td><?= $tampil['tujuan']; ?></td>
                                                <td><?= $tampil['keperluan']; ?></td>
                                                <td><?= date('d F Y ', strtotime($tampil["tanggal_berangkat"])); ?></td>
                                                <td><?= $tampil['jam_berangkat']; ?></td>
                                                <td><?= $tampil['kendaraan']; ?></td> -->
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- TABLE KARYAWAN DINAS LUAR -->
                        <div class="row">
                            <div class="col-12 card tumpul table-borderless  mt-3 p-2">
                                <h3 class="text-center font-weight-bold"><u>Karyawan Dinas Luar</u></h3>
                                <table id="TableDinlu" class="table table-hover table-responsive border w-100 d-block d-md-table" style="color:black ">
                                    <thead class="table-info ">
                                        <tr>
                                            <th>NO</th>
                                            <th>NRP</th>
                                            <th>NAMA</th>
                                            <th>SEKSI</th>
                                            <th>DEPARTEMEN</th>
                                            <th>DIVISI</th>
                                            <th>TUJUAN</th>
                                            <th>KEPERLUAN</th>
                                            <th>TANGGAL BERANGKAT</th>
                                            <th>JAM BERANGKAT</th>
                                            <th>KENDARAAN</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-light">
                                        <?php
                                        include "../../koneksi.php";
                                        $no = 1;
                                        $sql = "SELECT * FROM dinasluar WHERE tanggal_berangkat >= CURDATE() AND approval=5 ORDER BY tanggal_berangkat ASC;";
                                        $getquery = mysqli_query($conn, $sql);

                                        while ($tampil = mysqli_fetch_array($getquery)) {
                                        ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $tampil['nrp']; ?></td>
                                                <td><?= $tampil['nama']; ?></td>
                                                <td><?= $tampil['seksi']; ?></td>
                                                <td><?= $tampil['departemen']; ?></td>
                                                <td><?= $tampil['divisi']; ?></td>
                                                <td><?= $tampil['tujuan']; ?></td>
                                                <td><?= $tampil['keperluan']; ?></td>
                                                <td><?= date('d F Y ', strtotime($tampil["tanggal_berangkat"])); ?></td>
                                                <td><?= $tampil['jam_berangkat']; ?></td>
                                                <td><?= $tampil['kendaraan']; ?></td>
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- TABLE KARYAWAN IMP -->
                        <div class="row">
                            <div class="col-12 card tumpul table-borderless  mt-3 p-2">
                                <h3 class="text-center font-weight-bold"><u>Karyawan IMP</u></h3>
                                <table id="TableIMP" class="table table-hover table-responsive border w-100 d-block d-md-table" style="color:black">
                                    <thead class="table-info ">
                                        <tr>
                                            <th>NO</th>
                                            <th>NRP</th>
                                            <th>NAMA</th>
                                            <th>SEKSI</th>
                                            <th>DEPARTEMEN</th>
                                            <th>DIVISI</th>
                                            <th>KEPERLUAN</th>
                                            <th>TANGGAL IMP</th>
                                            <th>JAM BERANGKAT</th>
                                            <th>RENCANA KEMBALI</th>
                                            <th>JAM KEMBALI</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-light">
                                        <?php
                                        include "../../koneksi.php";
                                        $no = 1;
                                        $sql = "SELECT * FROM imp WHERE tanggal_berangkat >= CURDATE() AND approval=5 ORDER BY tanggal_berangkat ASC;";
                                        $getquery = mysqli_query($conn, $sql);

                                        while ($tampil = mysqli_fetch_array($getquery)) {
                                            $jam = $tampil['jam_kembali'];
                                            $jambalik = date('H : i : s', strtotime($tampil["jam_kembali"]));
                                            if ($jam == '00:00:00') {
                                                $jam_balik = 'TIDAK KEMBALI';
                                            } else {
                                                $jam_balik = $jam;
                                            }
                                        ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $tampil['nrp']; ?></td>
                                                <td><?= $tampil['nama']; ?></td>
                                                <td><?= $tampil['seksi']; ?></td>
                                                <td><?= $tampil['departemen']; ?></td>
                                                <td><?= $tampil['divisi']; ?></td>
                                                <td><?= $tampil['keperluan']; ?></td>
                                                <td><?= date('d F Y ', strtotime($tampil["tanggal_berangkat"])); ?></td>
                                                <td><?= $tampil['jam_berangkat']; ?></td>
                                                <td><?= $tampil['rencana_kembali']; ?></td>
                                                <td><?= $jam_balik ?></td>
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

                <!-- Bootstrap core JavaScript-->
                <script src="../../asset/style/js/jquery.min.js"></script>
                <script src="../../asset/style/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="../../asset/style/js/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="../../asset/style/js/sb-admin-2.min.js"></script>
                <script src="../../asset/style/js/file.js"></script>

                <!-- Scripts For Icon-->
                <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
                <script src="https://kit.fontawesome.com/630a92c5e5.js" crossorigin="anonymous"></script>
                <!-- SweetAlert 2 -->
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                <script>
                    $(document).ready(function() {
                        $('#TableCuti').DataTable();
                    });

                    $(document).ready(function() {
                        $('#TableDinlu').DataTable();
                    });

                    $(document).ready(function() {
                        $('#TableIMP').DataTable();
                    });

                    const triggerModal = (id, role, nrp, jumlah_cuti, jenis_cuti) => {
                        $('#modalReject').modal('toggle');
                        $('#formReject').attr('action', 'index.php?kodee=' + id + '&req=' + role + '&nrp=' + nrp + '&jt=' + jumlah_cuti + '&jnt=' + jenis_cuti + '');
                    }

                    $('#close').on('click', function() {
                        $('#modalReject').modal('hide');
                    });
                </script>
    </body>


</html>
<?php
}
include "../../koneksi.php";
if (isset($_POST['tolak'])) {
    $sql = mysqli_query($conn, "SELECT cuti_besar FROM karyawan WHERE nrp='$_GET[nrp]'");
    $sql1 = mysqli_query($conn, "SELECT cuti_tahunan FROM karyawan WHERE nrp='$_GET[nrp]'");
    $tampil = mysqli_fetch_array($sql);
    $tampil1 = mysqli_fetch_array($sql1);
    $cb = "$tampil[0]";
    $ct = "$tampil1[0]";

    if ($_GET['jnt'] == 'Cuti Tahunan') {
        $sisact  = $ct + $_GET['jt'];
        mysqli_query($conn, "UPDATE cuti, karyawan SET cuti.approval=10, cuti.komentar='$_POST[komentar]' , karyawan.cuti_tahunan='$sisact' WHERE cuti.nrp=karyawan.nrp AND cuti.id='$_GET[kodee]' AND karyawan.nrp='$_GET[nrp]'");
        echo "<script>    
        Swal.fire({
            title: 'Permintaan Cuti Berhasil Ditolak!',
            icon: 'error',
            showCancelButton: false,
            allowOutsideClick : false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
          }).then((result) => {
            if (result.isConfirmed) {
                location = '../loginadmin'
            }
          })

        </script>";
    } else if ($_GET['jnt'] == 'Cuti Besar') {
        $sisacb  = $cb + $_GET['jt'];
        mysqli_query($conn, "UPDATE cuti, karyawan SET cuti.approval=10, cuti.komentar='$_POST[komentar]' , karyawan.cuti_besar='$sisacb' WHERE cuti.nrp=karyawan.nrp AND cuti.id='$_GET[kodee]' AND karyawan.nrp='$_GET[nrp]'");
        echo "<script>    
        Swal.fire({
            title: 'Permintaan Cuti Berhasil Ditolak!',
            icon: 'error',
            showCancelButton: false,
            allowOutsideClick : false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
          }).then((result) => {
            if (result.isConfirmed) {
                location = '../loginadmin'
            }
          })

        </script>";
        // echo "<script>alert('CUTI BESAR.!!');
        // document.location.href='../cuti';</script>";
    } else {
        mysqli_query($conn, "UPDATE cuti SET approval=10, komentar='$_POST[komentar]' WHERE id='$_GET[kodee]'");
        echo "<script>    
            Swal.fire({
                title: 'Permintaan Cuti Berhasil Ditolak!',
                icon: 'error',
                showCancelButton: false,
                allowOutsideClick : false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then((result) => {
                if (result.isConfirmed) {
                    location = '../loginadmin'
                }
              })
    
            </script>";
    }
}
?>