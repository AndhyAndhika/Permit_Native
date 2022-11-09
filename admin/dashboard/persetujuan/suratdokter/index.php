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

    <title>SKD | Persetujuan</title>

    <link href="../../../../asset/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,600;1,100&display=swap" rel="stylesheet">
    <link href="../../../../asset/style/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../../../asset/style/css/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../../../asset/img/logo-mini.png" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script> -->



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
                            <li><a class="dropdown-item" href="../masukpabrik/">Menyetujui Izin Masuk Pabrik</a></li>
                            <li><a class="dropdown-item" href="../cuti/">Menyetujui CUTI</a></li>
                            <li><a class="dropdown-item" href="../absensi/">Menyetujui Keterangan Absensi</a></li>
                            <li><a class="dropdown-item" href="../imp/">Menyetujui Izin Meninggalkan Pekerjaan</a></li>
                            <li><a class="dropdown-item" href="../dispensasi/">Menyetujui Dispensasi</a></li>
                            <li><a class="dropdown-item" href="../dinasluar/">Menyetujui Izin Dinas Luar</a></li>
                            <li><a class="dropdown-item" href="../suratdokter/">Surat Keterangan Dokter</a></li>
                            <li><a class="dropdown-item" href="../lembur/">Menyetujui Lembur</a></li>
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
                            <li><a class="dropdown-item" href="../../../indexa.html">Claim Medical</a></li>
                            <!--<li><a class="dropdown-item" href="../../fasilitas/ClaimMedical/">Claim Medical</a></li>-->
                            <li><a class="dropdown-item" href="../../fasilitas/Rmeeting/">Ruang Meeting</a></li>
                            <li><a class="dropdown-item" href="../../fasilitas/Seragam/">Seragam</a></li>
                        </ul>
                    </div>

                    <hr class="sidebar-divider my-0">

                <li class="nav-item">
                    <a class="nav-link" href="SOP.html">
                        <i class="fas fa-fw fa-file"></i>
                        <span>SOP</span></a>
                </li>

                <hr class="sidebar-divider my-0">

                <li class="nav-item">
                    <a class="nav-link" href="IK.html">
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
                    <h3>S u r a t &ensp; K e t e r a n g a n &ensp; D o k t e r</h3>

                    <div class="row">
                        <div class="col card-body tumpul bg-light-biru text-dark" style="background-color: #A5F1E9;">
                            <i class="fas fa-fw fa-lightbulb"></i>
                            <span>B e r i k u t &ensp; A d a l a h &ensp; R i w a y a t &ensp; SKD &ensp; A n d a </span>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 card tumpul table-borderless">
                            <div class="table table-responsive">
                                <table id="datatablesSimple" class="table table-hover table-responsive border w-100 d-block d-md-table" style="color:black">
                                    <thead class="table-info">
                                        <tr>
                                            <th>NO</th>
                                            <th>ID </th>
                                            <th>TANGGAL REQUEST</th>
                                            <th>NRP</th>
                                            <th>NAMA</th>
                                            <th>SEKSI</th>
                                            <th>JENIS PERAWATAN</th>
                                            <th>TANGGAL MULAI</th>
                                            <th>TANGGAL SELESAI</th>
                                            <th>JUMLAH IZIN (HARI)</th>
                                            <th>NAMA DOKTER</th>
                                            <th>LAMPIRAN</th>
                                            <th>STATUS</th>
                                            <th colspan="2">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-light">
                                        <?php
                                        include "../../../../koneksi.php";
                                        $no = 1;
                                        error_reporting(1);
                                        $query = "SELECT * FROM suratdokter a INNER JOIN karyawan b ON a.nrp=b.nrp WHERE a.approval='$_SESSION[role]'";
                                        if ($_SESSION['role'] == '0' || $_SESSION['role'] == '1') {
                                            $qWhere = "AND b.seksi = '$_SESSION[seksi]' ";
                                        } else if ($_SESSION['role'] == '2') {
                                            $qWhere = "AND b.departemen ='$_SESSION[departemen]'";
                                        } else if ($_SESSION['role'] == '3') {
                                            $qWhere = "AND b.divisi = '$_SESSION[divisi]' ";
                                        } else if ($_SESSION['role'] == '4') {
                                            $qWhere = "AND b.bisnis_unit = '$_SESSION[bisnis_unit]' ";
                                        }
                                        $mergeQuery = $query . $qWhere;
                                        // $mergeQuery = ("SELECT * FROM cuti a INNER JOIN karyawan b ON a.nrp=b.nrp WHERE a.approval='3'AND b.divisi = 'ENGINEERING';");
                                        $ambildata = mysqli_query($conn, $mergeQuery);
                                        // echo $mergeQuery;

                                        while ($tampil = mysqli_fetch_array($ambildata)) {
                                            $approval = $tampil['approval'];
                                            if ($approval == 0) {
                                                $status = 'Menunggu Approval Staff';
                                            } else if ($approval == 1) {
                                                $status = 'Menunggu Approval Kasie';
                                            } else if ($approval == 2) {
                                                $status = 'Menunggu Approval DeptHead';
                                            } else if ($approval == 3) {
                                                $status = 'Menunggu Approval DivHead';
                                            } else if ($approval == 4) {
                                                $status = 'Menunggu Approval COO';
                                            } else if ($approval == 5) {
                                                $status = "<p style='color:green'> SKD Anda Sudah Disetujui </p>";
                                            } else if ($approval == 10) {
                                                $status = "<p style='color:red'> SKD Anda Ditolak </p>";
                                            }
                                        ?>

                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $tampil['id']; ?></td>
                                                <td><?= date('d F Y', strtotime($tampil["date_req"])); ?></td>
                                                <td><?= $tampil['nrp']; ?></td>
                                                <td><?= $tampil['nama']; ?></td>
                                                <td><?= $tampil['seksi']; ?></td>
                                                <td><?= $tampil['jenis_perawatan']; ?></td>
                                                <td><?= date('d F Y', strtotime($tampil["tanggal_mulai"])); ?></td>
                                                <td><?= date('d F Y', strtotime($tampil["tanggal_selesai"])); ?></td>
                                                <td class="text-center"><?= $tampil['jumlah_hari']; ?></td>
                                                <td><?= $tampil['nama_dokter']; ?></td>
                                                <td><img src="../../administrasi/lampiran/<?= $tampil['lampiran']; ?>" style="max-width:100px; max-height:100px"></td>
                                                <td><?php echo $status ?></td>
                                                <td style="text-align: center;"><a href='index.php?kode=<?php echo $tampil['id'] ?>&req=<?php echo $tampil['role'] ?>'><i class="btn fa-solid fa-check" style="background-color:green; color: white; height: 30px;" onclick="return confirm('Yakin Untuk Mengizinkan?');"></i></a> </td>
                                                <td style="text-align: center;"><a onclick="triggerModal('<?= $tampil['id'] ?>', '<?= $tampil['role'] ?>')"><i class="btn fa-solid fa-x" style="background-color:red; color: white; height: 30px;"></i></a></td>
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                    <script>
                                        $(document).ready(function() {
                                            $('#datatablesSimple').DataTable({
                                                scrollX: true,
                                            });
                                        });
                                    </script>


                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Modal -->
            <div class="modal fade" id="modalReject" tabindex="-1" role="dialog" aria-labelledby="modalReject" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form method="POST" id="formReject" action="">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tolak Pengajuan SKD</h5>
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

        </div>
    </div>




    </div><!-- End of Content wrapper -->
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
    <script>
        const triggerModal = (id, role) => {
            $('#modalReject').modal('toggle');
            $('#formReject').attr('action', 'index.php?kodee=' + id + '&req=' + role + '');
        }

        $('#close').on('click', function() {
            $('#modalReject').modal('hide');
        });
    </script>

</body>

</html>

<?php
//notif

function sendMessage()
{
    $appnotif = "$_SESSION[role]" + 1;
    $nama = $_SESSION['nama'];
    $seksi = $_SESSION['seksi'];

    $content = array(
        "en" => "Terdapat Permintaan SKD"
    );

    $heading = array(
        "en" => "SMART-KANRI"
    );

    $filters = "";

    if ($_SESSION['role'] == '0') {
        $filters = array(array("field" => "tag", "key" => "role", "relation" => "=", "value" => $appnotif), array("operator" => "AND"), array("field" => "tag", "key" => "seksi", "relation" => "=", "value" => $_SESSION['seksi']));
    } else if ($_SESSION['role'] == '1') {
        $filters = array(array("field" => "tag", "key" => "role", "relation" => "=", "value" => $appnotif), array("operator" => "AND"), array("field" => "tag", "key" => "departemen", "relation" => "=", "value" => $_SESSION['departemen']));
    } else if ($_SESSION['role'] == '2') {
        $filters = array(array("field" => "tag", "key" => "role", "relation" => "=", "value" => $appnotif), array("operator" => "AND"), array("field" => "tag", "key" => "divisi", "relation" => "=", "value" => $_SESSION['divisi']));
    } else if ($_SESSION['role'] == '3') {
        $filters = array(array("field" => "tag", "key" => "role", "relation" => "=", "value" => $appnotif), array("operator" => "AND"), array("field" => "tag", "key" => "divisi", "relation" => "=", "value" => $_SESSION['divisi']));
    }

    $fields = array(
        'app_id' => "91e90f0f-7547-47aa-9f8e-7809c28e3d7d",
        'contents' => $content,
        'included_segments' => array('Subscribed Users'),
        'headings' => $heading,
        'filters' => $filters
    );

    $fields = json_encode($fields);
    print("\nJSON sent:\n");
    print($fields);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Basic OWJhZGZkNjEtZDc2OS00ZGNkLTk5ZGUtNTdiNzk4YWEyM2Nj'
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

// $response = sendMessage(); // 1
// $return["allresponses"] = $response; // 2
// $return = json_encode($return); // 3 baris buat kirim notif

//alert
$alert = "<script>    
Swal.fire({
    title: 'Permintaan SKD Berhasil Disetujui!',
    icon: 'success',
    showCancelButton: false,
    allowOutsideClick : false,
    confirmButtonColor: '#3085d6',
    confirmButtonText: 'OK'
  }).then((result) => {
    if (result.isConfirmed) {
      location = '../suratdokter'
    }
  })

</script>";

include "../../../../koneksi.php";

$from = $_SESSION['role'];
$numprove = $from + 1;

if (isset($_GET['kode'])) {

    if ($_GET['req'] == 0) {
        if ($_SESSION['role'] == 2) {
            mysqli_query($conn, "UPDATE suratdokter SET approval=5, last_approval=(NOW()) WHERE id='$_GET[kode]'");
            $response = sendMessage(); // 1
            $return["allresponses"] = $response; // 2
            $return = json_encode($return); // 3 baris buat kirim notif
            echo "$alert";
        } else {
            mysqli_query($conn, "UPDATE suratdokter SET approval='$numprove', last_approval=(NOW()) WHERE id='$_GET[kode]'");
            $response = sendMessage(); // 1
            $return["allresponses"] = $response; // 2
            $return = json_encode($return); // 3 baris buat kirim notif
            echo "$alert";
        }
    } else if ($_GET['req'] == 1) {
        if ($_SESSION['role'] == 3) {
            mysqli_query($conn, "UPDATE suratdokter SET approval=5, last_approval=(NOW()) WHERE id='$_GET[kode]'");
            $response = sendMessage(); // 1
            $return["allresponses"] = $response; // 2
            $return = json_encode($return); // 3 baris buat kirim notif
            echo "$alert";
        } else {
            mysqli_query($conn, "UPDATE suratdokter SET approval='$numprove', last_approval=(NOW()) WHERE id='$_GET[kode]'");
            $response = sendMessage(); // 1
            $return["allresponses"] = $response; // 2
            $return = json_encode($return); // 3 baris buat kirim notif
            echo "$alert";
        }
    } else if ($_GET['req'] == 2) {
        if ($_SESSION['role'] == 3) {
            mysqli_query($conn, "UPDATE suratdokter SET approval=5, last_approval=(NOW()) WHERE id='$_GET[kode]'");
            $response = sendMessage(); // 1
            $return["allresponses"] = $response; // 2
            $return = json_encode($return); // 3 baris buat kirim notif
            echo "$alert";
        } else {
            mysqli_query($conn, "UPDATE suratdokter SET approval='$numprove', last_approval=(NOW()) WHERE id='$_GET[kode]'");
            $response = sendMessage(); // 1
            $return["allresponses"] = $response; // 2
            $return = json_encode($return); // 3 baris buat kirim notif
            echo "$alert";
        }
    } else if ($_GET['req'] == 3) {
        mysqli_query($conn, "UPDATE suratdokter SET approval=5, last_approval=(NOW()) WHERE id='$_GET[kode]'");
        $response = sendMessage(); // 1
        $return["allresponses"] = $response; // 2
        $return = json_encode($return); // 3 baris buat kirim notif
        echo "$alert";
    } else {
        mysqli_query($conn, "UPDATE suratdokter SET approval='$numprove', last_approval=(NOW()) WHERE id='$_GET[kode]'");
        $response = sendMessage(); // 1
        $return["allresponses"] = $response; // 2
        $return = json_encode($return); // 3 baris buat kirim notif
        echo "$alert";
    }
}

?>

<?php
include "../../../../koneksi.php";
if (isset($_POST['tolak'])) {

    mysqli_query($conn, "UPDATE suratdokter SET approval=10, last_approval=(NOW()), komentar='$_POST[komentar]' WHERE id='$_GET[kodee]'");
    echo "<script>    
        Swal.fire({
            title: 'Permintaan SKD Berhasil Ditolak!',
            icon: 'error',
            showCancelButton: false,
            allowOutsideClick : false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
          }).then((result) => {
            if (result.isConfirmed) {
              location = '../suratdokter'
            }
          })

        </script>";

    // echo "<script>alert('CUTI BESAR.!!');
    // document.location.href='../cuti';</script>";
} ?>