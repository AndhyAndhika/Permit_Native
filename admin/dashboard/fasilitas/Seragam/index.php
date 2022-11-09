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

    <title>Seragam | Fasilitas</title>

    <link href="../../../../asset/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,600;1,100&display=swap" rel="stylesheet">
    <link href="../../../../asset/style/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../../../asset/style/css/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../../../asset/img/logo-mini.png" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />



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
                    <h3>P a k a i a n &ensp; K e r j a </h3>
                    <div class="row">
                        <div class="card col-12 col-md-10 col-lg-5 p-2 m-1 order-lg-2" style="height: 79vh;">
                            <div class="card-header font-weight-bolder text-primary bg-white">
                                Rincian Seragam Karyawan
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col col-4  ">NRP</div>
                                    <div class="col col-8 ">: <?php echo $_SESSION['nrp']; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col col-4  mt-3">Nama</div>
                                    <div class="col col-8  mt-3">: <?php echo $_SESSION['nama']; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col col-4  mt-3">Ukuran Baju</div>
                                    <div class="col col-8  mt-3">: <?php echo $_SESSION['uk_baju']; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col col-4  mt-3">Ukuran Celana</div>
                                    <div class="col col-8  mt-3">: <?php echo $_SESSION['uk_celana']; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col col-4  mt-3">Ukuran Sepatu</div>
                                    <div class="col col-8  mt-3">: <?php echo $_SESSION['uk_sepatu']; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col col-4 col-md-4 col-xl-6 mt-3"></div>
                                    <div class="col col-3 col-md-2 col-lg-3 col-xl-2 mt-3">
                                        <button type="button" name="edit" class="btn btn-warning px-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit</button>
                                    </div>
                                    <div class="col col-3 col-md-2 col-lg-3 col-xl-2 mt-3">
                                        <button type="button" name="ajukan" class="btn btn-info px-4">Ajukan</button>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col col-12 col-xl-7">
                                        <p class=" fs-6 font-italic">*Setelah merubah ukuran seragam, Silahkan Re-login untuk mengetahui apakah data sudah berubah atau belum</p>
                                    </div>
                                </div>


                                <form action="" method="POST">
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                                            <div class="modal-content ">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel ">Ubah Ukuran Seragam</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">×</button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="row ">
                                                        <div class="col col-12 col-lg-6 ">
                                                            <div class="row">
                                                                <div class="col col-4  ">NRP</div>
                                                                <div class="col col-8 ">: <?php echo $_SESSION['nrp']; ?></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col col-4  mt-3">Nama</div>
                                                                <div class="col col-8  mt-3">: <?php echo $_SESSION['nama']; ?></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col col-4  mt-3">Seksi</div>
                                                                <div class="col col-8  mt-3">: <?php echo $_SESSION['seksi']; ?></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col col-4  mt-3">Departemen</div>
                                                                <div class="col col-8  mt-3">: <?php echo $_SESSION['departemen']; ?></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col col-4  mt-3">Divisi</div>
                                                                <div class="col col-8  mt-3">: <?php echo $_SESSION['divisi']; ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="col col-12  col-lg-6 ">
                                                            <div class="row">
                                                                <div class="col col-3  pt-2  mt-3 ">Ukuran Baju</div>
                                                                <div class="col col-9  p-0 mt-3 "><select type="name" class="form-control chosen" id="txtJenis" name="uk_baju" required>
                                                                        <option name="uk_baju" value="Belum Memilih Ukuran">--Pilih Ukuran--</option>
                                                                        <option name="uk_baju" value="S">S</option>
                                                                        <option name="uk_baju" value="M">M</option>
                                                                        <option name="uk_baju" value="L">L</option>
                                                                        <option name="uk_baju" value="XL">XL</option>
                                                                        <option name="uk_baju" value="2XL">2XL</option>
                                                                        <option name="uk_baju" value="3XL">3XL</option>
                                                                        <option name="uk_baju" value="4XL">4XL</option>
                                                                        <option name="uk_baju" value="Custom">Custom</option>
                                                                    </select></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col col-3  pt-2  mt-3 ">Ukuran Celana</div>
                                                                <div class="col col-9  p-0 mt-3 "><select type="name" class="form-control chosen" id="txtJenis" name="uk_celana" required>
                                                                        <option name="uk_celana" value=" Belum Memilih Ukuran">--Pilih Ukuran--</option>
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
                                                            </div>
                                                            <div class="row">
                                                                <div class="col col-3  pt-2  mt-3 ">Ukuran Sepatu</div>
                                                                <div class="col col-9  p-0 mt-3 "><select type="name" class="form-control chosen" id="txtJenis" name="uk_sepatu" required>
                                                                        <option name="uk_sepatu" value="Belum Memilih Ukuran">--Pilih Ukuran--</option>
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
                                                                    </select></div>
                                                            </div>

                                                        </div>

                                                    </div>


                                                </div>
                                                <div class="modal-footer pr-3">
                                                    <button type="button" class="btn  btn-danger" data-bs-dismiss="modal">Tutup</button>
                                                    <button type="input" class="btn btn-success" name="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card col-12 col-md-10 col-lg-6 p-1 m-1 order-lg-1" style="height: 79vh;">
                            <div class="row col-12">
                                <ul class="nav nav-tabs m-2" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="kemeja-tab" data-bs-toggle="tab" data-bs-target="#kemeja" type="button" role="tab" aria-controls="kemeja" aria-selected="true">Kemeja</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="celana-tab" data-bs-toggle="tab" data-bs-target="#celana" type="button" role="tab" aria-controls="celana" aria-selected="false">Celana</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="sepatu-tab" data-bs-toggle="tab" data-bs-target="#sepatu" type="button" role="tab" aria-controls="sepatu" aria-selected="false">Sepatu</button>
                                    </li>
                                </ul>
                                <div class="col-12 d-flex tab-content" id="myTabContent" style="overflow-x:auto;">
                                    <div class="tab-pane fade show active w-100" id="kemeja" role="tabpanel" aria-labelledby="kemeja-tab">
                                        <div class="row">
                                            <h6 class="col-12 font-weight-bolder">Size Chart Kemeja Karyawan</h6>
                                        </div>
                                        <table class="table table-responsive table-striped table-bordered text-center w-100 d-block d-md-table" style="color:black">
                                            <thead class="table-warning">
                                                <tr>
                                                    <th scope="col">Size</th>
                                                    <th scope="col">S</th>
                                                    <th scope="col">M</th>
                                                    <th scope="col">L</th>
                                                    <th scope="col">XL</th>
                                                    <th scope="col">XXL</th>
                                                    <th scope="col">XXXL</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">P. Baju</th>
                                                    <th scope="col">62</th>
                                                    <th scope="col">62</th>
                                                    <th scope="col">63</th>
                                                    <th scope="col">64</th>
                                                    <th scope="col">65</th>
                                                    <th scope="col">66</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">L. Badan</th>
                                                    <th scope="col">26</th>
                                                    <th scope="col">28</th>
                                                    <th scope="col">30</th>
                                                    <th scope="col">31</th>
                                                    <th scope="col">32</th>
                                                    <th scope="col">33</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">L. Punggung</th>
                                                    <th scope="col">46</th>
                                                    <th scope="col">47</th>
                                                    <th scope="col">49</th>
                                                    <th scope="col">51</th>
                                                    <th scope="col">54</th>
                                                    <th scope="col">56</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">P. Lengan</th>
                                                    <th scope="col">25</th>
                                                    <th scope="col">25</th>
                                                    <th scope="col">27</th>
                                                    <th scope="col">27</th>
                                                    <th scope="col">28</th>
                                                    <th scope="col">28</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">L. Leher</th>
                                                    <th scope="col">41</th>
                                                    <th scope="col">41</th>
                                                    <th scope="col">42</th>
                                                    <th scope="col">43</th>
                                                    <th scope="col">44</th>
                                                    <th scope="col">44</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="celana" role="tabpanel" aria-labelledby="celana-tab">
                                        <div class="row">
                                            <h6 class="col-12 m-2 font-weight-bolder">Size Chart Celana Panjang</h6>
                                        </div>
                                        <table class="table table-responsive table-striped table-bordered text-center" style="color:black">
                                            <thead class="table-warning">
                                                <tr>
                                                    <th scope="col">Size&nbsp;</th>
                                                    <th scope="col">28</th>
                                                    <th scope="col">29</th>
                                                    <th scope="col">30</th>
                                                    <th scope="col">31</th>
                                                    <th scope="col">32</th>
                                                    <th scope="col">33</th>
                                                    <th scope="col">34</th>
                                                    <th scope="col">35</th>
                                                    <th scope="col">36</th>
                                                    <th scope="col">37</th>
                                                    <th scope="col">38</th>
                                                    <th scope="col">39</th>
                                                    <th scope="col">40</th>
                                                    <th scope="col">41</th>
                                                    <th scope="col">42</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">P. Celana</th>
                                                    <th scope="col">100</th>
                                                    <th scope="col">100</th>
                                                    <th scope="col">100</th>
                                                    <th scope="col">100</th>
                                                    <th scope="col">100</th>
                                                    <th scope="col">100</th>
                                                    <th scope="col">100</th>
                                                    <th scope="col">100</th>
                                                    <th scope="col">100</th>
                                                    <th scope="col">100</th>
                                                    <th scope="col">100</th>
                                                    <th scope="col">100</th>
                                                    <th scope="col">100</th>
                                                    <th scope="col">100</th>
                                                    <th scope="col">100</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Pinggang</th>
                                                    <th scope="col">72,5</th>
                                                    <th scope="col">74</th>
                                                    <th scope="col">76.5</th>
                                                    <th scope="col">79</th>
                                                    <th scope="col">81.5</th>
                                                    <th scope="col">84</th>
                                                    <th scope="col">86,5</th>
                                                    <th scope="col">89</th>
                                                    <th scope="col">91,5</th>
                                                    <th scope="col">94</th>
                                                    <th scope="col">96,5</th>
                                                    <th scope="col">100</th>
                                                    <th scope="col">102,5</th>
                                                    <th scope="col">105</th>
                                                    <th scope="col">107.5</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Pinggul</th>
                                                    <th scope="col">94</th>
                                                    <th scope="col">98</th>
                                                    <th scope="col">100</th>
                                                    <th scope="col">103</th>
                                                    <th scope="col">105</th>
                                                    <th scope="col">108</th>
                                                    <th scope="col">110</th>
                                                    <th scope="col">113</th>
                                                    <th scope="col">116</th>
                                                    <th scope="col">118</th>
                                                    <th scope="col">121</th>
                                                    <th scope="col">124</th>
                                                    <th scope="col">127</th>
                                                    <th scope="col">130</th>
                                                    <th scope="col">133</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Pesak</th>
                                                    <th scope="col">60</th>
                                                    <th scope="col">60</th>
                                                    <th scope="col">62</th>
                                                    <th scope="col">62</th>
                                                    <th scope="col">62</th>
                                                    <th scope="col">64</th>
                                                    <th scope="col">64</th>
                                                    <th scope="col">65</th>
                                                    <th scope="col">68</th>
                                                    <th scope="col">70</th>
                                                    <th scope="col">70</th>
                                                    <th scope="col">70</th>
                                                    <th scope="col">70</th>
                                                    <th scope="col">71</th>
                                                    <th scope="col">71</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">L. Paha</th>
                                                    <th scope="col">29</th>
                                                    <th scope="col">30</th>
                                                    <th scope="col">31</th>
                                                    <th scope="col">32</th>
                                                    <th scope="col">33</th>
                                                    <th scope="col">34</th>
                                                    <th scope="col">35</th>
                                                    <th scope="col">36</th>
                                                    <th scope="col">37</th>
                                                    <th scope="col">38</th>
                                                    <th scope="col">39</th>
                                                    <th scope="col">40</th>
                                                    <th scope="col">41</th>
                                                    <th scope="col">42</th>
                                                    <th scope="col">43</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">L. Kaki</th>
                                                    <th scope="col">22</th>
                                                    <th scope="col">22</th>
                                                    <th scope="col">22</th>
                                                    <th scope="col">22</th>
                                                    <th scope="col">22</th>
                                                    <th scope="col">22</th>
                                                    <th scope="col">22</th>
                                                    <th scope="col">22</th>
                                                    <th scope="col">22</th>
                                                    <th scope="col">22</th>
                                                    <th scope="col">22</th>
                                                    <th scope="col">23</th>
                                                    <th scope="col">23</th>
                                                    <th scope="col">23</th>
                                                    <th scope="col">23</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="sepatu" role="tabpanel" aria-labelledby="sepatu-tab">
                                        <div class="row">
                                            <h6 class="col-12 font-weight-bolder">Size Chart Sepatu</h6>
                                        </div>
                                        <table class="table table-responsive table-striped table-bordered text-center w-100 d-block d-md-table" style="color:black">
                                            <thead class="table-warning">
                                                <tr>
                                                    <th scope="col">Size</th>
                                                    <th scope="col">36</th>
                                                    <th scope="col">37</th>
                                                    <th scope="col">38</th>
                                                    <th scope="col">39</th>
                                                    <th scope="col">40</th>
                                                    <th scope="col">41</th>
                                                    <th scope="col">42</th>
                                                    <th scope="col">43</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Panjang&nbsp;Insole&nbsp;+/-</th>
                                                    <th scope="col">23,5&nbsp;cm</th>
                                                    <th scope="col">24,0&nbsp;cm</th>
                                                    <th scope="col">24,5&nbsp;cm</th>
                                                    <th scope="col">25,0&nbsp;cm</th>
                                                    <th scope="col">25,5&nbsp;cm</th>
                                                    <th scope="col">26,0&nbsp;cm</th>
                                                    <th scope="col">26,5&nbsp;cm</th>
                                                    <th scope="col">27,0&nbsp;cm</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End of Main Content -->
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
</body>

</html>

<?php
include "../../../../koneksi.php";

//alert
$alert = "<script>    
        Swal.fire({
            title: 'Ukuran Seragam Anda Berhasil Dirubah!',
            icon: 'success',
            showCancelButton: false,
            allowOutsideClick : false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
          }).then((result) => {
            if (result.isConfirmed) {
              location = '../Seragam/'
            }
          })
        
        </script>";

if (isset($_POST['submit'])) {

    $uk_baju = htmlspecialchars($_POST['uk_baju']);
    $uk_celana = htmlspecialchars($_POST['uk_celana']);
    $uk_sepatu = htmlspecialchars($_POST['uk_sepatu']);

    $sql =  mysqli_query($conn, "UPDATE karyawan SET uk_baju='$uk_baju', uk_celana='$uk_celana', uk_sepatu='$uk_sepatu' WHERE nrp='$_SESSION[nrp]'");
    echo "$alert";
}

?>