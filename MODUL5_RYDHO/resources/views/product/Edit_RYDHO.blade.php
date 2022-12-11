<?php
    include('config/connector.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP Praktikum WAD Modul 3</title>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
        <link rel="stylesheet" href="style/itemdetail.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
        crossorigin="anonymous">
    </head>
    <body>
        <section class="nav-top">
        <nav class="navbar navbar-expand-lg bg-primary">
                <div class="d-flex justify-content-left container-fluid">
                <ul class="navbar-nav" style="padding-left:100px;color:white">
                    <li class="nav-item"><a class= "nav-link" href="Home_RYDHO.php">Home</a>
                    <li class="nav-item"><a class= "nav-link" href="Listcar_RYDHO.php">MyCar</a>
                </ul> 
                </div>
            </nav>
        </section>
        <section class="content">
            <div class="container h-100">
                <p class="main-text"><b>Edit Mobil Show Room RYDHO</b></p>
                <p class="sub-text">Edit mobil Ayla</p>

                    <?php
                        $getdata = "SELECT * FROM showroom_rydho_table ORDER BY id_mobil";
                        $get = mysqli_query($connect, $getdata);

                        global $nama_mobil;
                        global $pemilik_mobil;
                        global $merk_mobil;
                        global $deskripsi;

                        while($row = mysqli_fetch_array($get)) {
                            $nama_mobil = $row["nama_mobil"];
                            $pemilik_mobil = $row["pemilik_mobil"];
                            $merk_mobil = $row["merk_mobil"];
                            $tanggal = $row["tanggal_beli"];
                            $deskripsi = $row["deskripsi"];
                            $foto = $row["foto_mobil"];
                            $status = $row["status_pembayaran"];
                        }  
                    ?>

                <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-5">
                        <div class="row justify-content-between" style="Padding-right: 48px;">
                            <img src="assets/img/MOBIL3.png" style="width:400" alt="">                      
                        </div>
                    </div>
                    <div class="col-7">
                        <form action="Config/edit.php" method="post">
                            <div class="row justify-content-between">
                                <div class="mb-3">
                                    <label class="form-label">Nama Mobil</label>
                                    <input class="form-control" id="mobil" name='mobil' value="<?php echo $nama_mobil?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama Pemilik</label>
                                    <input class="form-control" id="nama" name='nama' value="<?php echo $pemilik_mobil?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Merk</label>
                                    <input class="form-control" id="merk" name='merk' value="<?php echo $merk_mobil?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tanggal Beli</label>
                                    <input type="date" class="form-control" id="date" name="date" value="<?php echo $tanggal?>" disabled> 
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="textArea">Deskripsi</label>
                                    <textarea class="form-control" id="textArea" rows="5" name="deskripsi" disabled><?php echo $deskripsi?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="formFileDisabled" class="form-label">Foto</label>
                                    <input class="form-control" type="file" id="formFileDisabled" name="gambar">
                                </div>
                                <span style="font-weight:bold;">Status Pembayaran</span>
                                <div class="mb-3">
                                    <span>
                                        <input type="radio" name="status" value="Lunas" <?php echo $status == "Lunas" ? "checked" : ""?>>
                                        <label>Lunas</label>
                                        
                                        <input type="radio" name="status" value="Belum Lunas" <?php echo $status == "Belum Lunas" ? "checked" : ""?>>
                                        <label>Belum Lunas</label>
                                    </span>
                                </div>
                                <div class="mb-2">
                                    <button type="submit" class="btn btn-primary" name="SIMPAN">SIMPAN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
                ?>
        </section>
    </body>
</html>