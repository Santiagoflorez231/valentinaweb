<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>


<body>
    <!-- Navegador -->
    <nav>
        <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
            <div class="bg-dark p-4">
                <div class="row d-flex">
                    <div class="col-3 ms-5">
                        <img src="img/Hello.png" alt="" width="90%">
                    </div>
                    <div class="col-8">
                        <div class="col-12 text-center mb-4">
                            <h5 class="text-body-emphasis text-primary-emphasis">¡Bienvenid@!</h5>
                            <span class="text-body-secondary">Aquí conocerás un mundo de arte y crochet.</span>
                        </div>
                        <div class="d-flex container justify-content-center mt-4">
                            <div class="col-5 me-4 ">
                                <h5 class="text-light text-center">Misión</h5>
                                <p class="text-secondary text-break">Brindar a la comunidad de Chochet un espacio acogedor donde encontrar peluches adorables y especiales, comprometiéndonos a ofrecer productos de la más alta calidad, un servicio excepcional
                                    y momentos de felicidad que perduren en la memoria de nuestros clientes.</p>

                            </div>
                            <div class="col-6 ms-4 ">
                                <h5 class="text-light text-center" href="">Visión</h5>
                                <p class="text-secondary text-break">Ser la tienda de peluches preferida en Chochet, ofreciendo una experiencia única y reconfortante a nuestros clientes a través de una cuidadosa selección
                                    de peluches de alta calidad que inspiren alegría y conexión emocional.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    </div>

    </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid p-0">
            <div class="col-9 p-1">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </div>
            
            <div class="col-1">
         
            <?php require_once('views/register.php') ?>
                <button  type="button" class="btn btn-dark btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">registrarse </button>
            </div>
            <div class="col-1.2 p-1 me-3">
                <button class="btn btn-dark btn-sm btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="bi bi-person-circle"> Iniciar sesión</span>

                </button>
            </div>


        </div>
    </nav>

    <!-- navegador 2 -->
    <nav class="navbar fixed-top ">
        <div class="container-fluid ">
            <div class="offcanvas offcanvas-end " tabindex="" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <!-- <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Inicia sesión </h5> -->
                    <button type="button" class="btn-close btn btn-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body text-center">
                    <div class="row">

                        <?php
                        if (empty($_GET['page'])) {
                            require_once('views/login.php');
                            // require_once('../views/register.php');

                        }

                        // }else{
                        //     if ($_GET['page'] = "register") {
                        //         require_once('../views/register.php');
                        //     }
                        // }

                        ?>
                        <div>
                        </div>



                    </div>
                </div>
            </div>

    </nav>
</body>

</html>
<div class="text-center p-0 col-8">


</div>