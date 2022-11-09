<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (isset($_SESSION['role']) == false) {
    header("location:../");
}

$date = date("dFY");

$filename = "ClaimMedical_$date";

header("Content-type: application/force-download");
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename= $filename.xls");

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOWNLOAD</title>
</head>

<body>
    <style type="text/css">
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #3c3c3c;
            padding: 3px 8px;

        }

        img {
            max-width: 100px;
            max-height: 100px
        }
    </style>

    <div class="col-12 card tumpul table-borderless">
        <table id="datatablesSimple" border="1" class="table table-hover table-responsive border" style="color:black">
            <thead class="table-info">
                <tr>
                    <th>NO</th>
                    <th>ID</th>
                    <th>NRP</th>
                    <th>NAMA</th>
                    <th>SEKSI</th>
                    <th>JENIS CLAIM</th>
                    <th>JENIS KACAMATA</th>
                    <th>TIPE LENSA</th>
                    <th>JENIS PERAWATAN</th>
                    <th>TANGGAL KWITANSI</th>
                    <th>NAMA TERTANGGUNG</th>
                    <th>BIAYA</th>
                    <th>DIAGNOSA</th>
                    <th>NAMA RS</th>
                    <th>STATUS</th>
                </tr>
            </thead>
            <tbody class="table-light">
                <?php
                include "../../../../koneksi.php";
                $no = 1;
                error_reporting(1);

                $start = $_GET['start'];
                $end = $_GET['end'];


                // echo "$start";
                // echo "$end";
                //$query = "SELECT * FROM cuti WHERE approval=5 AND date_format(date_req,'%m')=date_format(now(),'%m');";
                //$query = "SELECT * FROM dinasluar WHERE approval=5 AND date_req BETWEEN '$start' AND '$end' ORDER BY date_req ASC;";
                $query = "SELECT * FROM medical WHERE status=1 AND last_approval BETWEEN '$start' AND '$end' ORDER BY last_approval ASC";
                $ambildata = mysqli_query($conn, $query);

                while ($tampil = mysqli_fetch_array($ambildata)) {
                    $stat = $tampil['status'];;
                    if ($stat == 10) {
                        $status = "<p style='color:red'> Silahkan input ulang dan pastikan semua data benar</p>";
                    } else if ($stat == 1) {
                        $status = "<p style='color:green'>Sudah Diproses</p>";
                    } else if ($stat == 0) {
                        $status = "<p >Sedang Dalam Proses Pengecekan</p>";
                    }
                ?>

                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $tampil['id']; ?></td>
                        <td><?= $tampil['nrp']; ?></td>
                        <td><?= $tampil['nama']; ?></td>
                        <td><?= $tampil['seksi']; ?></td>
                        <td><?= $tampil['jenis_claim']; ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><?= date('d F Y ', strtotime($tampil["tanggal_kwitansi"])); ?></td>
                        <td><?= $tampil['nama_tertanggung']; ?></td>
                        <td><?= $tampil['biaya']; ?></td>
                        <td><?= $tampil['diagnosa']; ?></td>
                        <td><?= $tampil['nama_rs']; ?></td>
                        <td><?= $status; ?></td>
                        <!-- <td><?= $tampil['obat_diberikan']; ?></td> -->

                        <!-- <td><img src="../../../dashboard/fasilitas/ClaimMedical/bukti_kwitansi/<?= $tampil['bukti_kwitansi']; ?>" alt="bukti_kwitansi_nm" style="max-width:100px; max-height:100px"></td> -->


                    </tr>
                <?php
                    $no++;
                }

                ?>
            </tbody>
            <script>
                $(document).ready(function() {
                    $('#example').DataTable({
                        scrollX: true,
                    });
                });
            </script>
        </table>

    </div>

</body>
<script src="../../../../asset/style/js/file.js"></script>

</html>