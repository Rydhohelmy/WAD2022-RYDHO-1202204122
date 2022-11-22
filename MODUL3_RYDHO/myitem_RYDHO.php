<?php
include('Connect_RYDHO.php');
$query = "SELECT * FROM showroom_rydho_table";
$hasil = mysqli_query($conne, $query);

?>

<!doctype html>
<html lang="en">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
   
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>

    <title>My Item</title>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark sticky-top" style="background-color: #3563E9;" >
<div class="container">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" >
            <ul class="navbar-nav  mx-auto">
                <li class="nav-item" >
                    <a class="nav-link" href="Home_RYDHO.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Add_RYDHO.php">MyCar</a>
                </li>  
            </ul>
          <button class="btn btn-outline-light" button>
                    <a class="nav-link" type="Add Item" href="Add_RYDHO.php" style= "color: white" >Add Car</a>
        </div>
    </div>
</nav>
<body>
<section id="MyItem" class="p-6"> 
<div class="container">
        <br><h1 class="text-left"><b>My Show Room</b></h1>
        <p style="color: grey">
        List Show Room Rydho - 1202204122</p><br>
        </div>

        <section class="jumbotron text-center">
        <div class="container">
            <?php if (mysqli_num_rows($hasil) <= 0) { ?>
                <br>
                <br>
                <h1 class="display-7"> No Car List</h1>
                <div class=" text-muted text-center text-small">
                    <p> Please, Add Car List Now </p>
                </div>


            <?php } ?>

<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5">
    <?php while ($row = mysqli_fetch_array($hasil)) { ?>
        <div class="col">
            <div class="card">
                <img src="asset/<?= $row['foto'] ?>" class="card-img-top" alt="..." width="960" height="300">
                <div class="card-body">
                    <h6 class="card-title"><?= $row['nama_mobil'] ?> </h6>
                    <div class="clearfix">
                        <p class="mb-0 float-start"><?= $row['deskripsi'] ?></p>
                    </div>
                    <br>
                    <br>
                    <div class=" mb-3 d-flex justify-content-center">
                        <a class="btn btn-primary" href="Add_RYDHO?id_mobil=<?= $row['id_mobil'] ?>"> Show More </a>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>

</div>

</div>
</section><br><br>




</body>

    
</body>