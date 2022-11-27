<?php
 
    include('connector.php');

    if(isset($_POST['proses'])) {
        $idmobil = rand(120000,130000);
        $mobil = $_POST['nama_mobil'];
        $nama = $_POST['pemilik_mobil'];
        $merk = $_POST['merk_mobil'];
        $date = $_POST['tanggal_beli'];
        $deskripsi = $_POST['deskripsi'];
        $status = $_POST['status_pembayaran'];
        
        
        $gambar = $_FILES['foto_mobil']['name'];
        $file_tmp = $_FILES['foto_mobil']['tmp_name'];
        $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        move_uploaded_file($file_tmp, 'assets/img/'.$gambar);
        
        $query = "INSERT INTO showroom_rydho_table(id_mobil, nama_mobil, pemilik_mobil, 
        merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES('$idmobil', '$mobil', '$nama', '$merk', '$date', '$deskripsi', '$gambar', '$status')";
        $query_value = mysqli_query($connect, $query);

        if($query_value) {
            echo "<script>alert('Data telah ditambahkan')</script>";
            echo "<meta http-equiv='refresh' content='1 url=Listcar_RYDHO.php'>";
        } else {
            echo "<script>alert('Gagal ditambahkan')</script>";
            echo "<meta http-equiv='refresh' content='1 url=Home_RYDHO.php'>";
        }
    }
?>