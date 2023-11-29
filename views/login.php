<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <span>
        <img src="img/crea.png" alt="" width="300px">
    </span>
    <form>
        <div class="mt-5 mb-3">
            <input type="email" class="form-control rounded-pill border border-primary-subtle text-center" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <input type="password" class="form-control rounded-pill border border-primary-subtle text-center" id="exampleInputPassword1" placeholder="Password">
        </div>
    </form>
    <div>
        
        <!-- <a name="register" href="index.php?page=register" type="submit" class="">¡Registrate!</a><br> -->
        <a href="navegador/iniciar.php" type="submit" class="btn btn-dark col-5 rounded-5 rounded-top-1">Ingresar</a>
    </div>
  





    <!-- Modal -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-4" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mt-5 mb-3">
                            <input type="email" class="form-control rounded-pill border border-primary-subtle text-center" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control rounded-pill border border-primary-subtle text-center" id="exampleInputPassword1" placeholder="Password">
                        </div>
                    </form>
                    <div>
                        <a name="register" href="index.php?page=login" type="submit" class="">¡Registrate!</a><br>
                        <a href="" type="submit" class="btn btn-dark col-5 rounded-5 rounded-top-1">Ingresar</a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div> -->

<?php 

require_once('register.php')
?>


</body>

</html>