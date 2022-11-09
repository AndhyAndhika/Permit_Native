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

    <title>Ruang Meeting| Fasilitas</title>

    <link href="../../../../asset/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,600;1,100&display=swap" rel="stylesheet">
    <link href="../../../../asset/style/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../../../asset/style/css/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../../../asset/img/logo-mini.png" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.css' rel='stylesheet' />


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

                        <ul class="dropdown-menu ">
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
                            <li><a class="dropdown-item" href="../../../indexa.html">Claim Medical</a></li>
                            <!--<li><a class="dropdown-item" href="../ClaimMedical">Claim Medical</a></li>-->
                            <li><a class="dropdown-item" href="../Rmeeting">Ruang Meeting</a></li>
                            <li><a class="dropdown-item" href="../Seragam">Seragam</a></li>
                        </ul>
                    </div>

                    <hr class="sidebar-divider my-0">

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-fw fa-file"></i>
                        <span>SOP</span></a>
                </li>

                <hr class="sidebar-divider my-0">

                <li class="nav-item">
                    <a class="nav-link" href="#">
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

                    <h3>R u a n g &ensp; M e e t i n g </h3>
                    <div class="card p-4">
                        <div class="row">
                            <div class="col col-12 ">
                                <button type="button" class="btn bg-warning my-3 mr-3 text-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    + Pinjam Ruangan
                                </button>
                            </div>
                            
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                              <li class="nav-item" role="presentation">
                                <button class="nav-link active fw-bold" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">KALENDER</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button class="nav-link fw-bold" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">PENGAJUAN SAYA</button>
                              </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                  <div class="row"> <div class="col col-12 ">
                                <div id="calendar"></div>
                                 <p class="mt-2" style="margin-bottom: 1px;">Keterangan :</p>
                                <table border="1">
                                    <tr>
                                        <td>Warna</td>
                                        <td>Ruangan</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #0000FF;"></td>
                                        <td>NUSA 1</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #00FF00;"></td>
                                        <td>NUSA 2</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #9400D3;"></td>
                                        <td>NUSA 3</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #FFFF00;"></td>
                                        <td>RUANG TRAINING 1</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #FF7F00;"></td>
                                        <td>RUANG TRAINING 2</td>
                                    </tr>
                                </table>
                            </div></div>
                              </div>
                              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                  <div class="row">
                                          <div class="col col-12">
                                               <table id="datatablesSimple" class="table table-hover table-responsive border " style="color:black">
                                <thead class="table-info ">
                                    <tr>
                                        <th>No</th>
                                        <th>NAMA</th>
                                        <th>MULAI</th>
                                        <th>SELESAI</th>
                                        <th>RUANGAN</th>
                                        <th>AGENDA</th>
                                        <th>STATUS</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody class="table-light">
                                    <?php
                                    include "../../../../koneksi.php";
                                    $no = 1;
                                    $sql = "SELECT * FROM rmeeting WHERE seksi = '$_SESSION[seksi]' ORDER BY date_req DESC;";
                                    $getquery = mysqli_query($conn, $sql);
                                    while ($tampil = mysqli_fetch_array($getquery)) {
                                    ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $tampil['nama']; ?></td>
                                            <td><?= date('d F Y H:i:s', strtotime($tampil["mulai"])); ?></td>
                                            <td><?= date('d F Y H:i:s', strtotime($tampil["selesai"])); ?></td>
                                            <td><?= $tampil['ruangan']; ?></td>
                                            <td><?= $tampil['keterangan']; ?></td>
                                            <td><?= $tampil['status']; ?></td>
                                            <td><a href='index.php?kode=<?= $tampil['id'] ?>'><i class="btn fa-solid fa-x" style="background-color:red; color: white; height: 30px;" onclick="return confirm('Yakin Untuk Membatalkan?');"></i></a></td>
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
                            
                            <form action="" method="POST">
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                                        <div class="modal-content ">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel ">Form Ruang Meeting</h5>
                                                <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card-body">
                                                    <div class="form-group mt-4">
                                                        <div class="form-label">Mulai Menggunakan</div>
                                                        <input type="datetime-local" class="form-control" name="mulai" id="mulai" required>
                                                    </div>
                                                    <div class="form-group mt-4">
                                                        <div class="form-label">Selesai Menggunakan</div>
                                                        <input type="datetime-local" class="form-control" name="selesai" id="selesai" required>
                                                    </div>
                                                    <div class="form-group mt-4">
                                                        <div class="form-label">Ruangan</div>
                                                        <select class="form-control" name="ruangan" id="ruangan" required>
                                                            <option class="dropdown-item form-control" name="ruangan" id="NUSA 1" value="NUSA 1">NUSA 1</option>
                                                            <option class="dropdown-item form-control" name="ruangan" id="NUSA 2" value="NUSA 2">NUSA 2</option>
                                                            <option class="dropdown-item form-control" name="ruangan" id="NUSA 3" value="NUSA 3">NUSA 3</option>
                                                            <option class="dropdown-item form-control" name="ruangan" id="RUANG TRAINING 1" value="RUANG TRAINING 1">RUANG TRAINING 1</option>
                                                            <option class="dropdown-item form-control" name="ruangan" id="RUANG TRAINING 2" value="RUANG TRAINING 2">RUANG TRAINING 2</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-label">Keterangan Kegiatan</div>
                                                        <textarea name="keterangan" class="form-control" id="keterangan" cols="30" rows="2" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer pr-3">
                                                <button type="button" class="btn  btn-danger" data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>

                            <!-- <div class="alert alert-warning" role="alert">
                                    <h4>Form Penggunaan Ruangan</h4>
                                </div>
                                <form action="" method="POST">

                                </form> -->
                            <div class="col col-12 col-lg-3 mt-4 mt-lg-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->
        </div><!-- End of Content wrapper -->
    </div><!-- End of Page Wrapper -->

    <!-- kalender -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.min.js'></script>
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.min.css' rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
    <script src='https://unpkg.com/tooltip.js/dist/umd/tooltip.min.js'></script>
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

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <!-- kalender js -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                eventClick: function(info) {
                    var eventObj = info.event;
                    Swal.fire({
                        title: eventObj.title,
                        text: eventObj.id + eventObj.classNames,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                },
                // initialDate: '2022-08-15',
                //initialView: 'timeGridDay',
                //initialView: 'timeGridWeek',
                initialView: 'timeGridFourDay',

                slotMinTime: "07:00:00",
                slotMaxTime: "17:00:00",
                contentHeight: "auto",
                headerToolbar: {
                    left: 'prev,next',
                    center: 'title',
                    right: 'timeGridDay,timeGridFourDay'
                },
                views: {
                    timeGridFourDay: {

                        type: 'timeGrid',
                        duration: {
                            days: 5,
                        },
                        buttonText: '5 day'
                    }
                },
                events: [
                    <?php
                    include "../../../../koneksi.php";
                    $getquery = mysqli_query($conn, "SELECT * FROM rmeeting WHERE status='LANJUT'");
                    while ($t = mysqli_fetch_array($getquery)) {
                        if( $t[color] == '#0000FF' || $t[color] == '#9400D3' || $t[color] == '#9400D3' ){
                                $colora = "#FFFFFF";   
                            }else{ $colora = "#000000"; }
                    ?> {
                            title: '<?= $t['ruangan']; ?>',
                            id: ' ( <?= $t['nama']; ?> -  <?= $t['seksi']; ?> ) ',
                            classNames: '<?= $t['keterangan']; ?>' ,
                            start: '<?= $t['mulai'];  ?>',
                            end: '<?= $t['selesai'];  ?>',
                            color: '<?= $t['color'];  ?>',
                            textColor: '<?= $colora;  ?>',
                            borderColor : '#000000',
                            

                        },
                    <?php
                    }
                    ?>
                ],
            });

            calendar.render();
        });
    </script>
