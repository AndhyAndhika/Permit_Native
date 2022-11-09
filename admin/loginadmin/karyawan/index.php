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

    <title>Administrator | Karyawan</title>
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
                    <h3>D a t a &nbsp; K a r y a w a n </h3>
                    <div class="row mt-2">
                        <div class="col-12 card tumpul">
                            <div class="row">
                                <div class="col-5 m-2 ml-auto text-right justify-content-end align-items-right">
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropedit" style="font-size: small;"><i class="fa fa-plus fa-sm fa-fw "></i> Karyawan Baru</button>
                                </div>
                            </div>
                            <table id="datatablesSimple" class="table table-striped table-responsive w-100 d-block d-md-table" style="color:black; width:100%;">
                                <thead class="table-info ">
                                    <tr>
                                        <th class="text-center">NO</th>
                                        <th class="text-center">NAMA</th>
                                        <th class="text-center">NRP </th>
                                        <th class="text-center">JABATAN</th>
                                        <th class="text-center">SEKSI</th>
                                        <th class="text-center">DEPARTEMEN</th>
                                        <th class="text-center">DIVISI</th>
                                        <th class="text-center">STATUS</th>
                                        <th class="text-center">AKSI</th>

                                    </tr>
                                </thead>
                                <tbody class="table-light table-bordered">
                                    <?php
                                    include "../../../koneksi.php";
                                    $no = 1;
                                    $sql = "SELECT * FROM karyawan ;";
                                    $getquery = mysqli_query($conn, $sql);

                                    while ($tampil = mysqli_fetch_array($getquery)) {
                                        $q = $tampil['tanggal_lahir'];
                                        $w = $tampil["masuk_perusahaan"];
                                        $tanggal = date('d F Y - H : i', strtotime($tampil["tanggal_lahir"]));
                                        $masuk = date('d F Y - H : i', strtotime($tampil["masuk_perusahaan"]));
                                        if ($q == NULL || $w == NULL) {
                                            $tanggal_lahir = 'Belum Diinput';
                                            $masuk_perusahaan = 'Belum Diinput';
                                        } else {
                                            $tanggal_lahir = $tanggal;
                                            $masuk_perusahaan = $masuk;
                                        }
                                    ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?= $tampil['nama']; ?></td>
                                            <td><?= $tampil['nrp']; ?></td>
                                            <td><?= $tampil['jabatan']; ?></td>
                                            <td><?= $tampil['seksi']; ?></td>
                                            <td><?= $tampil['departemen']; ?></td>
                                            <td><?= $tampil['divisi']; ?></td>
                                            <td><?= $tampil['status']; ?></td>
                                            <td class="text-center"><a href="view?x=<?= $tampil['nrp']; ?>" class="fa-solid fa-eye btn btn-success"></a></td>
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
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="modal fade" id="staticBackdropedit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel ">Tambah Data Karyawan Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-body pt-0 pb-0">
                        <div class="row ">
                         <div class="col col-12"><sup class="text-danger">*</sup><p>Apabila tidak ada data harap diisikan "No Data" Jika bentuknya angka maka "0".</p></div>
                            <div class="col col-12 col-lg-6 ">
                                
                                <div class="row">
                                    <div class="col col-4  pt-2 mx-0 mt-1">NRP<sup class="text-danger">*</sup></div>
                                    <div class="col col-8  p-0 mt-3"><input type="number" id="nrp" class="form-control" name="nrp" required /></div>

                                    <div class="col col-4  pt-2 mx-0 mt-2">Nama<sup class="text-danger">*</sup></div>
                                    <div class="col col-8  p-0 mt-3"><input type="text" id="nama" class="form-control" name="nama" required /></div>
                                    
                                    <div class="col col-4  pt-2 mx-0 mt-2">Nama Istri<sup class="text-danger">*</sup></div>
                                    <div class="col col-8  p-0 mt-3"><input type="text" id="istri" class="form-control" name="istri" required /></div>
                                    
                                    <div class="col col-4  pt-2 mx-0 mt-2">Nama Anak 1<sup class="text-danger">*</sup></div>
                                    <div class="col col-8  p-0 mt-3"><input type="text" id="anak_1" class="form-control" name="anak_1" required /></div>
                                    
                                     <div class="col col-4  pt-2 mx-0 mt-2">Nama Anak 2<sup class="text-danger">*</sup></div>
                                    <div class="col col-8  p-0 mt-3"><input type="text" id="anak_2" class="form-control" name="anak_2" required /></div>
                                    
                                     <div class="col col-4  pt-2 mx-0 mt-2">Nama Anak 3<sup class="text-danger">*</sup></div>
                                    <div class="col col-8  p-0 mt-3"><input type="text" id="anak_3" class="form-control" name="anak_3" required /></div>

                                    <div class="col col-4  pt-2 mx-0 mt-2">Tgl Lahir<sup class="text-danger">*</sup></div>
                                    <div class="col col-8  p-0 mt-3"><input type="date" id="tanggal_lahir" class="form-control" name="tanggal_lahir" required /></div>

                                    <div class="col col-4  pt-2 mx-0 mt-2">Level<sup class="text-danger">*</sup></div>
                                    <div class="col col-8  p-0 mt-3">
                                        <select class="form-control" name="posisi" required>
                                            <option class="dropdown-item form-control" name="posisi" value=" " selected disabled="disabled">--Pilih--</option>
                                            <option class="dropdown-item form-control" name="posisi" value="STAFF">STAFF</option>
                                            <option class="dropdown-item form-control" name="posisi" value="SEC-HEAD">SEC-HEAD</option>
                                            <option class="dropdown-item form-control" name="posisi" value="DEPART-HEAD">DEPART-HEAD</option>
                                            <option class="dropdown-item form-control" name="posisi" value="DIV-HEAD">DIV-HEAD</option>
                                            <option class="dropdown-item form-control" name="posisi" value="COO">COO</option>

                                        </select>
                                    </div>

                                    <div class="col col-4  pt-2 mx-0 mt-2">Jabatan<sup class="text-danger">*</sup></div>
                                    <div class="col col-8  p-0 mt-3"><input type="text" class="form-control" name="jabatan" required /></div>

                                    <div class="col col-4  pt-2 mx-0 mt-2">Seksi<sup class="text-danger">*</sup></div>
                                    <div class="col col-8  p-0 mt-3">
                                        <select class="form-control" name="seksi" required>
                                            <option class="dropdown-item form-control" value=" " name="seksi" id="seksi" selected disabled="disabled">--Pilih--</option>
                                             <option class="dropdown-item form-control" name="seksi" value=""> </option>
                                            <?php
                                            include "../../../koneksi.php";
                                            $getquery = mysqli_query($conn, ("SELECT * FROM nusametal_id;"));
                                            while ($show = mysqli_fetch_array($getquery)) {
                                            ?>
                                                <option class="dropdown-item form-control" name="seksi" value="<?= $show['seksi']; ?>"><?= $show['seksi']; ?></option>

                                            <?php } ?>

                                        </select>
                                    </div>

                                    <div class="col col-4  pt-2 mx-0 mt-2">Departemen<sup class="text-danger">*</sup></div>
                                    <div class="col col-8  p-0 mt-3">
                                        <select class="form-control" name="departemen" required>
                                            <option class="dropdown-item form-control" value=" " name="departemen" id="departemen" selected disabled="disabled">--Pilih--</option>
                                             <option class="dropdown-item form-control" name="departemen" value=""> </option>
                                            <?php
                                            include "../../../koneksi.php";
                                            $getquery = mysqli_query($conn, ("SELECT * FROM nusametal_id WHERE NOT dept='';"));
                                            while ($show = mysqli_fetch_array($getquery)) {
                                            ?>
                                                <option class="dropdown-item form-control" name="departemen" id="departemen" <?= $show['dept']; ?>><?= $show['dept']; ?></option>

                                            <?php } ?>

                                        </select>
                                    </div>

                                    <div class="col col-4  pt-2 mx-0 mt-2">Divisi<sup class="text-danger">*</sup></div>
                                    <div class="col col-8  p-0 mt-3">
                                        <select class="form-control" name="divisi" required>
                                            <option class="dropdown-item form-control" name="divisi" id="divisi" value=" " selected disabled="disabled">--Pilih--</option>
                                             <option class="dropdown-item form-control" name="divisi" value=""> </option>
                                            <?php
                                            include "../../../koneksi.php";
                                            $getquery = mysqli_query($conn, ("SELECT * FROM nusametal_id WHERE NOT divis='';"));
                                            while ($show = mysqli_fetch_array($getquery)) {
                                            ?>
                                                <option class="dropdown-item form-control" name="divisi" id="divisi" <?= $show['divis']; ?>><?= $show['divis']; ?></option>

                                            <?php } ?>

                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="col col-12  col-lg-6 ">
                                <div class="row">
                                   
                                    
                                    <div class="col col-4  pt-2 mx-0 mt-3 pl-3 ">Cuti Tahunan<sup class="text-danger">*</sup></div>
                                    <div class="col col-3  p-0 mt-3"> <input type="number" min="0" max="50" class="form-control" name="cuti_tahunan" required /></div>

                                    <div class="col col-2  pt-2 mx-0 mt-3 pl-3 text-center">Cuti Besar<sup class="text-danger">*</sup></div>
                                    <div class="col col-3  p-0 mt-3"> <input type="number" min="0" max="50" class="form-control" name="cuti_besar" required /></div>
                                    
                                    <div class="col col-4  pt-2 mx-0 mt-3 pl-3 ">Saldo Medical<sup class="text-danger">*</sup></div>
                                    <div class="col col-8  p-0 mt-3"> <input type="number" min="0" class="form-control" name="saldo_medical" required /></div>
                                    
                                    <!--<div class="col col-2  pt-2 mx-0 mt-3 pl-3 text-center">Cuti Besar Extend<sup class="text-danger">*</sup></div>-->
                                    <!--<div class="col col-3  p-0 mt-3"> <input type="number" min="0" max="50" class="form-control" name="cuti_besar_extend" required /></div>-->

                                    <div class="col col-4  pt-2 mx-0 mt-3 pl-3">No. Handphone<sup class="text-danger">*</sup></div>
                                    <div class="col col-8  p-0 mt-3">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">+62</div>
                                            </div>
                                            <input type="text" class="form-control" name="no_telp" required />
                                        </div>
                                    </div>

                                    <div class="col col-4  pt-2 mx-0 mt-3 pl-3">Alamat<sup class="text-danger">*</sup></div>
                                    <div class="col col-8  p-0 mt-3"><textarea class="form-control" name="alamat" cols="" rows="" required></textarea></div>

                                    <div class="col col-4  pt-2 mx-0 mt-3 pl-3">Email Kantor<sup class="text-danger">*</sup></div>
                                    <div class="col col-8  p-0 mt-3"><input type="email" class="form-control" name="email_kantor" required /></div>

                                    <div class="col col-4  pt-2 mx-0 mt-3 pl-3">Email Pribadi<sup class="text-danger">*</sup></div>
                                    <div class="col col-8  p-0 mt-3"><input type="email" class="form-control" name="email_pribadi" required /></div>

                                    <div class="col col-4  pt-2 mx-0 mt-3 pl-3">Tgl Bergabung<sup class="text-danger">*</sup></div>
                                    <div class="col col-8  p-0 mt-3"><input type="date" class="form-control" name="masuk_perusahaan" required /></div>
                                    
                                   

                                    <div class="col col-2  pt-2 mx-0 mt-4 pl-3 ">Uk. Baju<sup class="text-danger">*</sup></div>
                                    <div class="col col-2  p-0 mt-4">
                                        <select type="name" class="form-control chosen" id="txtJenis" name="uk_baju" required>
                                            <option name="uk_baju" value=" " selected disabled="disabled">--Pilih Ukuran--</option>
                                            <option name="uk_baju" value="S">S</option>
                                            <option name="uk_baju" value="M">M</option>
                                            <option name="uk_baju" value="L">L</option>
                                            <option name="uk_baju" value="XL">XL</option>
                                            <option name="uk_baju" value="2XL">2XL</option>
                                            <option name="uk_baju" value="3XL">3XL</option>
                                            <option name="uk_baju" value="4XL">4XL</option>
                                            <option name="uk_baju" value="Custom">Custom</option>
                                        </select>
                                    </div>

                                    <div class="col col-2  pt-2 mx-0 mt-4 pl-3 text-center">Uk. Celana<sup class="text-danger">*</sup></div>
                                    <div class="col col-2  p-0 mt-4"><select type="name" class="form-control chosen" id="txtJenis" name="uk_celana" required>
                                            <option name="uk_celana" value=" " selected disabled="disabled">--Pilih Ukuran--</option>
                                            <?php
                                            $uk = 27;
                                            while ($uk <= 50) {
                                            ?>
                                                <option name="uk_celana" value=" <?= $uk ?>"><?= $uk ?></option>
                                            <?php
                                                $uk++;
                                            };
                                            ?>
                                            <option name="uk_celana" value="Custom">Custom</option>
                                        </select></div>

                                    <div class="col col-2  pt-2 mx-0 mt-4 pl-3">Uk. Sepatu<sup class="text-danger">*</sup></div>
                                    <div class="col col-2  p-0 mt-4"><select type="name" class="form-control chosen" id="txtJenis" name="uk_sepatu" required>
                                            <option name="uk_sepatu" value=" " selected disabled="disabled">--Pilih Ukuran--</option>
                                            <?php
                                            $uk = 5;
                                            while ($uk <= 16) {
                                            ?>
                                                <option name="uk_sepatu" value="<?= $uk ?>"><?= $uk ?></option>
                                            <?php
                                                $uk++;
                                            };
                                            ?>
                                            <option name="uk_sepatu" value="Custom">Custom</option>
                                        </select>
                                    </div>
                                     <div class="col col-4  pt-2 mx-0 mt-4 pl-3 ">Periode<sup class="text-danger">*</sup></div>
                                    <div class="col col-8  p-0 mt-4">
                                        <select type="name" class="form-control chosen" id="txtJenis" name="periode" required>
                                            <option name="periode" value=" " selected disabled="disabled">--Pilih Periode--</option>
                                            <option name="periode" value="Kontrak">Kontrak</option>
                                            <option name="periode" value="Permanen">Permanen</option>
                                        </select>
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
    $nrp = htmlspecialchars($_POST['nrp']);
    $nama = htmlspecialchars($_POST['nama']);
    $istri = htmlspecialchars($_POST['istri']);
    $anak_1 = htmlspecialchars($_POST['anak_1']);
    $anak_2 = htmlspecialchars($_POST['anak_2']);
    $anak_3 = htmlspecialchars($_POST['anak_3']);
    $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
    $posisi = htmlspecialchars($_POST['posisi']);
    $jabatan = htmlspecialchars($_POST['jabatan']);
    $seksi = htmlspecialchars($_POST['seksi']);
    $departemen = htmlspecialchars($_POST['departemen']);
    $divisi = htmlspecialchars($_POST['divisi']);
    $saldo_medical = htmlspecialchars($_POST['saldo_medical']);
    $cuti_tahunan = htmlspecialchars($_POST['cuti_tahunan']);
    $cuti_besar = htmlspecialchars($_POST['cuti_besar']);
    $cuti_besar_extend = htmlspecialchars($_POST['cuti_besar_extend']);
    $no_telp = htmlspecialchars($_POST['no_telp']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $email_kantor = htmlspecialchars($_POST['email_kantor']);
    $email_pribadi = htmlspecialchars($_POST['email_pribadi']);
    $email_kantor = htmlspecialchars($_POST['email_kantor']);
    $masuk_perusahaan = htmlspecialchars($_POST['masuk_perusahaan']);
    $periode = htmlspecialchars($_POST['periode']);
    $uk_baju = htmlspecialchars($_POST['uk_baju']);
    $uk_celana = htmlspecialchars($_POST['uk_celana']);
    $uk_sepatu = htmlspecialchars($_POST['uk_sepatu']);
    
     
    $cb_extend_date = date('Y-m-d', strtotime('+6 Month', strtotime($masuk_perusahaan)));

    $sql = mysqli_query($conn, "INSERT INTO karyawan VALUES ('$nrp','Nusametal1','$nama','$istri','$anak_1','$anak_2','$anak_3','$tanggal_lahir','$masuk_perusahaan','$no_telp','$alamat','$posisi','$jabatan','$seksi','$departemen','$divisi','Nusametal','$email_kantor','$email_pribadi','$saldo_medical','$cuti_tahunan','$cuti_besar',0,'$cb_extend_date','$uk_baju','$uk_celana','$uk_sepatu','$periode','ENABLED')");

    echo "<script>    
    Swal.fire({
        title: 'Penambahan Karyawan Berhasil.',
        icon: 'success',
        showCancelButton: false,
        allowOutsideClick : false,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
      }).then((result) => {
        if (result.isConfirmed) {
          location = '../karyawan/'
        }
      })
    
    </script>";
}

?>