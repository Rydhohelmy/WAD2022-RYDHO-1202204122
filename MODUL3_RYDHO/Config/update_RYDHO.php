<?php 
  require "connector.php";

  function edit($data) {
    global $conn;
    $id_mobil = $data["id_mobil"];
    $nama_mobil = $data["nama_mobil"];
    $pemilik_mobil = $data["pemilik_mobil"];
    $merk_mobil = $data["merk_mobil"];
    $tanggal_beli = $data["tanggal_beli"];
    $deskripsi = $data["deskripsi"];
    $status_pembayaran = $data["status_pembayaran"]; 
    $gambar_lama = $data["gambar_mobil"];

    if($_FILES["gambar_mobil"]["error"] === 4) {
      $gambar_mobil = $gambar_lama;
    } else {
      $gambar_mobil = upload();
    }

    $query = "UPDATE showroom_RYDHO_table SET
                nama_mobil = '$nama_mobil',
                pemilik_mobil = '$pemilik_mobil',
                merk_mobil = '$merk_mobil',
                tanggal_beli = '$tanggal_beli',
                deskripsi = '$deskripsi',
                foto_mobil = '$gambar_mobil',
                status_pembayaran = '$status_pembayaran'
              WHERE id_mobil = '$id_mobil'";

    mysqli_query($conn, $query);
  }
?>