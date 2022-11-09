<!DOCTYPE html>
<html lang="en" class="notranslate">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Tamu</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Vanilla CSS -->
    <link rel="stylesheet" href="../asset/style/css/style.css" />
    <script src="https://kit.fontawesome.com/630a92c5e5.js" crossorigin="anonymous"></script>
    <script src="../asset/style/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="shortcut icon" href="../asset/img/logo-mini.png" />
    <link href="../asset/style/css/main.css" rel="stylesheet">
</head>

<body style="background-color: #e6e6e6;">
    
    <section class="formSecurity d-flex ">
        <div class="container-fluid">
            <a type="submit" href="../security/" name="kembali" class="btn btn-primary mt-1">Kembali</a>
            
            
<nav class="mt-3">
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">BUKU TAMU</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="true">DINAS LUAR</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="true">IZIN MENINGGALKAN PEKERJAAN</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
             <!-- INI BUKU TAMU MASUK -->
            <div class="col-12 card tumpul table-borderless  mt-3 p-2">
                <h3 class="text-center "><u>Daftar Tamu Yang Sudah Masuk</u></h3>
                <table id="Datatables" class="table table-hover table-responsive border" style="color:black">
                    <thead class="table-info ">
                        <tr>
                            <th>No</th>
                            <th>Tanggal Kedatangan</th>
                            <th>Tanggal Selesai</th>
                            <th>Nama</th>
                            <th>No.Telpon</th>
                            <th>Asal Perusahaan</th>
                            <th>Keperluan</th>
                            <th>Plat Nomor</th>
                            <th>User</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        <?php
                        include "../koneksi.php";
                        $no = 1;
                        $sql = "SELECT * FROM permit WHERE tanggal_in = CURDATE() AND approval=5 AND check_in >= 0";
                        $getquery = mysqli_query($conn, $sql);

                        while ($tampil = mysqli_fetch_array($getquery)) {
                            $cekout = $tampil['check_out'];
                            $cekout1 = date('d F Y - H : i', strtotime($tampil["check_out"]));
                            if ($cekout == NULL) {
                                $checkout = 'Belum Check-Out';
                            } else {
                                $checkout = $cekout1;
                            }
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= date('d F Y ', strtotime($tampil["tanggal_in"])); ?></td>
                                <td><?= date('d F Y ', strtotime($tampil["tanggal_out"])); ?></td>
                                <td><?= $tampil['nama']; ?></td>
                                <td><?= $tampil['no_telp']; ?></td>
                                <td><?= $tampil['asal_perusahaan']; ?></td>
                                <td><?= $tampil['keperluan']; ?></td>
                                <td><?= $tampil['plat_nomor']; ?></td>
                                <td><?= $tampil['user']; ?></td>
                                <td><?= date('d F Y - H : i', strtotime($tampil["check_in"])); ?></td>
                                <td><?= $checkout ?></td>
                                <!-- <td><?= date('d F Y - H : i', strtotime($tampil["check_out"])); ?></td> -->
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col card-body bg-light-biru text-white my-3" style="background-color: #e6e6e6;">
                    <i>&ensp;</i>
                    <!-- <span>B e r i k u t &ensp; A d a l a h &ensp; R i w a y a t &ensp; D i s p e n s a s i &ensp;</span> -->
                </div>
            </div>

            <div class="col-12 card tumpul table-borderless p-2">
                <h3 class="text-center "><u>Daftar Tamu Nusametal</u></h3>
                <table id="table_id" class="table table-hover table-responsive border" style="color:black">
                    <thead class="table-info ">
                        <tr>
                            <th>No</th>
                            <th>Tanggal Kedatangan</th>
                            <th>Tanggal Kembali</th>
                            <th>Nama</th>
                            <th>No.Telpon</th>
                            <th>Asal Perusahaan</th>
                            <th>Keperluan</th>
                            <th>Plat Nomor</th>
                            <th>User</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        <?php
                        include "../koneksi.php";
                        $no = 1;
                        // $sql = "SELECT * FROM permit WHERE tanggal_in >= CURDATE() AND approval=5 ORDER BY tanggal_in ASC;";
                        $sql = "SELECT * FROM permit WHERE approval=5 ORDER BY date_req DESC;";
                        $getquery = mysqli_query($conn, $sql);

                        while ($tampil = mysqli_fetch_array($getquery)) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= date('d F Y ', strtotime($tampil["tanggal_in"])); ?></td>
                                <td><?= date('d F Y ', strtotime($tampil["tanggal_out"])); ?></td>
                                <td><?= $tampil['nama']; ?></td>
                                <td><?= $tampil['no_telp']; ?></td>
                                <td><?= $tampil['asal_perusahaan']; ?></td>
                                <td><?= $tampil['keperluan']; ?></td>
                                <td><?= $tampil['plat_nomor']; ?></td>
                                <td><?= $tampil['user']; ?></td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- INI BUKU TAMU MASUK --> 
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <!-- DINAS LUAR -->       
       <div class="col-12 card tumpul table-borderless p-2">
                <h3 class="text-center "><u>Daftar Karyawan Dinas Luar</u></h3>
                <table id="table_1" class="table table-hover table-responsive border" style="color:black">
                    <thead class="table-info ">
                        <tr>
                            <th>No</th>
                            <th>TANGGAL BERANGKAT</th>
                            <th>NRP</th>
                            <th>NAMA</th>
                            <th>SEKSI</th>
                            <th>DEPARTEMEN</th>
                            <th>TUJUAN</th>
                            <th>KEPERLUAN</th>
                            <th>KENDARAAN</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        <?php
                        include "../koneksi.php";
                        $no = 1;
                        // $sql = "SELECT * FROM permit WHERE tanggal_in >= CURDATE() AND approval=5 ORDER BY tanggal_in ASC;";
                        $sql = "SELECT * FROM dinasluar WHERE approval=5 ORDER BY tanggal_berangkat DESC;";
                        $getquery = mysqli_query($conn, $sql);

                        while ($tampil = mysqli_fetch_array($getquery)) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= date('d F Y ', strtotime($tampil["tanggal_berangkat"])); ?></td>
                                <td><?= $tampil['nrp']; ?></td>
                                <td><?= $tampil['nama']; ?></td>
                                <td><?= $tampil['seksi']; ?></td>
                                <td><?= $tampil['departemen']; ?></td>
                                <td><?= $tampil['tujuan']; ?></td>
                                <td><?= $tampil['keperluan']; ?></td>
                                <td><?= $tampil['kendaraan']; ?></td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
                <!-- DINAS LUAR -->     
  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                <!-- IMP -->    
        <div class="col-12 card tumpul table-borderless p-2">
                <h3 class="text-center "><u>Daftar Karyawan IMP</u></h3>
                <table id="table_2" class="table table-hover table-responsive border" style="color:black">
                    <thead class="table-info ">
                        <tr>
                            <th>No</th>
                            <th>NRP</th>
                            <th>Nama</th>
                            <th>Seksi</th>
                            <th>Departemen</th>
                            <th>Tanggal IMP</th>
                            <th>Shift</th>
                            <th>Jam IMP</th>
                            <th>Jam Kembali IMP</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        <?php
                        include "../koneksi.php";
                        $no = 1;
                        // $sql = "SELECT * FROM permit WHERE tanggal_in >= CURDATE() AND approval=5 ORDER BY tanggal_in ASC;";
                        $sql = "SELECT * FROM imp WHERE approval=5 ORDER BY tanggal_berangkat DESC;";
                        $getquery = mysqli_query($conn, $sql);

                        while ($tampil = mysqli_fetch_array($getquery)) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $tampil['nrp']; ?></td>
                                <td><?= $tampil['nama']; ?></td>
                                <td><?= $tampil['seksi']; ?></td>
                                <td><?= $tampil['departemen']; ?></td>
                                <td><?= date('d F Y ', strtotime($tampil["tanggal_berangkat"])); ?></td>
                                <td><?= $tampil['shift']; ?></td>
                                <td><?= $tampil['jam_berangkat']; ?></td>
                                <td><?= $tampil['jam_kembali']; ?></td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
                <!-- IMP -->    
  </div>
</div>
            
            
            
          
            
        </div>
    </section>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });

        $(document).ready(function() {
            $('#Datatables').DataTable();
        });
        
          $(document).ready(function() {
            $('#table_1').DataTable();
        });
        
        $(document).ready(function() {
            $('#table_2').DataTable();
        });
    </script>

    <script>

    </script>

    <!-- Bootsrap JS -->

    <!-- Bootstrap core JavaScript-->
    <script src="../asset/style/js/jquery.min.js"></script>
    <script src="../asset/style/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../asset/style/js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../asset/style/js/sb-admin-2.min.js"></script>
    <script src="../asset/style/js/file.js"></script>
    <script src="../asset/style/js/datatables-simple-demo.js"></script>
    <script src="../asset/style/js/scripts.js"></script>

    <!-- Scripts For Icon-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="https://kit.fontawesome.com/630a92c5e5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="../asset/style/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

</body>


</html>