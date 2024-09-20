<!DOCTYPE html>
<html>
    <head>
        <title>Tugas 3</title>
        <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <!--<link rel="stylesheet" href="../css/style.css">-->

        <style>
            #bgheader{
                background-color: rgb(142, 180, 250);
                padding: 25px 0px;
                text-align: center;
                font-size: 40px;
                font-family: 'Acme';
            }

            body{
                font-family: 'Acme';
            }

            tbody{
                font-family: 'Acme-serif';
            }

            .header-image{
                width: 100%;
                max-height: 250px;
                object-fit: cover;
            }

            .navbar{
                background-color: rgb(142, 180, 250);
                margin-bottom: 50px;
            }

            .card{
                margin: 10px;
            }
            .card-img-top {
                width: 100%;
                height: 200px;
                object-fit: cover;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <header>
                <p id="bgheader">ES TEH JWD</p>
                <!--<img src="img/gb1.jpg" class="header-image">
                <img id="headerImage" class="header-image" alt="es teh">
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        const img = document.getElementById("headerImage");
                        img.src = "layout/img/gb1.jpg";
                        img.onerror = () => img.src = "../layout/img/gb1.jpg";
                    });
                </script>-->
                <nav class="navbar navbar-expand-sm">
                    <div class="container-fluid">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link active" href="../index.php">Beranda</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link active" href="/assesment/view/form-pesanan.php">Daftar Menu</a>
                        </li>
                        <li class="nav-item active">
                            <?php
                            if (isset($_SESSION['login']) && $_SESSION['login']) {
                                echo '<a class="nav-link active" href="/assesment/view/modifikasi.php">Modifikasi Pesanan</a>';
                            } else {
                                echo '<a class="nav-link active" href="/assesment/auth/login.php">Modifikasi Pesanan</a>';
                            }
                            ?>
                        </li>
                    </ul>
                    <?php if (isset($_SESSION['login']) && $_SESSION['login']) {?>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/assesment/auth/logout.php">logout</a>
                            </li>
                        </ul>
                    <?php } ?>
                    </div>
                  </nav>
            </header>
        </div>