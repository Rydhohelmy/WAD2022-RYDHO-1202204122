<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP Praktikum WAD Modul 4</title>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
        <link rel="stylesheet" href="assets/styles/Register.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
        crossorigin="anonymous">
    </head>

    <?php include("Config/connectorregiss.php"); ?>
    <?php if (isset($_SESSION['register']) && $_SESSION['register'] == "Gagal") {$_SESSION['register'] = ''; ?>
        <div class="alert alert-warning m-0 p-2 alert-dismissible" role="alert">Email yang anda buat sudah terdaftar!
            <button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>

    <body>
        <section class="content">
            <div class="left">
            </div>
            <div class="right">
                
                <form action="Config/postingRegister.php" method="POST">
                    <div class="row justify-content-between">
                        <h2 style="margin-bottom: 24px;">Register your Account</h2>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input class="form-control" id="mobil" name='email'>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input class="form-control" id="nama" name='nama'>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor Handphone</label>
                            <input class="form-control" id="merk" name='no_hp'>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kata Sandi</label>
                            <input class="form-control" id="nama" name='katasandi'>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Konfirmasi Kata Sandi</label>
                            <input class="form-control" id="merk" name='konfirmasi_katasandi'>
                        </div>
                        <div class="mb-2">
                            <button type="submit" class="btn btn-primary" name="submit" style="margin-top: 24px;">Selesai</button>
                        </div>
                        <p>Anda sudah punya akun? <a href="Login_RYDHO.php">Login</a></p>
                    </div>
                </form>
            </div>
        </section>
    </body>
</html> 