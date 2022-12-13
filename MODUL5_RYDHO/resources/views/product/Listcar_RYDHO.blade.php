<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        <section class="nav-top">
            <nav class="navbar navbar-expand-lg bg-primary">
                <div class="d-flex justify-content-left container-fluid">
                <ul class="navbar-nav" style="padding-left:100px;color:white">
                    <li class="nav-item"><a class= "nav-link" href="/Home">Home</a>
                    <li class="nav-item"><a class= "nav-link" href="Listcar_RYDHO.php">MyCar</a>
                </ul> 
                <ul class="navbar-nav ms-auto" style="margin-right: 110px;">
                        <li class="nav-item mx-1">
                            <a href="/Addcar" class="btn btn-light" type="button">Add Car</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a href="Profile_RYDHO.php" class="btn btn-light" type="button">Profile</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <section class="content">
            <div style="padding:50px;">
            <p class="main-text"><b>Show Room RYDHO</b></p>
            <p class="sub-text">List Show Room RYDHO-1202204122</p>
            <div class="container">
                <div class="row">
                    @foreach ($products as $prod)
                    <div class="col-4">
                        <div class="card">
                        <img class="card-img-top" src="/img/MOBIL1.png" width="300" title="" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$prod->name}}</h5>
                                <p class="card-text">{{$prod->Description}}</p>
                            </div>
                            <div class="container-fluid row">
                                <form action="Detail_RYDHO.php" method="post" class="col">
                                    <input type="hidden" name="id_mobil_detail" value="">
                                    <input type="submit" name="detail_car" value="Detail" class="btn btn-primary rounded-pill">
                                </form>
                                <form action="Config/delete.php" method="post" class="col">
                                    <input type="hidden" name="id_mobil_hapus" value="">
                                    <input type="submit" name="delete_car" value="Delete" class="btn btn-danger rounded-pill">
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </body>
</html>