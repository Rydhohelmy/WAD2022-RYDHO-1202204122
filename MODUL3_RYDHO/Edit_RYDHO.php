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
            <nav class="navbar navbar-expand-lg py-3 bg-primary">
                <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 100px;">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="Index.php">Home</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="myitem.php">MyCar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <section class="content">
            <div class="container h-100">
                <p class="main-text">Edit</p>
                <p class="sub-text">Edit mobil</p>

                    <?php
                        $getdata = "SELECT * FROM showroom_rydho_table ORDER BY id_mobil";
                        $get = mysqli_query($connect, $getdata);

                        // make gloabl variable for data
                        global $nama_mobil;
                        global $pemilik_mobil;
                        global $merk_mobil;
                        global $deskripsi;

                        // membuat array data
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
                        <img src="<?php echo $row['foto_mobil']?>" style="width:100%">
                        <!-- <img class="card-img-top img-responsive center-block d-block mx-auto" src="Image/mpv.png" alt="Card image cap" style="padding-top:16px; padding-bottom:36px; height: auto; width: 280px;"> -->
                        </div>
                    </div>
                    <div class="col-7">
                        <form action="../config/edit.php" method="post">
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
                                    <button type="submit" class="btn btn-primary" name="edit">Edit</button>
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