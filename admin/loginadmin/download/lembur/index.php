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

    <title>Cuti | Download</title>

    <link href="../../../../asset/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,600;1,100&display=swap" rel="stylesheet">
    <link href="../../../../asset/style/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../../../asset/style/css/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../../../asset/img/logo-mini.png" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
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

                    <a class="nav-link" href="../../../loginadmin">
                        <i class="fas fa-fw fa-home"></i>
                        <span>Beranda</span>
                    </a>

                    <hr class="sidebar-divider my-0">
                    <a class="nav-link" href="../../absensi.php">
                        <i class="fa-solid fa-clipboard-user"></i>
                        <span>Absensi</span>
                    </a>
                    <hr class="sidebar-divider my-0">

                    <a class="nav-link" href="../../karyawan/">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Karyawan</span></a>

                    <hr class="sidebar-divider my-0">
                </li>
                <li class="nav-item">

                    <hr class="sidebar-divider my-0">

                    <a class="nav-link" href="../../medical/">
                        <i class="fa-solid fa-book-medical"></i>
                        <span>Claim Medical</span></a>

                    <hr class="sidebar-divider my-0">

                    <hr class="sidebar-divider my-0">

                    <a class="nav-link" href="../../masukpabrik/">
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
                            <li><a class="dropdown-item" href="../cuti/">Pengajuan CUTI</a></li>
                            <li><a class="dropdown-item" href="../absensi/">Keterangan Absensi</a></li>
                            <li><a class="dropdown-item" href="../imp/">Izin Meninggalkan Pekerjaan</a></li>
                            <li><a class="dropdown-item" href="../dispensasi/">Dispensasi</a></li>
                            <li><a class="dropdown-item" href="../dinasluar/">Izin Dinas Luar</a></li>
                            <li><a class="dropdown-item" href="../lembur/">Lembur</a></li>
                            <li><a class="dropdown-item" href="../ClaimMedical/">Claim Medical</a></li>
                            <li><a class="dropdown-item" href="../suratdokter/">Surat Keterangan Dokter</a></li>
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
                    <h3>L E M B U R</h3>
                    <div class="row mt-2">
                        <div class="col card-body tumpul bg-light-biru text-white" style="background-color: #de9ecc;">
                            <i class="fas fa-fw fa-lightbulb"></i>
                            <span>B e r i k u t &ensp; A d a l a h &ensp; R i w a y a t &ensp; L e m b u r </span>
                        </div>
                        <div class="row">
                            <div class="col-12 m-2 mt-3 card tumpul table-borderless">
                                <h5 class="">Upload lemburan sudah diproses</h5>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <input type="file" name="excel_lembur" style="width: 200px;">
                                    <input type="submit" name="input" value="Upload" class="btn btn-sm btn-primary">
                                    <input type="submit" name="DeleteDatalembur" value="Delete" onclick="return confirm('Yakin Untuk Hapus.?');" class="btn btn-sm btn-danger">
                                </form>
                                <p>*) File Wajib Berextension .xls</p>
                            </div>
                        </div>
                        <div class="row col-12 m-2">
                            <div class="ml-auto text-right justify-content-end align-items-right pr-0">
                                <button class="btn btn-success" id="button_export" style="font-size: small;"><i class="fa fa-download fa-sm fa-fw "></i> DOWNLOAD</button>
                            </div>
                        </div>

                        <!-- <button onclick="exportTableToExcel('datatablesSimple')">Export Table Data To Excel File</button> -->

                        <div class="col-12 card tumpul table-borderless">
                            <div class="row">
                                <div class="col-12 mt-2">
                                    <h6 class="mb-2">Tampilkan Berdasarkan Tanggal Approval :</h6>
                                    <form action="" method="GET">
                                        <label for="start">Dari :</label>
                                        <input type="date" name="start" id="start" value="<?php if (isset($_GET['start'])) echo $_GET['start'] ?>">
                                        <label for="start">Sampai :</label>
                                        <input type="date" name="end" id="end" value="<?php if (isset($_GET['end'])) echo $_GET['end'] ?>">
                                        <div class="row col-3">
                                            <input type="submit" class="btn btn-secondary" name="filter" value="filter" id="filter">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- <table id="datatablesSimple" border="1" class="table table-hover table-responsive border" style="color:black"> -->
                            <table id="datatablesSimple" border="1" class="table table-hover table-responsive border w-100 d-block d-md-table" style="color:black">
                                <thead class="table-info">
                                    <tr>
                                        <th>No</th>
                                        <th>ID </th>
                                        <th>Tanggal Request</th>
                                        <th>NRP</th>
                                        <th>Nama</th>
                                        <th>Seksi</th>
                                        <th>Departemen</th>
                                        <th>Divisi</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Shift</th>
                                        <th>Jam Masuk</th>
                                        <th>Jam Pulang</th>
                                        <th>Keterangan</th>
                                        <th>Status</th>
                                        <th>Tanggal Approve</th>
                                        <th>Komentar</th>
                                    </tr>
                                </thead>
                                <tbody class="table-light">
                                    <?php
                                    include "../../../../koneksi.php";
                                    $no = 1;
                                    error_reporting(1);
                                    if (isset($_GET['filter'])) {
                                        $start = $_GET['start'];
                                        $end = $_GET['end'];
                                        //$query = "SELECT * FROM cuti WHERE approval=5 AND date_format(date_req,'%m')=date_format(now(),'%m');";
                                        $query = "SELECT * FROM lembur WHERE approval=5 AND last_approval BETWEEN '$start' AND '$end' ORDER BY last_approval ASC;";
                                        $ambildata = mysqli_query($conn, $query);

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
                                                $status = "<p style='color:blue'> Claim Lembur Anda Sudah Disetujui </p>";
                                            } else if ($approval == 10) {
                                                $status = "<p style='color:red'> Claim Lembur Anda Ditolak </p>";
                                            }
                                    ?>

                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td><?= $tampil['id']; ?></td>
                                                <td><?php echo date('d F Y', strtotime($tampil["date_req"])); ?></td>
                                                <td><?= $tampil['nrp']; ?></td>
                                                <td><?= $tampil['nama']; ?></td>
                                                <td><?= $tampil['seksi']; ?></td>
                                                <td><?= $tampil['departemen']; ?></td>
                                                <td><?= $tampil['divisi']; ?></td>
                                                <td><?php echo date('d F Y', strtotime($tampil["tanggal_masuk"])); ?></td>
                                                <td><?= $tampil['shift']; ?></td>
                                                <td><?= $tampil['jam_masuk']; ?></td>
                                                <td><?= $tampil['jam_pulang']; ?></td>
                                                <td><?= $tampil['keterangan']; ?></td>
                                                <td><?= $status ?> </td>
                                                <td><?php echo date('d F Y', strtotime($tampil["last_approval"])); ?></td>
                                                <td><?= $tampil['komentar']; ?></td>
                                            </tr>
                                    <?php
                                            $no++;
                                        }
                                    }
                                    ?>
                                </tbody>

                                <script>
                                    var button = document.getElementById('button_export');

                                    button.addEventListener('click', function() {
                                        var start = document.getElementById("start").value;
                                        var end = document.getElementById("end").value;
                                        window.location.href = "https://smartsyst.my.id/permit/admin/loginadmin/download/lembur/download.php?start=" + start + "&end=" + end;
                                    });

                                    // console.log(start);
                                    // console.log(end);
                                </script>
                            </table>
                        </div>



                        <div class="col-12 card tumpul table-borderless  mt-3 p-2">
                            <h3 class="font-weight-bold mt-3 text-center">LAPORAN LEMBUR YANG SUDAH DI PROSES ( <?= date("F - Y") ?> )</h3>
                            <table id="TableCuti" class="table table-hover table-responsive border w-100 d-block d-md-table" style="color:black">
                                <thead class="table-info ">
                                    <tr>
                                        <th>NO</th>
                                        <th>NPK </th>
                                        <th>NAMA</th>
                                        <th>TIPE SPL</th>
                                        <th>TANGGAL MULAI</th>
                                        <th>JAM MULAI</th>
                                        <th>TANGGAL SELESAI</th>
                                        <th>JAM SELESAI</th>
                                        <th>Break_1</th>
                                        <th>Break_2</th>
                                        <th>total_lembur</th>
                                        <th>Update</th>
                                       
                                    </tr>
                                </thead>
                                <tbody class="table-light">
                                    <?php
                                    include "../../koneksi.php";
                                    $no = 1;
                                    $sql = "SELECT * FROM report_lembur ;";
                                    $getquery = mysqli_query($conn, $sql);

                                    while ($tampil = mysqli_fetch_array($getquery)) {
                                    ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $tampil['nrp']; ?></td>
                                            <td><?= $tampil['nama']; ?></td>
                                            <td><?= $tampil['tipe_spl']; ?></td>
                                            <td><?= date('d F Y ', strtotime($tampil["tanggal_mulai"])); ?></td>
                                            <td><?= date('H : i : s ', strtotime($tampil["jam_mulai"])); ?></td>
                                            <td><?= date('d F Y ', strtotime($tampil["tanggal_selesai"])); ?></td>
                                            <td><?= date('H : i : s ', strtotime($tampil["jam_selesai"])); ?></td>
                                            <td><?= $tampil['break_1']; ?></td>
                                            <td><?= $tampil['break_2']; ?></td>
                                           <td><?= date('H : i : s ', strtotime($tampil["last_update"])); ?></td>
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
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

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
    </script>

</body>

</html>

<?php
include "../../../../koneksi.php";
include "../../excel_reader2.php";
error_reporting(0); //tambahkan ini
if (isset($_POST['input'])) {

    // upload file xls
    $target = basename($_FILES['excel_lembur']['name']);
    move_uploaded_file($_FILES['excel_lembur']['tmp_name'], $target);

    // beri permisi agar file xls dapat di baca
    chmod($_FILES['excel_lembur']['name'], 0777);

    // mengambil isi file xls
    $data = new Spreadsheet_Excel_Reader($_FILES['excel_lembur']['name'], false);
    // menghitung jumlah baris data yang ada
    $jumlah_baris = $data->rowcount($sheet_index = 0);

    // jumlah default data yang berhasil di import
    $berhasil = 0;
    for ($i = 2; $i <= $jumlah_baris; $i++) {

        // menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
        $nrp     = $data->val($i, 1);
        $nama   = $data->val($i, 2);
        $tipe_spl  = $data->val($i, 3);
        $tanggal_mulai  = $data->val($i, 4);
        $jam_mulai  = $data->val($i, 5);
        $tanggal_selesai  = $data->val($i, 6);
        $jam_selesai  = $data->val($i, 7);
        $break_1  = $data->val($i, 8);
        $break_2  = $data->val($i, 9);
        $total_lembur  = $data->val($i, 10);

        if ($nrp != "" && $nama != "" && $tipe_spl != "" && $tanggal_mulai != "" && $jam_mulai != "" && $tanggal_selesai != "" && $jam_selesai != "") {
            // input data ke database (table data_pegawai)
            mysqli_query($conn, "INSERT into report_lembur values('','$nrp','$nama','$tipe_spl','$tanggal_mulai','$jam_mulai','$tanggal_selesai','$jam_selesai','$break_1','$break_2','$total_lembur',(NOW()))");
            $berhasil++;
            echo "<script>    
            Swal.fire({
                title: 'Berhasil Di Upload!',
                icon: 'success',
                showCancelButton: false,
                allowOutsideClick : false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then((result) => {
                if (result.isConfirmed) {
                  location = '../lembur/'
                }
              })
            
            </script>";
        }
    }

    // hapus kembali file .xls yang di upload tadi
    unlink($_FILES['excel_lembur']['name']);
}


if (isset($_POST['DeleteDatalembur'])) {
    $sql = mysqli_query($conn, "TRUNCATE TABLE `smartsys_permit`.`report_lembur`;");
    echo "<script>    
            Swal.fire({
                title: 'Data Berhasil Dikosongkan',
                icon: 'info',
                showCancelButton: false,
                allowOutsideClick : false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then((result) => {
                if (result.isConfirmed) {
                  location = '../lembur/'
                }
              })
            
            </script>";
}

?>