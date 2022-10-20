<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <img class="logo" src="/img/logo.png" alt="swimmers">
                <button class="navbar-toggler bg-white" data-toggle="collapse" data-target="#miLista">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="miLista">
                    <ul class="navbar-nav">
                        <li class="nav-item mb-3">
                            <a class="nav-link text-white" href="#">Principal</a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link text-white" href="#row-cursos">Cursos</a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link text-white" href="#row-nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link text-white" href="#row-servicios">Servicios</a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link text-white" href="#row-contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container row py-5" id="row-nosotros">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <img src="/img/fondo4.png" alt="Atleta">
                    </div>
                    <div class="col-md-7 mt-4">
                        <h1 class="font-weight-bold title-color mb-3">Sobre Nosotros</h1>
                        <p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering
                            animata corpora quaeritis. Summus brains sit​​, morbo vel maleficia? De apocalypsi gorger
                            omero undead survivor dictum mauris. Hi mindless mortuis soulless creaturas, imo evil
                            stalking monstra adventus resi dentevil vultus comedat cerebella viventium. Qui animated
                            corpse.</p>
                        <p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering
                            animata corpora quaeritis. Summus brains sit​​, morbo vel maleficia? De apocalypsi gorger
                            omero undead survivor dictum mauris. Hi mindless mortuis soulless creaturas, imo evil
                            stalking monstra adventus resi dentevil vultus comedat cerebella viventium. Qui animated
                            corpse.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/fondo1.jpg" class="d-block" alt="..." height="770">
                </div>
                <div class="carousel-item">
                    <img src="/img/fondo4.jpg" class="d-block" alt="..." height="770">
                </div>
                <div class="carousel-item">
                    <img src="/img/fondo3.jpg" class="d-block" alt="..." height="770">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container" id="row-servicios">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-md-5 text-center">
                        <img src="assets/img5.png" alt="Atleta">
                    </div>
                    <div class="col-md-7 mt-4">
                        <h1 class="font-weight-bold title-color mb-3">Nuestros Servicios</h1>
                        <p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering
                            animata corpora quaeritis. Summus brains sit​​, morbo vel maleficia? De apocalypsi gorger
                            omero undead survivor dictum mauris. Hi mindless mortuis soulless creaturas, imo evil
                            stalking monstra adventus resi dentevil vultus comedat cerebella viventium. Qui animated
                            corpse.</p>
                        <p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering
                            animata corpora quaeritis. Summus brains sit​​, morbo vel maleficia? De apocalypsi gorger
                            omero undead survivor dictum mauris. Hi mindless mortuis soulless creaturas, imo evil
                            stalking monstra adventus resi dentevil vultus comedat cerebella viventium. Qui animated
                            corpse.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4 ml-4 mb-4">
            <div class="col">
                <img class="rounded-circle" src="/img/aliado1.jpg" alt="Aliado" height="236">
                <h4 class="font-weight-bold mt-4">LOREM IPSUM</h4>
                <p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering
                    animata corpora quaeritis. Summus brains sit​​.</p>
            </div>
            <div class="col">
                <img class="rounded-circle" src="/img/aliado2.jpg" alt="Aliado" height="236">
                <h4 class="font-weight-bold mt-4">LOREM IPSUM</h4>
                <p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering
                    animata corpora quaeritis. Summus brains sit​​.</p>
            </div>
            <div class="col">
                <img class="rounded-circle" src="/img/aliado3.jpg" alt="Aliado" height="236">
                <h4 class="font-weight-bold mt-4">LOREM IPSUM</h4>
                <p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering
                    animata corpora quaeritis. Summus brains sit​​.</p>
            </div>
        </div>

        <div class="row" id="row-frace">
            <div class="container text-center">
                <h3 class="text-white">Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne
                    lumbering animata corpora quaeritis. Summus brains sit​​.</h3>
                <h3 class="text-white mt-4 font-weight-bold">- AndyGeek</h3>
            </div>
        </div>
        <div class="row" id="row-contacto">
            <div class="container text-center">
                <div class="col-md-6 mx-auto">
                    <h1 class="title-color font-weight-bold">Contacto</h1>
                    <h5 class="mt-4">Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne
                        lumbering animata corpora quaeritis. Summus brains sit​​.</h5>
                    <div class="input-group mt-5">
                        <input class="form-control" type="text" placeholder="Email">
                        <button class="btn">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="row text-white">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-4 px-5">
                        <h4 class="font-weight-bold mb-4">NOSOTROS</h4>
                        <p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering
                            animata corpora quaeritis. Summus brains sit​​.</p>
                    </div>
                    <div class="col-lg-4 px-5">
                        <h4 class="font-weight-bold mb-4">CREDITOS</h4>
                        <a href="https://www.freepik.com/free-photos-vectors/water">Water psd created by freepik -
                            www.freepik.com</a>
                    </div>
                    <div class="col-lg-4 px-5">
                        <h4 class="font-weight-bold mb-4">CONTACTANOS</h4>
                        <div class="d-flex">
                            <span class="material-icons">
                                local_phone
                            </span>
                            <p class="ml-3">(01) 555 5555</p>
                        </div>
                        <div class="d-flex">
                            <span class="material-icons">
                                house
                            </span>
                            <p class="ml-3">Jr. lorem ipsum #777</p>
                        </div>
                        <div class="d-flex">
                            <span class="material-icons">
                                email
                            </span>
                            <p class="ml-3">andygeek@andygeek.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-firestore.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

    <script>
        // Your web app's Firebase configuration
        var firebaseConfig = {
            apiKey: "xxx",
            authDomain: "xxx",
            databaseURL: "xxx",
            projectId: "xxx",
            storageBucket: "xxx",
            messagingSenderId: "xxx",
            appId: "xxx"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
    </script>

    <script src="app.js"></script>
</body>

</html>