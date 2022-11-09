<!DOCTYPE html>
<html lang="en" class="notranslate">

<head>
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <?php

    use PHPMailer\PHPMailer\PHPMailer;

    include "../koneksi.php";
    $sql = mysqli_query($conn, "SELECT * FROM nusametal_id");
    $n1 = rand(1, 20); //mendapatkan nilai 1
    $n2 = rand(1, 20); //mendapatkan nilai 2 //menjumlahkan nilai 1 dan nilai 2
    $hasil = $n1 + $n2;
    ?>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Permit | Formulir Tamu</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <!-- Vanilla CSS -->
    <link rel="stylesheet" href="../asset/style/css/style.css" />
    <link rel="stylesheet" href="../asset/style/css/sb-admin-2.min.css">
    <link rel="shortcut icon" href="../asset/img/logo-mini.png" />
</head>

<body>
    <section class="tamu d-flex">
        <div class="tamu-left ml-lg-5 pl-lg-5">
            <div class="container-fluid">
                <div class="header mt-2">
                    <h1>Form Tamu</h1>
                    <p>Isi data diri anda sebelum memasuki kawasan Nusametal</p>
                </div>
                <form class="tamu-form" action="#" method="post">
                    <div class="row m-0">
                        <div class="col-sm-9 col-md-5 col-xl-4">
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="txtNama" class="form-label">Nama</label>
                                    <textarea type="name" class="form-control" id="txtNama" name="nama" placeholder=" 1-Nama Lengkap 2-Nama Lengkap" required></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="txtEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="txtEmail" name="email" required />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="txtTglMasuk" class="form-label">Tanggal Masuk</label>
                                    <input type="date" class="form-control" id="txtTglMasuk" name="tanggal_in" required />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="txtMasuk" class="form-label">Jam Masuk</label>
                                    <input type="time" class="form-control" id="txtMasuk" name="jam_in" required />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="txtKeluar" class="form-label">Plat Nomor</label>
                                    <input type="text" class="form-control" id="txtKeluar" name="plat_nomor" required />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="txtUser" class="form-label">User</label>
                                    <input type="name" class="form-control" id="txtUser" name="user" required />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label class="col-form-label text-primary fw-bold"><?php echo "$n1 + $n2 = "; ?></label>
                                    <input class="form-control" name="captcha" type="text" />
                                    <input name="hasilcaptcha" type="hidden" size="3" value="<?php echo $hasil; ?>" />
                                    <span class="form-text font-italic">
                                        *Diisi terlebih dahulu
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-5 col-xl-4">
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="txtAsal" class="form-label">Asal instansi</label>
                                    <input type="name" class="form-control" id="txtAsal" name="asal_perusahaan" required />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="txtTujuan" class="form-label">Keperluan</label>
                                    <textarea class="form-control" id="txtTujuan" name="keperluan" required></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="txtTglKeluar" class="form-label">Tanggal Keluar</label>
                                    <input type="date" class="form-control" id="txtTglKeluar" name="tanggal_out" required />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="txtKeluar" class="form-label">Jam Keluar</label>
                                    <input type="time" class="form-control" id="txtKeluar" name="jam_out" required />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="txtKeluar" class="form-label">No Telp</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">+62</div>
                                        </div>
                                        <input type="phone" class="form-control" id="txtno_telpon" name="no_telpon" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="txtSeksi" class="form-label" placeholder="-- Pilih Seksi --">Seksi</label>
                                    <select type="name" class="form-control chosen" id="txtSeksi" name="seksi" required>
                                        <option>--Pilih Seksi--</option>
                                        <?php while ($seksi = mysqli_fetch_array($sql)) { ?>
                                            <option><?php echo $seksi['seksi']; ?> </option>
                                        <?php } ?>
                                        <script type="text/javascript">
                                            $(".chosen").chosen();
                                        </script>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-10 col-xl-8 d-flex justify-content-center my-3 pb-3">
                            <button type="Input" class="btn btn-primary mr-1" name="input">Submit</button>
                            <button type="submit" class="btn btn-danger mr-1" name="batal">Batal</button>
                            <a type="button" class="btn btn-success" name="tracking" href="search">Tracking...</a>
                        </div>
                    </div>
            </div>
            </form>
        </div>
        <div class="tamu-right">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <img src="../asset/img/carousel2.jpg" class="d-block p-0" style="height: 170vh;" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../asset/img/carousel3.jpg" class="d-block p-0" style="height: 170vh;" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Bootsrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- SweetAlert -->
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Popper JS -->
    <!-- <link rel="stylesheet" href="style/bootstrap/js/popper.min.js" />
    <link rel="stylesheet" href="style/bootstrap/js/bootstrap.min.js" /> -->


