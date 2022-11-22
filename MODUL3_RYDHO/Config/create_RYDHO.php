<?php 
  require "connector.php";

  function upload() {
    $namaFile = $_FILES["gambar_mobil"]["name"];
    $tmpName = $_FILES["gambar_mobil"]["tmp_name"];

    move_uploaded_file($tmpName, "../assets/img/" . $namaFile);
    return $namaFile;    
  }

  function insert($data) {
    global $conn;
    $nama_mobil = $data["nama_mobil"];
    $pemilik_mobil = $data["pemilik_mobil"];
    $merk_mobil = $data["merk_mobil"];
    $tanggal_beli = $data["tanggal_beli"];
    $deskripsi = $data["deskripsi"];
    $status_pembayaran = $data["status_pembayaran"]; 
    $gambar_mobil = upload();
    $query = "INSERT INTO showroom_RYDHO_table VALUES ('', '$nama_mobil', '$pemilik_mobil', '$merk_mobil', '$tanggal_beli', '$deskripsi', '$gambar_mobil', '$status_pembayaran')";

    mysqli_query($conn, $query);
  }
?>