</body>

</html>

<?php

include "../../../../koneksi.php";

// 1.Kode uniq untuk cuti
$code = mysqli_query($conn, "SELECT max(id) AS maxID FROM rmeeting WHERE date_req >= CURRENT_DATE");
$data = mysqli_fetch_array($code);

$kode = substr($data['maxID'], 12);
$ed = 'RMET';
$date = date("dmY");

$kode++;

$kodeauto = $ed . $date . sprintf("%03s", $kode);

// 2. insert 
if (isset($_POST['submit'])) {
    $keterangan   = htmlspecialchars($_POST['keterangan']);
    $mulai      = htmlspecialchars($_POST['mulai']);;
    $selesai    = htmlspecialchars($_POST['selesai']);;
    $ruangan    = htmlspecialchars($_POST['ruangan']);;
    
    if( $ruangan == 'NUSA 1'){
    	$color = '#0000FF'; //BIRU
    } else if ($ruangan == 'NUSA 2'){
    	$color = '#00FF00'; //HIJAU
    } else if ($ruangan == 'NUSA 3'){
    	$color = '#9400D3'; //UNGU
    } else if($ruangan == 'RUANG TRAINING 1'){
    	$color = '#FFFF00'; //KUNING
    } else if($ruangan == 'RUANG TRAINING 2'){
    	$color = '#FF7F00'; //BIRU
    }

    $sql = mysqli_query($conn, "INSERT INTO rmeeting VALUES ('$kodeauto',(NOW()),'$_SESSION[nama]','$_SESSION[seksi]','$_SESSION[departemen]','$_SESSION[divisi]','$keterangan','$ruangan','$mulai','$selesai','$color','LANJUT')");
    echo "<script>    
            Swal.fire({
                title: 'Peminjaman Ruangan Untuk Meeting Berhasil Dibuat',
                icon: 'success',
                showCancelButton: false,
                allowOutsideClick : false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                location = '../Rmeeting/'
                }})</script>";
}

if (isset($_GET['kode'])){
    $sqli = mysqli_query($conn, "UPDATE rmeeting SET status='BATAL' WHERE id='$_GET[kode]'");
    echo "<script>    
            Swal.fire({
                title: 'Peminjaman Ruangan Untuk Meeting Berhasil Dibatalkan',
                icon: 'success',
                showCancelButton: false,
                allowOutsideClick : false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                location = '../Rmeeting/'
                }})</script>"; 
}

?>