</body>

</html>
<?php
include "../vendor/autoload.php";
include "../koneksi.php";
include "../kodeauto.php";
include "../phpqrcode/qrlib.php";

if (isset($_POST['input'])) {
    if ($_POST['captcha'] == $_POST['hasilcaptcha']) {
        //htmlspecialchars mencegah XSS (Cross Site Scripting) supaya kode html atau javascript tidak bisa di run
        $nama = htmlspecialchars($_POST['nama']);
        $asal_perusahaan = htmlspecialchars($_POST['asal_perusahaan']);
        $email = htmlspecialchars($_POST['email']);
        $keperluan = htmlspecialchars($_POST['keperluan']);
        $tanggal_in = htmlspecialchars($_POST['tanggal_in']);
        $tanggal_out = htmlspecialchars($_POST['tanggal_out']);
        $jam_in = htmlspecialchars($_POST['jam_in']);
        $jam_out = htmlspecialchars($_POST['jam_out']);
        $user = htmlspecialchars($_POST['user']);
        $seksi = htmlspecialchars($_POST['seksi']);
        $no_telpon = htmlspecialchars($_POST['no_telpon']);
        $plat_nomor = htmlspecialchars($_POST['plat_nomor']);

        // kirim email

        //1. generate QR Code
        $tempdir = "qrcode-img/";
        $nameqr = $kodeauto;
        $tempdir = 'qrcode-img/';
        $teks_qrcode        = $nameqr;
        $namafile           = "$nameqr.png";
        $quality            = "H";          // ini ada 4 pilihan yaitu L (Low), M(Medium), Q(Good), H(High)
        $ukuran             = 5;            // 1 adalah yang terkecil, 10 paling besar
        $padding            = 1;
        $qrauto = QRCode::png($teks_qrcode, $tempdir . $namafile, $quality, $ukuran, QR_ECLEVEL_H);

        //2. kirim email
        $mail = new PHPMailer;
        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->Host = 'mail.smartsyst.my.id'; //SMTP server
        $mail->Port = 587; //smtp port
        $mail->SMTPAuth = true;
        $mail->isHTML(true);
        $mail->SMTPSecure = 'tls';
        $mail->Username = "no-reply@smartsyst.my.id";
        $mail->Password = "P0s3id0n34%@&";
        $mail->From = "no-reply@smartsyst.my.id"; //sender's gmail address
        $mail->FromName = 'Permit Nusametal';
        $mail->AddAddress($_POST['email']); //receiver's e-mail address
        $mail->Subject = "Surat Izin Masuk Area Nusametal"; //e-mail subject
        $mail->Body = "
        <h4>Yth Bapak/Ibu $nama</h4>

        <p>Terimakasih telah mengisi form pada Permit online, Berikut adalah isi dari formnya :</p>

        <table>
        <tr>
            <td>ID No.</td>
            <td>:</td>
            <td><b> $nameqr</b></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>$nama</td>
        </tr>
        <tr>
            <td>Asal instansi</td>
            <td>:</td>
            <td>$asal_perusahaan</td>
        </tr>
        <tr>
            <td>Keperluan</td>
            <td>:</td>
            <td>$keperluan</td>
        </tr>
        <tr>
            <td>Tanggal kedatangan</td>
            <td>:</td>
            <td>$tanggal_in</td>
        </tr>
        <tr>
            <td>Jam</td>
            <td>:</td>
            <td>$jam_in</td>
        </tr>
        <tr>
            <td>Bertemu dengan</td>
            <td>:</td>
            <td>Bapak/Ibu $user</td>
        </tr>
        <tr>
            <td>Seksi</td>
            <td>:</td>
            <td>$seksi</td>
        </tr>
        </table>
        <br />

        <p>Silahkan gunakan ID untuk tracking progres.<br />Dan tunjukan kode QR ini pada tim security untuk dapat masuk ke area Nusametal.</p>
        <br />
        <p>Regards,</p>

        <p>Digitalization Team</p>"; //e-mail message
        $mail->addAttachment('qrcode-img/' . $kodeauto . '.png');
        if (!$mail->Send()) {
            $text = $mail->ErrorInfo;
            echo $text;
        } else {
            $text = "Email  has been sent.";
            $msg = "Success";
        }

        //3. send Notification

        function sendMessage()
        {
            $asal_perusahaan = htmlspecialchars($_POST['asal_perusahaan']);
            $appnotif = "$_SESSION[role]" + 1;
            $nama = $_SESSION['nama'];

            $content = array(
                "en" => "Terdapat Permintaan Masuk Area NM Dari $asal_perusahaan"
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

        //4. insert ke table

        $alert = "<script>    
        Swal.fire({
            title: 'Data Anda Berhasil Diinput',
            text: 'Silahkan Cek Email Anda!',
            icon: 'success',
            showCancelButton: false,
            allowOutsideClick : false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
          }).then((result) => {
            if (result.isConfirmed) {
              location = '../user/'
            }
          })
        
        </script>";

        if ($seksi == 'Sap Enchancement') {
            mysqli_query($conn, "INSERT INTO permit VALUES('$kodeauto',(NOW()),'$nama','$asal_perusahaan','$email','$keperluan','$tanggal_in','$tanggal_out','$jam_in','$jam_out','$user','$seksi','5',null,null,'none','$no_telpon','$plat_nomor') ");
            $response = sendMessage(); // 1
            $return["allresponses"] = $response; // 2
            $return = json_encode($return); // 3 baris buat kirim notif
            echo "$alert";
        } else if ($seksi == 'Account Executive') {
            mysqli_query($conn, "INSERT INTO permit VALUES('$kodeauto',(NOW()),'$nama','$asal_perusahaan','$email','$keperluan','$tanggal_in','$tanggal_out','$jam_in','$jam_out','$user','$seksi','5',null,null,'none','$no_telpon','$plat_nomor') ");
            $response = sendMessage(); // 1
            $return["allresponses"] = $response; // 2
            $return = json_encode($return); // 3 baris buat kirim notif
            echo "$alert";
        } else if ($seksi == 'Digitalization') {
            mysqli_query($conn, "INSERT INTO permit VALUES('$kodeauto',(NOW()),'$nama','$asal_perusahaan','$email','$keperluan','$tanggal_in','$tanggal_out','$jam_in','$jam_out','$user','$seksi','5',null,null,'none','$no_telpon','$plat_nomor') ");
            $response = sendMessage(); // 1
            $return["allresponses"] = $response; // 2
            $return = json_encode($return); // 3 baris buat kirim notif
            echo "$alert";
        }else if ($seksi == 'PE Painting & System Support') {
            mysqli_query($conn, "INSERT INTO permit VALUES('$kodeauto',(NOW()),'$nama','$asal_perusahaan','$email','$keperluan','$tanggal_in','$tanggal_out','$jam_in','$jam_out','$user','$seksi','5',null,null,'none','$no_telpon','$plat_nomor') ");
            $response = sendMessage(); // 1
            $return["allresponses"] = $response; // 2
            $return = json_encode($return); // 3 baris buat kirim notif
            echo "$alert";
        } else if ($seksi == 'Pdca & Pandemic') {
            mysqli_query($conn, "INSERT INTO permit VALUES('$kodeauto',(NOW()),'$nama','$asal_perusahaan','$email','$keperluan','$tanggal_in','$tanggal_out','$jam_in','$jam_out','$user','$seksi','5',null,null,'none','$no_telpon','$plat_nomor') ");
            $response = sendMessage(); // 1
            $return["allresponses"] = $response; // 2
            $return = json_encode($return); // 3 baris buat kirim notif
            echo "$alert";
        } else {
            mysqli_query($conn, "INSERT INTO permit VALUES('$kodeauto',(NOW()),'$nama','$asal_perusahaan','$email','$keperluan','$tanggal_in','$tanggal_out','$jam_in','$jam_out','$user','$seksi','1',null,null,'none','$no_telpon','$plat_nomor') ");
            $response = sendMessage(); // 1
            $return["allresponses"] = $response; // 2
            $return = json_encode($return); // 3 baris buat kirim notif
            echo "$alert";
        }
        
        
        
        
    } else {
        echo "<script>    
        Swal.fire({
            title: 'Data Anda Gagal Diinput',
            text: 'Silahkan Isi Data Dengan Benar!',
            icon: 'error',
            showCancelButton: false,
            allowOutsideClick : false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
          }).then((result) => {
            if (result.isConfirmed) {
              location = '../user/'
            }
          })
        
        </script>";
    }
}
?>