<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "modul3";

$connect = mysqli_connect($servername, $username, $password, $database, 4306);

$get_table = mysqli_query($connect, "SELECT * FROM showroom_rydho_table");
$jumlah_mobil = mysqli_num_rows($get_table); 

?>