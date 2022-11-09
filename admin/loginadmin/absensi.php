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
                        <div class="row">

                            <div class="col-3 card tumpul table-borderless mt-3 p-2">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="">Upload REPORT ABSENSI MINGGUAN</h5>
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            <input type="file" name="excel_ta" style="width: 200px;">
                                            <input type="submit" name="input" value="Upload" class="btn btn-sm btn-primary">
                                            <input type="submit" name="DeleteDataAll" value="Delete" onclick="return confirm('Yakin Untuk Hapus.?');" class="btn btn-sm btn-danger">
                                        </form>
                                        <p>*) File Wajib Berextension .xls</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6"></div>
                            <div class="col-3 card tumpul table-borderless mt-3 p-2">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="">Upload REPORT ABSENSI TAHUNAN</h5>
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            <input type="file" name="excel_absen" style="width: 200px;">
                                            <input type="submit" name="report" value="Upload" class="btn btn-sm btn-primary">
                                            <input type="submit" name="DeleteDataAllAbsen" value="Delete Report" onclick="return confirm('Yakin Untuk Hapus Report Tahunan.?');" class="btn btn-sm btn-danger">
                                            <p>*) File Wajib Berextension .xls</p>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 card tumpul table-borderless  mt-3 p-2">
                                <h3 class="font-weight-bold"><u>Absensi</u></h3>
                                <form action="" method="GET">
                                    <div class="row mb-4">
                                        <div class="col-12"> <label for="start">Dari :</label>
                                            <input type="date" name="start" id="start" value="<?php if (isset($_GET['start'])) echo $_GET['start'] ?>">
                                            <label for="start">Sampai :</label>
                                            <input type="date" name="end" id="end" value="<?php if (isset($_GET['end'])) echo $_GET['end'] ?>">
                                        </div>
                                        <div class="col-12">
                                            <input type="submit" class="btn btn-secondary" name="filter" value="filter" id="filter">
                                            <input type="submit" class="btn btn-danger" name="deletefilter" value="Delete" id="deletefilter">
                                        </div>
                                    </div>
                                </form>
                                <table id="TableCuti" class="table table-hover table-responsive border w-100 d-block d-md-table" style="color:black">
                                    <thead class="table-info ">
                                        <tr>
                                            <th>NO</th>
                                            <th>NRP</th>
                                            <th>NAMA</th>
                                            <th>TANGGAL</th>
                                            <th>ABSEN</th>
                                            <th>SHIFT</th>
                                            <th>JAM MASUK</th>
                                            <th>JAM PULANG</th>
                                            <th>TERLAMBAT</th>
                                            <th>PULANG CEPAT</th>
                                            <th>UPDATE</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-light">
                                        <?php
                                        include "../../koneksi.php";
                                        $noa = 1;
                                        if (isset($_GET['filter'])) {
                                            $start = $_GET['start'];
                                            $end = $_GET['end'];
                                            $sql = "SELECT * FROM data_ta WHERE tanggal_ta BETWEEN '$start' AND '$end' ORDER BY tanggal_ta ASC;";
                                            $getquery = mysqli_query($conn, $sql);

                                            while ($tampil = mysqli_fetch_array($getquery)) {

                                        ?>
                                                <tr>
                                                    <td><?= $noa ?></td>
                                                    <td><?= $tampil['nrp']; ?></td>
                                                    <td><?= $tampil['nama']; ?></td>
                                                    <td><?= date('d F Y ', strtotime($tampil["tanggal_ta"])); ?></td>
                                                    <td><?= $tampil['kode']; ?></td>
                                                    <td><?= $tampil['shift']; ?></td>
                                                    <td><?= $tampil['jam_masuk']; ?></td>
                                                    <td><?= $tampil['jam_pulang']; ?></td>
                                                    <td><?= $tampil['terlambat']; ?></td>
                                                    <td><?= $tampil['pulang_cepat']; ?></td>
                                                    <td><?= date('d F Y - H:i:s', strtotime($tampil["data_masuk"])); ?></td>
                                            <?php
                                            }
                                            $noa++;
                                        }
                                            ?>


                                    </tbody>
                                </table>
                            </div>

                            <!-- REPORT TAHUNAN -->

                            <div class="col-12 card tumpul table-borderless  mt-3 p-2">
                                <h3 class="font-weight-bold"><u>Reporting Absensi Di <?= date("Y") ?></u></h3>
                                <table id="TableDinlu" class="table table-hover table-responsive border w-100 d-block d-md-table" style="color:black">
                                    <thead class="table-info ">
                                        <tr>
                                            <th>NO</th>
                                            <th>NRP</th>
                                            <th>NAMA</th>
                                            <th>CT</th>
                                            <th>CP</th>
                                            <th>LO</th>
                                            <th>CU</th>
                                            <th>SK</th>
                                            <th>TA</th>
                                            <th>DT</th>
                                            <th>TP</th>
                                            <th>MP</th>
                                            <th>TG</th>
                                            <th>RI</th>
                                            <th>TL</th>
                                            <th>PC</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-light">
                                        <?php
                                        include "../../koneksi.php";
                                        $no = 1;
                                        $sql = "SELECT * FROM report_absensi ;";
                                        $getquery = mysqli_query($conn, $sql);

                                        while ($tampil = mysqli_fetch_array($getquery)) {
                                        ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $tampil['nrp']; ?></td>
                                                <td><?= $tampil['nama']; ?></td>
                                                <td><?= $tampil['CT']; ?></td>
                                                <td><?= $tampil['CP']; ?></td>
                                                <td><?= $tampil['LO']; ?></td>
                                                <td><?= $tampil['CU']; ?></td>
                                                <td><?= $tampil['SK']; ?></td>
                                                <td><?= $tampil['TA']; ?></td>
                                                <td><?= $tampil['DT']; ?></td>
                                                <td><?= $tampil['TP']; ?></td>
                                                <td><?= $tampil['MP']; ?></td>
                                                <td><?= $tampil['TG']; ?></td>
                                                <td><?= $tampil['RI']; ?></td>
                                                <td><?= $tampil['TL']; ?></td>
                                                <td><?= $tampil['PC']; ?></td>
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- REPORT TAHUNAN -->
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
                </script>
    </body>


</html>
<?php
}
include "../../koneksi.php";
include "excel_reader2.php";
error_reporting(0); //tambahkan ini
if (isset($_POST['input'])) {

    // upload file xls
    $target = basename($_FILES['excel_ta']['name']);
    move_uploaded_file($_FILES['excel_ta']['tmp_name'], $target);

    // beri permisi agar file xls dapat di baca
    chmod($_FILES['excel_ta']['name'], 0777);

    // mengambil isi file xls
    $data = new Spreadsheet_Excel_Reader($_FILES['excel_ta']['name'], false);
    // menghitung jumlah baris data yang ada
    $jumlah_baris = $data->rowcount($sheet_index = 0);

    // jumlah default data yang berhasil di import
    $berhasil = 0;
    for ($i = 2; $i <= $jumlah_baris; $i++) {

        // menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
        $nrp     = $data->val($i, 1);
        $nama   = $data->val($i, 2);
        $tanggal_ta  = $data->val($i, 3);
        $absen  = $data->val($i, 4);
        $shift  = $data->val($i, 5);
        $jam_masuk  = $data->val($i, 6);
        $jam_pulang  = $data->val($i, 7);
        $terlambat  = $data->val($i, 8);
        $pulang_cepat  = $data->val($i, 9);

        // if ($nrp != "" && $nama != "") {
        if ($nrp != "" && $nama != "" && $tanggal_ta != "") {
            // input data ke database (table data_pegawai)
            mysqli_query($conn, "INSERT into data_ta values('','$nrp','$nama','$tanggal_ta','$absen','$shift','$jam_masuk','$jam_pulang','$terlambat','$pulang_cepat',(NOW()))");
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
                  location = '../loginadmin/absensi.php'
                }
              })
            
            </script>";
        }
    }

    // hapus kembali file .xls yang di upload tadi
    unlink($_FILES['excel_ta']['name']);
}


