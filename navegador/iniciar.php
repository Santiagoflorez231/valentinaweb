<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/carrito.css">
    <title>Document</title>
</head>

<style>
    .letra {
        font-family: 'Dancing Script', cursive;
    }
</style>

<body>

    <?php require_once('../parts/compras.php'); ?>

    <script>
        fotos = new Array();

        fotos[0] = ['../img/img1.jpg'],
        fotos[1] = ['../img/img2.jpg'],
        fotos[2] = ['../img/img3.jpg'],
        fotos[3] = ['../img/img4.jpg'],
        fotos[4] = ['../img/img5.jpg'];
        fotos[5] = ['../img/img6.jpg'];
        fotos[6] = ['../img/img7.jpg'];
        fotos[7] = ['../img/img8.jpg'];
        fotos[9] = ['../img/img9.jpg'];
    </script>


    <script>
        const productos = [{
                id: 1,
                foto: fotos[0],
                nombre: 'Kit navideño x5',
                descripcion: "¡Estos pequeños le daran color a tu árbolito!",
                precio: 24000
            },
            {
                id: 2,
                foto: fotos[1],
                nombre: 'Reno Cool',
                descripcion: "Simpático ¿verdad?",
                precio: 10000
            },
            {
                id: 3,
                foto: fotos[2],
                nombre: 'Kit navideño x 4',
                descripcion: "¡Estos pequeños le daran color a tu árbolito!",
                precio: 18000
            },
            {
                id: 4,
                foto: fotos[3],
                nombre:'Muñeco bien vestido',
                descripcion: "Un caballero, ¿verdad?",
                precio: 14000
            },
            {
                id: 5,
                foto: fotos[4],
                nombre:'Muñeco de nieve mini',
                descripcion: "Hermoso amiguito",
                precio: 10000
            },
            {
                id: 6,
                foto: fotos[5],
                nombre:'Grinch',
                descripcion: "¡Este hermoso Grinch te esta esperando!",
                precio: 18000
            },
            {
                id: 7,
                foto: fotos[6],
                nombre:'Papa Noel feliz',
                descripcion: "Que lindo es sonreir",
                precio: 15000
            },
            {
                id: 8,
                foto: fotos[7],
                nombre:'Papá Noel mini',
                descripcion: "Que tierno, ¿verdad?",
                precio: 10000
            }, 
        ];
    </script>
    <div class="container">
        <div class="row">
            <div class="col-6 text-center">
                <div class="col-12">
                    <img src="../img/text2.png" alt="" width="300px">

                </div>
                <div class="container-center d-flex justify-content-center">

                    <div class=" d-flex row row-cols-2 wrap " id="productos">

                    </div>

                </div>
            </div>



            <div class="col-6">
                <div class="d-block justify-content-center text-center">
                    <div class="col mt-5">
                        <img src="../img/borcelle.png" alt="" width="250px">
                    </div>
                    <div class="col-12">
                        <form class="d-flex mt-2" role="search">
                            <input class="form-control rounded-pill me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-info" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="col-12">
                    <img src="../img/text1.png" alt="" width="300px" style="margin-top:200px;">
                    </div>
                    <div class="col-12 mt-5">
                    <img src="../img/text2.png" alt="" width="300px" style="margin-top:200px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    <script src="../js/carrito.js"></script>
</body>

</html>