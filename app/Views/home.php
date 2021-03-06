<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SteinS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">SteinS</a>
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="search-menu p-4">
        <div class="container">
            <form class="d-flex col-4 mx-auto" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="book-list">
        <div class="container" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); gap: 12px;">
            <div class="card p-4" style="font-size: 0.8rem; background-color: rgb(248, 249, 250)">
                <img src="img/manga_demon-slayer.jpg" class="card-img-top" alt="Demon Slayer">
                <div class="card-body p-0 mt-2">
                    <h5 class="card-title">Demon Slayer</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="card p-4" style="font-size: 0.8rem; background-color: rgb(248, 249, 250)">
                <img src="img/manga_kanojo-okari.jpg" class="card-img-top" alt="Kanojo Okarishimasu">
                <div class="card-body p-0 mt-2">
                    <h5 class="card-title">Kanojo Okarishimasu</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="card p-4" style="font-size: 0.8rem; background-color: rgb(248, 249, 250)">
                <img src="img/manga_demon-slayer.jpg" class="card-img-top" alt="Demon Slayer">
                <div class="card-body p-0 mt-2">
                    <h5 class="card-title">Demon Slayer</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="card p-4" style="font-size: 0.8rem; background-color: rgb(248, 249, 250)">
                <img src="img/manga_kanojo-okari.jpg" class="card-img-top" alt="Kanojo Okarishimasu">
                <div class="card-body p-0 mt-2">
                    <h5 class="card-title">Kanojo Okarishimasu</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="card p-4" style="font-size: 0.8rem; background-color: rgb(248, 249, 250)">
                <img src="img/manga_demon-slayer.jpg" class="card-img-top" alt="Demon Slayer">
                <div class="card-body p-0 mt-2">
                    <h5 class="card-title">Demon Slayer</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>