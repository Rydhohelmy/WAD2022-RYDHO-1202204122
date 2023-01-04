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

    <?php if(isset($_SESSION['message'])) : ?>
        <div class="alert alert-success alert-dismissible fade show fade in" role="alert">
            <?= $_SESSION['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php 
        unset($_SESSION['message']);
    endif; ?>

    <body>
        <section class="content">
            <div class="left">
            </div>
            <div class="right">
                <form action="Config/postingLogin.php" method="POST" enctype="multipart/form-data">
                    <div class="row justify-content-between">
                        <h2 style="margin-bottom: 24px;">Login</h2>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input class="form-control" id="email" name='email'>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name='password'>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" name="check" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">Ingat Akun Saya</label>
                            </div>
                        </div>
                        <div class="mb-2">
                            <button type="submit" class="btn btn-primary" name="submit">Selesai</button>
                        </div>
                        <p>Anda belum punya akun? <a href="Register_RYDHO.php">Register</a></p>
                    </div>
                </form>
            </div>
        </section>
    </body>
</html> 