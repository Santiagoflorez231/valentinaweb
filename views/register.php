<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario.css">
    <title>Document</title>
</head>
<body>


<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Registro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="col-12 text-center">
                        <img src="img/registrate.png" width="200px" alt="">
                    </div>
                <form id="formulario" class="row">
                    
                    <div class="mt-5 mb-3 col-6 text-center d-block " id="grupo_name" >
                        <div class="d-flex">
                        <input type="text" class="form-control rounded-pill border border-primary-subtle text-center "  id="name" name="name" placeholder="Name">
                        <i class=" bi bi-check2 img_validation"></i>
                        </div>
                        
                        <div id="errornombre" class="form-text text-center " ></div>
                    </div>
                    
                    <div class="mt-5 mb-3 col-6" id="grupo_lastname">
                        <div class="d-flex">
                        <input type="text" class="form-control rounded-pill border border-primary-subtle text-center correct" id="lastname" name="lastname"  placeholder="Last name">
                        <i class="img_validation bi bi-check2"></i>   
                        </div>
                        
                        <div id="errorlastname" class="form-text text-center " ></div>
                    </div>

                    <div class="mt-2 mb-3 col-12 d-block" id="grupo_user">
                      <div class="d-flex">
                      <input type="text" class="form-control rounded-pill border border-primary-subtle text-center correct" autocomplete="username" name="user" id="user" placeholder="User">
                        <i class="img_validation bi bi-check2"></i>
                      </div>
                      <div id="erroruser" class="form-text text-center " ></div>
                     
                    </div>
                    
                    <div class="mt-2 mb-3 col-6 d-block" id="grupo_password1">
                        <div class="d-flex">
                        <input type="password" class="form-control rounded-pill border border-primary-subtle text-center correct" name="password1" autocomplete="current-password" id="password1" placeholder="Password">
                        <i class="img_validation bi bi-check2"></i>
                        </div>
                        <div id="emailHelp" class="form-text text-center">We'll never share your password with anyone else.</div>
                        <div id="errorpassword" class="form-text text-center"></div>
                    </div>
                    
                    <div class="mt-2 mb-3 col-6" id="grupo_password2">
                        <div class="d-flex">
                        <input type="password" class="form-control rounded-pill border border-primary-subtle text-center  correct" name="password2" autocomplete="new-password" id="password2" placeholder="Password">
                        <i class="img_validation bi bi-check2"></i>
                        </div>
                        <div id="emailHelp" class="form-text text-center">Repeat password.</div>
                        <div id="errorpassword2" class="form-text text-center"></div>
                    </div>
                    
                    <div class="text-center mb-3">
                    <button type="submit" class="btn btn-secondary col-4">registrarse</button>
                    </div>

                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancelar</button>

                </div>
            </div>

        </div>
    </div>
</div>
<script src="js/form.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>