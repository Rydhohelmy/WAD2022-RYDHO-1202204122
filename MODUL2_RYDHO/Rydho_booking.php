<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Booking</title>

     <!-- source -->
     <link rel="stylesheet" href="Rydho.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
     <!-- navbar -->
     <nav class="navbar navbar-expand-lg fixed-top justify-content-center" style="background-color: #b0884b !important;">
          <ul class="nav justify-content-center">
               <li class="nav-item">
                    <a class="nav-link" href="Rydho_home.php">Home</a>
               </li>
               <li class="nav-item">
                    <a class="nav-link" style="border: solid black 1px; border-radius: 4px;" href="Rydho_booking.php">Booking</a>
               </li>
          </ul>
     </nav>

     <!-- form -->
     <div class="container">
          <h3 style="text-align: center; margin: 90px 0 40px 0;">Rent your car now!</h3>
          <div class="row justify-content-evenly">
               <div class="col-6">
                    <div>
                         <?php
                         if (array_key_exists("ALL New Terios", $_POST)) {
                              echo '<img src="MOBIL1.png" widht="200px" height="172px" alt="">';
                         } elseif (array_key_exists("New Sirion", $_POST)) {
                              echo '<img src="MOBIL2.png" widht="200px" height="172px" alt="">';
                         } elseif (array_key_exists("New AYla", $_POST)) {
                              echo '<img src="MOBIL3.png" widht="200px" height="172px" alt="">';
                         } else {
                              echo '<img src="MOBIL1.png" widht="200px" height="172px" alt="">';
                         }
                         ?>
                    </div>
               </div>
               <div class="col-6">
                    <form action="Rydho_mybooking.php" method="POST">
                         <div>
                              <div class="mb-3">
                                   <label for="name" class="form-label">Name</label>
                                   <input type="text" class="form-control" name="Rydho_1202204122" id="exampleFormControlInput1" value="Rydho_1202204122" disabled>
                              </div>
                              <div class="mb-3">
                                   <label for="date" class="form-label">Book Date</label>
                                   <input type="date" class="form-control" name="date" id="exampleFormControlInput1">
                              </div>
                              <div class="mb-3">
                                   <label for="exampleFormControlInput1" class="form-label">Start Time</label>
                                   <input type="time" class="form-control" name="start_time" id="exampleFormControlInput1">
                              </div>
                              <div class="mb-3">
                                   <label for="exampleFormControlInput1" class="form-label">Duration (Days)</label>
                                   <input type="number" class="form-control" name="duration" id="exampleFormControlInput1">
                              </div>
                              <div>
                                   <label for="">Pilih Mobil yang di RENTAL</label>
                                   <select class="form-select" name="mobil" style="margin-bottom: 16px;" aria-label="Default select example">
                                        <?php
                                        if (array_key_exists("ALL New terios", $_POST)) {
                                             echo '<option value="default">Pilihan</option>';
                                             echo '<option selected value="ALL New Terios">ALL New Terios</option>';
                                             echo '<option value="New Sirion">New Sirion</option>';
                                             echo '<option value="New Ayla">New Ayla</option>';
                                        } elseif (array_key_exists("New Sirion", $_POST)) {
                                             echo '<option value="default">Pilihan</option>';
                                             echo '<option value="ALL New Terios">ALL New Terios</option>';
                                             echo '<option selected value="New Sirion">New Sirion</option>';
                                             echo '<option value="New Ayla">New Ayla</option>';
                                        } elseif (array_key_exists("New Ayla", $_POST)) {
                                             echo '<option value="default">Pilihan</option>';
                                             echo '<option value="ALL New Terios">ALL New Terios</option>';
                                             echo '<option value="New Sirion">New Sirion</option>';
                                             echo '<option selected value="New Ayla">New ayla</option>';
                                        } else {
                                             echo '<option selected value="default">Pilihan</option>';
                                             echo '<option value="ALL New Terios">ALL New Terios</option>';
                                             echo '<option value="New Sirion">New Sirion</option>';
                                             echo '<option value="New Ayla">New Ayla</option>';
                                        }
                                        ?>
                                   </select>
                              </div>
                              <div class="mb-3">
                                   <label for="number" class="form-label">Phone Number</label>
                                   <input type="text" class="form-control" name="phone" id="exampleFormControlInput1">
                              </div>
                              <label for="services" class="form-label">Add Services</label>
                              <div class="form-check">
                                   <input class="form-check-input" type="checkbox" value="Health Protocol" name="service[]" id="flexCheckDefault">
                                   <label class="form-check-label" for="flexCheckDefault">
                                        Health Protocol / Rp. 200.000
                                   </label>
                              </div>
                              <div class="form-check">
                                   <input class="form-check-input" type="checkbox" value="Driver" name="service[]" id="flexCheckDefault">
                                   <label class="form-check-label" for="flexCheckDefault">
                                        Driver / Rp. 250.000
                                   </label>
                              </div>
                              <div class="form-check" style="margin-bottom: 16px;">
                                   <input class="form-check-input" type="checkbox" value="Fuel Filled" name="service[]" id="flexCheckDefault">
                                   <label class="form-check-label" for="flexCheckDefault">
                                        Fuel Filled / Rp. 300.000
                                   </label>
                              </div>
                              <div class="d-grid gap-2">
                                   <button class="btn btn-primary" style="background-color: #653684da !important; width: 550px !important;" type="submit">Book</button>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>

     <!-- footer -->
     <footer>
          <div class="foot">
               <p>Created by Rydho_1202204122</p>
          </div>
     </footer>
</body>

</html>