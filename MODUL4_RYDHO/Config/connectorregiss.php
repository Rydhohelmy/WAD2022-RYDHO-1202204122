<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "wad_modul4_rydho";

$connect = mysqli_connect($servername, $username, $password, $database, 4306);

$get_table = mysqli_query($connect, "SELECT * FROM user_rydho");

?>