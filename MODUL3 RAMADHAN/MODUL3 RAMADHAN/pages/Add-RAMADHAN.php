
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP Praktikum WAD Modul 3</title>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
        <link rel="stylesheet" href="../style/AddItem.css">
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
                            <a class="nav-link" href="./Home-Ramadhan.php">Home</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="#">MyCar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <section class="content">
            <p class="main-text">Tambah Mobil</p>
            <p class="sub-text">Tambah Mobil Baru Anda Ke List Show Room</p>
            <form action="../config/insert.php" method="POST" enctype="multipart/form-data">
                <div class="row justify-content-between">
                    <div class="mb-3">
                        <label class="form-label">Nama Mobil</label>
                        <input class="form-control" id="mobil" name='mobil'>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Pemilik</label>
                        <input class="form-control" id="nama" name='nama'>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Merk</label>
                        <input class="form-control" id="merk" name='merk'>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Beli</label>
                        <input type="date" class="form-control" id="date" name="date" placeholder="yyyy/mm/dd">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="textArea">Deskripsi</label>
                        <textarea class="form-control" id="textArea" rows="5" name="deskripsi"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFileDisabled" class="form-label">Foto</label>
                        <input class="form-control" type="file" id="formFileDisabled" name="gambar">
                    </div>
                    <span style="font-weight:bold;">Status Pembayaran</span>
                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="lunas">
                            <label class="form-check-label" for="inlineRadio1">Lunas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="belum lunas">
                            <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
                        </div>
                    </div>
                    <div class="mb-2">
                        <!-- <a href="Ramadhan_MyBooking.php" class="btn btn-primary w-100">Submit</a> -->
                        <button type="submit" class="btn btn-primary" name="proses">Selesai</button>
                    </div>
                </div>
            </form>
        </section>
    </body>
</html>