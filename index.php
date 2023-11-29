<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>

</head>

<body>
    <?php require_once('parts/navegador.php') ?>
    <?php require_once('views/register.php')?>
    <!-- CARRUSEL -->
    <div class="position-relative">
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="caja" data-bs-interval="2000">
                        <div class="carousel-caption d-none d-md-block text-light">
                            <h3>¡Bienvenido!</h3>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="caja02" data-bs-interval="1000">
                        <div class="carousel-caption d-none d-md-block text-success">
                            <h3>Third slide label</h3>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="centrar">
                        <div class="caja03" id="t" data-bs-interval="1000">
                            <div class="carousel-caption">
                                <h3>Third slide label</h3>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>

    <div class="row mt-5 ms-4">
        <div class="col-3">
        <div class="card text-center" style="width: 18rem;">
            <img src="img/conito.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Crochet de halloween</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">Ir</a>
            </div>
        </div>
        </div>
        <div class="col-6">
        <div class="card text-center mx-3">
            <!-- <div class="card-header">
                Featured
            </div> -->
            <div class="card-body">
                <h5 class="card-title">¡BIENVENIDO A STORE CHOCHET!</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active ">
                            <img src="img/esfera.jpg" class="d-block w-100" width="300px" height="370px" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/esfera.jpg" class="d-block w-100" width="300px" height="370px" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/esfera.jpg" class="d-block w-100" width="300px" height="370px" alt="...">
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer text-body-secondary">
                <p>2 days ago</p>
            </div>
        </div>
        </div>
        <div class="col-3">
            
        <div class="card text-center" style="width: 18rem;">
            <img src="img/conito.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Crochet Navideño</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">Ir</a>
    
            </div>
        </div>
        </div>
    </div>
    </div>
</body>



</html>