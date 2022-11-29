<?php 
    require './connector.php';

    if(isset($_POST['edit'])) {
        $nama_mobil = $_POST["nama"];
        $nama_pemilik = $_POST["pemilik"];
        $merk = $_POST["merk"];
        $tanggal_beli = $_POST["tanggal_beli"];
        $deskripsi = $_POST["deskripsi"];
        $status_mobil = $_POST["status"];

        $getdata = "SELECT * FROM showroom_rydho_table ORDER BY Id_mobil";
        $get = mysqli_query($connect, $getdata);

        global $foto;

        while($row = mysqli_fetch_array($get)) {
            $foto = $row["foto_mobil"];
        }

        $photo_path = "../assets/img/".$foto;
        unlink($photo_path . $query_all);

        $query_syntax = "UPDATE showroom_rydho_table SET nama_mobil='$nama_mobil', pemilik_mobil='$nama_pemilik', merk_mobil='$merk', tanggal_beli='$tanggal_beli', deskripsi='$deskripsi', status_pembayaran='$status_mobil'";
        $edit_query = mysqli_query($connect, $query_syntax);
    }
?>