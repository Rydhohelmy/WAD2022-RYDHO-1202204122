<!DOCTYPE html>
<html lang="en">

<head>

     <!-- source -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <link rel="stylesheet" href="Rydho.css">

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Home</title>


</head>

<body>
     <!-- navbar -->
     <nav class="navbar navbar-expand-lg fixed-top justify-content-center" style="background-color: #b0884b !important;">
          <ul class="nav justify-content-center">
               <li class="nav-item">
                    <a class="nav-link" style="border: solid black 1px; border-radius: 4px;" href="Rydho_home.php">Home</a>
               </li>
               <li class="nav-item">
                    <a class="nav-link" href="Rydho_booking.php">Booking</a>
               </li>
          </ul>
     </nav>

     <!-- Reservasi -->
     <section id="jenis_mobil">
          <div style="padding-top: 80px;">
               <h3 style="font-weight: bold; text-align: center; margin: 40px 0 20px 0;">Welcome to EAD Rent</h3>
          </div>

          <div class="mobil">
               <div class="card" style="width: 20%;">
                    <img src="MOBIL1.png" height="172px" class="card-img-top" alt="...">
                    <div class="card-body">
                         <h5 class="card-title list-group-item">ALL New Terios</h5>
                         <p class="card-text" style="text-align:center;">Rp. 250.000 / Day</p>
                    </div>
                    <ul class="list-group list-group-flush">
                         <li class="list-group-item">7 Kursi</li>
                         <li class="list-group-item">1500 HP</li>
                         <li class="list-group-item">Automatic</li>
                    </ul>
                    <div class="card-body">
                         <form action="Rydho_booking.php" method="POST" class="d-grid gap-2">
                              <input type="submit" name="ALL New Terios" style="margin-left: 52px;" class="btn btn-primary" value="Book Now">
                         </form>
                    </div>
               </div>
               <div class="card" style="width: 20%;">
                    <img src="MOBIL2.png" height="172px" class="card-img-top" alt="...">
                    <div class="card-body">
                         <h5 class="card-title list-group-item">New Sirion</h5>
                         <p class="card-text" style="text-align:center;">Rp. 1500.000 / Day</p>
                    </div>
                    <ul class="list-group list-group-flush">
                         <li class="list-group-item">5 Kursi</li>
                         <li class="list-group-item">1200 cc</li>
                         <li class="list-group-item">Automatic</li>
                    </ul>
                    <div class="card-body">
                         <form action="Rydho_booking.php" method="POST" class="d-grid gap-2">
                              <input type="submit"  name="New Sirion" style="margin-left: 52px;" class="btn btn-primary" value="Book Now">
                         </form>
                    </div>
               </div>
               <div class="card" style="width: 20%;">
                    <img src="MOBIL3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                         <h5 class="card-title list-group-item">New Ayla</h5>
                         <p class="card-text" style="text-align:center;">Rp, 120.000 / Day</p>
                    </div>
                    <ul class="list-group list-group-flush">
                         <li class="list-group-item">5 Kursi</li>
                         <li class="list-group-item">1200 cc</li>
                         <li class="list-group-item">Manual</li>
                    </ul>
                    <div class="card-body">
                         <form action="Rydho_booking.php" method="POST" class="d-grid gap-2">
                              <input type="submit" name="New Ayla" style="margin-left: 52px;" class="btn btn-primary" value="Book Now">
                         </form>
                    </div>
               </div>
          </div>
           
     </section>

     <!-- footer -->
     <footer>
          <div class="foot">
               <p>Created by Rydho_1202204122</p>
          </div>
     </footer>
</body>

</html>