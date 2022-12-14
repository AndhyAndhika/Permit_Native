<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../koneksi.php'; ?>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Permit | Cari</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <!-- Vanilla CSS -->
    <link rel="stylesheet" href="../asset/style/css/style.css" />
    <script src="https://kit.fontawesome.com/630a92c5e5.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../asset/img/logo-mini.png" />
</head>

<body>
    <section class="searchTamu">
        <div class="bg-image" style="background-image: url('../asset/img/nmatas.jpg'); height: 90vh">
            <div class="align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.5)">
                <div class="col-12" style="height: 25%;"></div>
                <div class="col-7 card h-50 mx-auto justify-content-center p-1 pt-5 pt-md-3 p-lg-5" style="border-radius: 30px; background: hsla(0, 0%, 100%, 0.5); backdrop-filter: blur(50px)">
                    <img class="img-fluid mb-4" src="../asset/img/logo.png" alt="logonm" style="width: 350px" />
                    <form class="d-flex" role="search" method="get" action="details">
                        <input class="form-control" type="text" placeholder="Masukan Asal Perusahaan" name="cari" style="height: 50px; width: 100%" required />
                        <button class=" btn btn-primary fa-solid fa-magnifying-glass p-10 ms-2 d-none d-xl-block d-lg-block d-md-block shadow" type="submit" value="Search" name="submit"></button>
                        <a class=" btn btn-dark fa-solid fa-house-chimney ms-1 pt-3 text-center d-none d-xl-block d-lg-block d-md-block shadow" href="../user/"></a>
                    </form>
                    <div class="col d-xl-none d-lg-none d-md-none mt-3">
                        <form class="d-flex align-items-center justify-content-center text-center me-2" role="search" method="get" action="details">
                            <button class=" btn btn-primary fa-solid fa-magnifying-glass p-2 m-1 shadow" type="submit" value="Search" name="submit"></button>
                            <a class=" btn btn-dark fa-solid fa-house-chimney p-2 m-1 shadow" href="../user/"></a>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <footer class="m-2 justify-content-center align-items-center" style="height: 5vh">
            <div class="container-fluid">
                <div class="col-12 p-4 text-center">
                    <p>&copy; 2022 PT Astra Otoparts Tbk, divisi Nusametal. Seluruh hak cipta dilindungi oleh undang-undang</p>
                </div>
            </div>
        </footer>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>