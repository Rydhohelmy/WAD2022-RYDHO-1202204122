<<<<<<< HEAD
<?php
    require 'config/connector.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP Praktikum WAD Modul 3</title>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
        <link rel="stylesheet" href="../style/myitem.css">
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
                            <a class="nav-link" href="Home_RYDHO.php">Home</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="">MyCar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <section class="content">
            <p class="main-text">Tambah Mobil</p>
            <p class="sub-text">Tambah Mobil Baru Anda Ke List Show Room</p>
            <div class="container">MODUL3_RYDHO
                <div class="row">
                    <?php
                        $query = mysqli_query($connect, "SELECT * FROM showroom_rydho_table ORDER BY id_mobil");
                        while($row = mysqli_fetch_array($query)) {
                                
                    ?>
                    <div class="col-4">
                        <div class="card">
                        <img class="card-img-top" src="assets/img/<?php echo $row['foto_mobil']?>" width="300" title="" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?= $row['nama_mobil'] ?></h5>
                                <p class="card-text"><?= $row['deskripsi'] ?></p>
                            </div>
                            <div class="container-fluid row">
                                <form action="Detail_RYDHO.php" method="post" class="col">
                                    <input type="hidden" name="id_mobil_detail" value="<?php echo $row['id_mobil']?>">
                                    <input type="submit" name="detail_car" value="Detail" class="btn btn-primary rounded-pill">
                                </form>
                                <form action="Config/delete.php" method="post" class="col">
                                    <input type="hidden" name="id_mobil_hapus" value="<?php echo $row['id_mobil']?>">
                                    <input type="submit" name="delete_car" value="Delete" class="btn btn-danger rounded-pill">
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </section>
    </body>
=======
<!doctype html>
<html lang="en">

<head>
  <title>create_RYDHO</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./assets/style/styles.css">

  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script src="./assets/script.js"></script>

  <style>

  </style>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light text-light bg-primary">
    <a class="navbar-brand text-light" href="#">EAD Showroom</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse row" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto col-lg-12">
        <li class="nav-item col-lg-9">
        </li>
        <li class="nav-item active">
          <a class="nav-link text-light" href="home.php"> <button type="button" class="btn btn-primary">Home</button></a>
        </li>
        <li class="nav-item  text-light">

          <a class="nav-link text-light" href="create_RYDHO.php"> <button type="button" class="btn btn-outline-light">Buat
              </button></a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container mx-auto my-5">
    <?php
    include './config/connect_RYDHO.php';
    require "../config/connector.php";
    require "../config/insert.php";
  
    // $result = mysqli_query($conn, "SELECT * FROM showroom");
    // echo mysqli_num_rows($result);
    // if(mysqli_num_rows($result) == 0) {
    //   header("Location: Add_RYDHO.php");
    // }
  
    $query = "SELECT * FROM Showroom_RYDHO_table";
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
      $rows[] = $row;
    }
    $jmlMobil = mysqli_num_rows($result);
    
    if(isset($_POST["add"])) {
      insert($_POST);
      echo "<meta http-equiv='refresh' content='3' />";
      echo "<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-bs-autohide='false'>
              <div class='toast-header'>
                <div class='bg-primary rounded me-2' style='width: 20px; height: 20px'></div>
                <strong class='me-auto'>Alert</strong>
                <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
              </div>
              <div class='toast-body'>
                Data berhasil ditambah
              </div>
            </div>";
    } elseif (isset($_POST["selesai"])) {
      echo "<meta http-equiv='refresh' content='3' />";
      echo "<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-bs-autohide='false'>
              <div class='toast-header'>
                <div class='bg-warning rounded me-2' style='width: 20px; height: 20px'></div>
                <strong class='me-auto'>Alert</strong>
                <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
              </div>
              <div class='toast-body'>
                Data berhasil diupdate
              </div>
            </div>";
    }
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
        <div class="container py-2">
          <div class="navbar-nav">
            <a class="nav-link" href="../index.php">Home</a>
            <a class="nav-link active" aria-current="page" href="#">MyCar</a>
          </div>
          <div class="add-button">
            <a href="Add_RYDHO.php" class="btn btn-light" role="button">Add Car</a>
          </div>
        </div>
      </nav>
      <!-- Akhir Navbar -->
  
      <!-- Awal List Car -->
      <section id="list-car">
        <div class="container">
          <div class="mt-4">
            <h2>My Show Room</h2>
            <p>List Show Room RYDHO - 1202204122</p>
          </div>
          <div class="row mt-5">
            <?php foreach($rows as $data) : ?>
              <div class="col-md-5 mb-5">
                <div class="card rounded-3 shadow" style="width: 28rem;">
                  <img src="../assets/images/<?= $data["MOBIL1.Png"]; ?>" class="card-img-top p-2 rounded-4" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?= $data["nama_mobil"]; ?></h5>
                    <p class="card-text"><?= $data["deskripsi"]; ?></p>
                    <a href="../pages/add_RYDHO.php?id=<?= $data["id_mobil"]; ?>" class="btn btn-primary rounded-5 px-5 me-3" role="button">Detail</a>
                    <a href="../config/delete_RYDHO.php?id=<?= $data["id_mobil"]; ?>" class="btn btn-danger rounded-5 px-5" role="button">Delete</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="pb-4">
            <p class="fw-bold">Jumlah Mobil: <?= $jmlMobil; ?></p>
          </div>
        </div>
      </section>
      <!-- Akhir List Car -->
  
      <!-- Script -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <script>
        const myToast = document.querySelector(".toast");
        const bsToast = new bootstrap.Toast(myToast);
        bsToast.show();
      </script>
    </body>
  </html>
    include './config/create_RYDHO.php';
    ?>

    <form action="home.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-lg-6 align-items-stretch">
          <div class="card h-100">
            <div class="card-header bg-primary"></div>
            <div class="card-body">

              <div class="form-group">
                <label for="">Name</label>
                <input required type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
              </div>

              <div class="form-group">
                <label for="">Deskripsi</label>
                <textarea required class="form-control" name="desc" id="" rows="3"></textarea>
              </div>

              <div>
                <label for="">Upload Gambar</label>
              </div>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="inputImg" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>

              <div class="my-2">
                <label for=""><strong>Kategori</strong></label>
                <div class="">
                  <label class="col-md-6 form-check">
                    <div class="row">
                      <div class="form-check col-md-6">
                        <input class="form-check-input" type="radio" name="cat" id="gridRadios2" value="Offline">
                        <label class="form-check-label" for="gridRadios2">
                          Offline
                        </label>
                      </div>
                      <div class="form-check col-md-6">
                        <input class="form-check-input" type="radio" name="cat" id="gridRadios3" value="Online">
                        <label class="form-check-label" for="gridRadios3">
                          Online
                        </label>
                      </div>
                    </div>

                  </label>
                </div>
              </div>


            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card align-items-stretch">
            <div class="card-header bg-danger"></div>
            <div class="card-body">

              <div class="form-group">
                <label for="">Tanggal</label>
                <input type="date" class="form-control" name="date" id="" aria-describedby="helpId" placeholder="">
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="">Jam Mulai</label>
                  <input type="time" class="form-control" name="start" required value="19:00" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group col-md-6">
                  <label for="">Jam Selesai</label>
                  <input type="time" class="form-control" name="end" value="20:00" required id="" aria-describedby="helpId" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="">Tempat</label>
                <input type="text" class="form-control" name="loc" id="" aria-describedby="helpId" placeholder="" required>
              </div>
              <div class="form-group">
                <label for="">Harga</label>
                <input type="number" class="form-control" name="price" id="" aria-describedby="helpId" placeholder="" required>
              </div>

              <div class="form-group">
                <label for="">Benefit</label>
                <div class="form-check">
                  <div class="row col-md-10">
                    <div class="col-md-4">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="benefit[]" id="" value="Snack" checked>
                        Snack
                      </label>
                    </div>

                    <div class="col-md-4">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="benefit[]" id="" value="Sertifikat" checked>
                        Sertifikat
                      </label>
                    </div>

                    <div class="col-md-4">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="benefit[]" id="" value="Souvenir" checked>
                        Souvenir
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group  text-right">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Cancel</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

>>>>>>> 2bc689561517ef982cda63a111b638a8a84fa50b
</html>