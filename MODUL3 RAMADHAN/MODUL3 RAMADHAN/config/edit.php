<?php 
    require './connector.php';

    if(isset($_POST['edit'])) {
        $nama_mobil = $_POST["nama"];
        $nama_pemilik = $_POST["pemilik"];
        $merk = $_POST["merk"];
        $tanggal_beli = $_POST["tanggal_beli"];
        $deskripsi = $_POST["deskripsi"];
        $status_mobil = $_POST["status"];

        $getdata = "SELECT * FROM showroom_ramadhan_table ORDER BY id_mobil";
        $get = mysqli_query($connect, $getdata);

        global $foto;

        while($row = mysqli_fetch_array($get)) {
            $foto = $row["foto_mobil"];
        }

        $photo_path = "../asset/images/".$foto;
        unlink($photo_path . $query_all);

        $query_syntax = "UPDATE showroom_ramadhan_table SET nama_mobil='$nama_mobil', pemilik_mobil='$nama_pemilik', merk_mobil='$merk', tanggal_beli='$tanggal_beli', deskripsi='$deskripsi', status_pembayaran='$status_mobil'";
        $edit_query = mysqli_query($connect, $query_syntax);

        header("Location:/WAD2022-RAMADHAN-1202204096/MODUL3%20RAMADHAN/pages/Edit-RAMADHAN.php");
    }
?>