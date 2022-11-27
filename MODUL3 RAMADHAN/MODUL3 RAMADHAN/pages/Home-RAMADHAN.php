<?php
// $connect = mysqli_connect("localhost", "root", "", "modul3",3307);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP Praktikum WAD Modul 3</title>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
        <link rel="stylesheet" href="../style/Index.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
        crossorigin="anonymous">
    </head>
    <body>
        <section class="nav-top">
            <nav class="navbar navbar-expand-lg py-3 bg-primary">
                <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 100px;">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="Home-RAMADHAN.php">Home</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="ListCar-RAMADHAN.php">MyCar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <section class="content">
                <div class="row justify-content-center mx-auto d-flex align-items-center">
                    <div class="col">
                        <p class="main-text">Selamat Datang di Show Room Ramadhan</p>
                        <p class="sub-text">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus</p>
                        <a href="Add-RAMADHAN.php" class="btn btn-primary">My Car</a>
                        <div class="display">
                            <img class="card-img-top img-responsive d-block" src="../asset/image/logo-ead.png" alt="Card image cap" id="imagemobil" style="height: auto; width: 64px; margin-top: 36px;">
                            <p class="nama" style="margin-left: 24px;">Ramadhan_1202204096</p>
                        </div>
                    </div>
                    <div class="col">
                        <img class="card-img-top img-responsive center-block d-block mx-auto" src="../asset/image/mobilHome.png" alt="Card image cap" id="imagemobil" style="height: auto; width: 600px;">
                    </div>
                </div>
        </section>
    </body>
</html>