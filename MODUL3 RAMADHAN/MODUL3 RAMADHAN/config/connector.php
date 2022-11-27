<?php
$connect = mysqli_connect("localhost", "root", "", "modul3", 3307);
// if(!$connect) {
//     die("Tidak terkoneksi");
// } else {
//     echo "Terkoneksi";
// }
$get_table = mysqli_query($connect, "SELECT * FROM showroom_ramadhan_table");
$jumlah_mobil = mysqli_num_rows($get_table);
?>