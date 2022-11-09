<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (isset($_SESSION['role']) == false) {
    header("location:../");
}

$date = date("FY");

$filename = "SKD_$date";

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
                    <th>No</th>
                    <th>ID </th>
                    <th>Tanggal Request</th>
                    <th>NRP</th>
                    <th>Nama</th>
                    <th>Seksi</th>
                    <th>Jenis Perawatan</th>
                    <th>Tanggal Mulai</th>
                    <th>tanggal Selesai</th>
                    <th>Jumlah Izin (Hari)</th>
                    <th>Nama Dokter</th>
                    <!-- <th>Lampiran</th> -->
                    <th>Status</th>
                    <th>Tanggal Approve</th>

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
                $query = "SELECT * FROM suratdokter WHERE approval=5 AND last_approval BETWEEN '$start' AND '$end' ORDER BY last_approval ASC;";

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
                        <!-- <td><img src="http://localhost/nm_permit/admin/dashboard/administrasi/lampiran/<?= $tampil['lampiran']; ?>" style="max-width:100px; max-height:100px"></td> -->
                        <td><?= $status ?></td>
                        <td><?= date('d F Y', strtotime($tampil["last_approval"])); ?></td>
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