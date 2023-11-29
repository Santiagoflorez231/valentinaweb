<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/style.css">
  <title>Document</title>
</head>
<style>
</style>

<body>
  <div class="container-fluid position-relative mb-3">
    <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <li class="nav-item dropdown me-auto mb-2 mb-lg-0">
          <a class="nav-link dropdown-toggle text-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <button class="btn  btn-outline-primary"> <span class="bi bi-gear"></span></button>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="../index.php">cerrar sesión</a></li>
            <!-- <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li> -->
          </ul>
        </li>
        <!-- <a class="btn  btn-outline-primary mx-2"><span class="bi bi-gear"></span></a> -->
        <button class="navbar-toggler mx-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
          <span class="bi bi-cart3"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"></h5>
            <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>

          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">


              <div id="carrito" class="text-center">
                <img   src="../img/carrito_compras.png" width="200px">
                <ul id="items-carrito"></ul>
                <p class="text">Total: $<span id="total-carrito">0</span></p>
                <button class="vaciar" onclick="vaciarCarrito()">Vaciar Carrito</button>
</div>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <br>
  <br>
</body>

</html>