if (isset($_POST['DeleteDataAll'])) {
    $sql = mysqli_query($conn, "TRUNCATE TABLE `data_ta`;");
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
                  location = '../loginadmin/absensi.php'
                }
              })
            
            </script>";
}

if (isset($_POST['report'])) {

    // upload file xls
    $target = basename($_FILES['excel_absen']['name']);
    move_uploaded_file($_FILES['excel_absen']['tmp_name'], $target);

    // beri permisi agar file xls dapat di baca
    chmod($_FILES['excel_absen']['name'], 0777);

    // mengambil isi file xls
    $data = new Spreadsheet_Excel_Reader($_FILES['excel_absen']['name'], false);
    // menghitung jumlah baris data yang ada
    $jumlah_baris = $data->rowcount($sheet_index = 0);

    // jumlah default data yang berhasil di import
    $berhasil = 0;
    for ($i = 2; $i <= $jumlah_baris; $i++) {

        // menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
        $nrp    = $data->val($i, 1);
        $nama   = $data->val($i, 2);
        $CT     = $data->val($i, 3);
        $CP     = $data->val($i, 4);
        $LO     = $data->val($i, 5);
        $CU     = $data->val($i, 6);
        $SK     = $data->val($i, 7);
        $TA     = $data->val($i, 8);
        $DT     = $data->val($i, 9);
        $TP     = $data->val($i, 10);
        $MP     = $data->val($i, 11);
        $TG     = $data->val($i, 12);
        $RI     = $data->val($i, 13);
        $TL     = $data->val($i, 14);
        $PC     = $data->val($i, 15);

        if ($nrp != "" && $nama != "" && $CT != "" && $CP != "" && $LO != "" && $CU != "" && $SK != "" && $TA != "" && $DT != "" && $TP != "" && $MP != "" && $TG != "" && $RI != "" && $TL != "" && $PC != "") {
            // input data ke database (table data_pegawai)
            mysqli_query($conn, "INSERT into report_absensi values('','$nrp','$nama','$CT','$CP','$LO','$CU','$SK','$TA','$DT','$TP','$MP','$TG','$RI','$TL','$PC')");
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
                  location = '../loginadmin/absensi.php'
                }
              })
            
            </script>";
        }
    }

    // hapus kembali file .xls yang di upload tadi
    unlink($_FILES['excel_absen']['name']);
}


if (isset($_POST['DeleteDataAllAbsen'])) {
    $sql = mysqli_query($conn, "TRUNCATE TABLE `smartsys_permit`.`report_absensi`;");
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
                  location = '../loginadmin/absensi.php'
                }
              })
            
            </script>";
}

if (isset($_GET['deletefilter'])) {
    $start = $_GET['start'];
    $end = $_GET['end'];
    $getquery = mysqli_query($conn, "DELETE FROM data_ta WHERE tanggal_ta BETWEEN '$start' AND '$end'");
    echo "<script>    
             Swal.fire({
           title: 'Data Berhasil Dihapus',
           icon: 'info',
           showCancelButton: false,
           allowOutsideClick : false,
           confirmButtonColor: '#3085d6',
           confirmButtonText: 'OK'
           }).then((result) => {
           if (result.isConfirmed) {
         location = '../loginadmin/absensi.php'
                                                }
                                              })
                                            
                                            </script>";
}
?>