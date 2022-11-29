<<<<<<< HEAD
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-primary">
      <div class="d-flex justify-content-left container-fluid">
        <ul class="navbar-nav" style="padding-left:100px; color:white">
          <li class="nav-item"><a class= "nav-link" href="Home_RYDHO.php">Home</a>
          <li class="nav-item"><a class= "nav-link" href="Add_RYDHO.php">MyCar</a>
        </ul> 
      </div>
    </nav>
    <div style="padding:50px;">
        <h1>Tambah Mobil</h1>
        <p>Tambah Mobil Baru Anda Ke List Show Room</p>
    </div>
    <form action="Config/insert.php" method="post" enctype="multipart/form-data" style="padding-left:50px;width:60%">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Mobil</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama mobil" name="nama_mobil">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Pemilik</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama - NIM" name="pemilik_mobil">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Merk</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="merk mobil" name="merk_mobil">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Beli</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="tanggal beli" name="tanggal_beli">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Foto</label>
            <input class="form-control" type="file" id="formFile" name="foto_mobil">
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="status_pembayaran" id="flexRadioDefault1" value="Lunas">
        <label class="form-check-label" for="flexRadioDefault1">
          Lunas
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="status_pembayaran" id="flexRadioDefault2" value="Belum Lunas">
        <label class="form-check-label" for="flexRadioDefault2">
          Belum Lunas
        </label>
      </div>
        <button type="submit" class="btn btn-primary" role="button" style= "width:100px; height:45px;margin-bottom:50px" name ="proses">Selesai</button>    
      </form>
    
        

=======
<?php
  require "../config/insert.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- My CSS -->
    <link rel="stylesheet" href="../assets/style/index.css">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand bg-primary navbar-dark">
      <div class="container">
        <div class="navbar-nav">
          <a class="nav-link" href="../index.php">Home</a>
          <a class="nav-link active" aria-current="page" href="#">MyCar</a>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Awal Tambah Mobil -->
    <section id="tambah-mobil">
      <div class="container">
        <div class="mt-4">
          <h2>Tambah Mobil</h2>
          <p>Tambah Mobil Baru Anda ke List Show Room</p>
        </div>
        <div class="row mt-5">
          <div class="col-10">
            <form action="ListCar_RYDHO.php" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="nama_mobil" class="form-label fw-bold">Nama Mobil</label>
                <input type="text" name="nama_mobil" class="form-control" id="nama_mobil">
              </div>
              <div class="mb-3">
                <label for="pemilik_mobil" class="form-label fw-bold">Nama Pemilik</label>
                <input type="text" name="pemilik_mobil" class="form-control" id="pemilik_mobil">
              </div>
              <div class="mb-3">
                <label for="merk_mobil" class="form-label fw-bold">Merk</label>
                <input type="text" name="merk_mobil" class="form-control" id="merk_mobil">
              </div>
              <div class="mb-3">
                <label for="tanggal_beli" class="form-label fw-bold">Tanggal Beli</label>
                <input type="date" name="tanggal_beli" class="form-control" id="tanggal_beli">
              </div>
              <div class="mb-3">
                <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="4"></textarea>
              </div>
              <div class="mb-3">
                <label for="gambar_mobil" class="form-label fw-bold">Gambar</label>
                <input class="form-control" name="gambar_mobil" type="file" id="Gambar_mobil">
              </div>
              <div class="mb-3">
                <span class="d-block mb-2 fw-bold">Status Pembayaran</span>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status_pembayaran" id="LUNAS" value="LUNAS">
                  <label class="form-check-label" for="LUNAS">LUNAS</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status_pembayaran" id="BELUM LUNASs" value="BELUM LUNAS">
                  <label class="form-check-label" for="BELUM LUNAS">BELUM LUNAS</label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary mb-5" name="add">Selesai</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Tambah Mobil -->

    <!-- Script -->
>>>>>>> 2bc689561517ef982cda63a111b638a8a84fa50b
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>