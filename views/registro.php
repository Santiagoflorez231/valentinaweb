<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        .error {
            color: red;
        }
    </style>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-12 text-center">
                        <img src="../img/registrate.png" width="200px" alt="">
                    </div>
                    <form >

                        <div class="mt-5 mb-3 col-6">
                            <input type="text" id="name" name="nombre" autocomplete="name" placeholder="Name">
                            <span class="error" id="errornombre"></span>
                        </div>
                        <!-- <div class="mt-5 mb-3 col-6">
                        <input type="text" class="form-control rounded-pill border border-primary-subtle text-center" id="Lastname" placeholder="Last name">
                    </div>
                    <div class="mt-2 mb-3 col-12">
                        <input type="text" class="form-control rounded-pill border border-primary-subtle text-center" autocomplete="username" required name="username" id="user" placeholder="User">
                        <span class="error" id="erroruser"></span>
                    </div>

                    <div class="mt-2 mb-3">
                        <input type="email" class="form-control rounded-pill border border-primary-subtle text-center" id="email" autocomplete="username" name="email placeholder=" Email address">
                        <div id="emailHelp" class="form-text text-center">We'll never share your email with anyone else.</div>
                        <span class="error" id="erroremail"></span>
                    </div>

                    <div class="mt-2 mb-3 col-6">
                        <input type="password" class="form-control rounded-pill border border-primary-subtle text-center" name="password" autocomplete="current-password" id="pasword1" placeholder="Password">
                        <div id="emailHelp" class="form-text text-center">We'll never share your password with anyone else.</div>
                        <span class="error" id="errorpassword"></span>
                    </div>

                    <div class="mt-2 mb-3 col-6">
                        <input type="password" class="form-control rounded-pill border border-primary-subtle text-center" name="password2" autocomplete="new-password" id="password2" placeholder="Password">
                        <div id="emailHelp" class="form-text text-center">Repeat password.</div>
                        <span class="error" id="errorpassword"></span>
                    </div> -->
                        <button type="button">hola</button>

                    </form>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->

                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        var nombre = document.getElementById('name').value;
            console.warn(nombre);
    </script>
</body>

</html>