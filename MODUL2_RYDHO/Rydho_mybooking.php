<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>My Booking</title>

     <!-- source -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <link rel="stylesheet" href="Rydho.css">
</head>

<body>
     <!-- navbar -->
     <nav class="navbar navbar-expand-lg fixed-top justify-content-center" style="background-color: #b0884b !important;">
          <ul class="nav justify-content-center">
               <li class="nav-item">
                    <a class="nav-link" href="Rydho_home.php">Home</a>
               </li>
               <li class="nav-item">
                    <a class="nav-link" href="Rydho_booking.php">Booking</a>
               </li>
          </ul>
     </nav>

     <div style="padding-top: 80px;">
          <h3 style="font-weight: bold; text-align: center; margin: 40px 0 20px 0;">Terima Kasih Rydho_1202204122</h3>
     </div>

     <!-- Isi PHP -->
     <?php
     $Book_date = $_POST['Book_date'];
     $start_time = $_POST['start_time'];
     $durations = $_POST['durations'];
     $Cartype = $_POST['Cartype'];
     $Phone_number = $_POST['Phone_number'];
     $service = $_POST['service'];
     $total_price = 0;

     // total Pada Mobil
     if ($Cartype == 'ALL New Terios') {
          $total_price += (int)$durations * 250.000;
     } else if ($Cartype == 'New Sirion') {
          $total_price += (int)$durations * 1500.000;
     } else if ($Cartype == 'New Ayla') {
          $total_price += (int)$durations * 120.000;
     }
     ?>

     <div class="Cartype">
          <table class="table">
               <thead>
                    <tr>
                         <th scope="col">No Booking</th>
                         <th scope="col">Name</th>
                         <th scope="col">Check In</th>
                         <th scope="col">Check Out</th>
                         <th scope="col">Car Type</th>
                         <th scope="col">Phone number</th>
                         <th scope="col">Service</th>
                         <th scope="col">Total Price</th>
                    </tr>
               </thead>
               <tbody>
                    <tr>
                         <th><?php echo (rand()) ?></th>
                         <td><?php echo "Rydho_1202204122" ?></td>
                         <td><?php echo $Book_date . " " . $start_time ?></td>
                         <td><?php echo date('Y-m-d', strtotime($Book_date . "+ $durations days")) . " " . $start_time; ?></td>
                         <td><?php echo $Cartype ?></td>
                         <td><?php echo $Phone_number ?></td>
                         <td><?php
                              // total pada service mobil
                              if (isset($service)) {
                                   foreach ($service as $i) {
                                        echo "<li> $i </li>";
                                        if ($i == "Health Protocol") {
                                             $total_price += 200.000;
                                        } elseif ($i == "Driver") {
                                             $total_price += 250.000;
                                        } elseif ($i == "Fuel Filled") {
                                             $total_price += 300.000;
                                        }
                                   }
                              } else {
                                   echo "no service";
                              } ?></td>
                         <td><?php echo "Rp. $total_price" ?></td>
                    </tr>
               </tbody>
          </table>
     </div>

     <div class="d-grid gap-2" style="display: flex; justify-content: center; margin: 100px 0 56px 0;">
          <button class="btn btn-primary" style="width: 500px !important;" type="button"><a href="Rydho_booking.php" style="color: aliceblue; text-decoration: none; width:100%;">Back</a></button>
     </div>

     <!-- footer -->
     <footer>
          <div class="foot">
               <p>Created by Rydho_1202204122</p>
          </div>
     </footer>
</body>

</html>