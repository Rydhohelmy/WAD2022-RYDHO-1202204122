<?php 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- My CSS -->
    <link rel="stylesheet" href="assets/style/style.css">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <!-- Awal Home -->
    <section id="home">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h1>Selamat Datang di Showroom Rydho</h1>
            <p>Selamat datang di Website Showroom WAD anda dapat melihat lihat isi showroom</p>
            <a class="btn btn-primary" href="pages/ListCar_RYDHO.php" role="button">MyCar</a>
            <div>
              <img src="assets/images/logo-ead.png" alt="Logo EAD" width="100">
            </div>
          </div>
          <div class="col-md-6">
            <img class="rounded-4" src="assets/img/MOBIL1.png" alt="">
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Home -->

    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand bg-primary navbar-dark">
      <div class="container">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="pages/ListCar_RYDHO.php">MyCar</a>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>