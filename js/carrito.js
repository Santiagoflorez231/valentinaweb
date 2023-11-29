
function renderizarProductos() {
    const contenedorProductos = document.getElementById('productos');

    productos.forEach(producto => {
        const elementoProducto = document.createElement('div');
        // elementoProducto.className = 'producto';
        elementoProducto.innerHTML = `
       
        <div class="card mx-1 mb-4" style="width: 16rem;">
        <img src="${producto.foto}" class="card-img-top" height="250px">
        <div class="card-body justify-content-center" style="height:216px;">
        <div style="height:125px;">
        <h5 class="card-title">${producto.nombre}</h5>
        <p class="card-text">${producto.descripcion}</p>
        <h5 class="card-title letra">$${producto.precio}</h5></br>
        
        </div>
        
        <div class="">
        <button class="btn btn-primary border border-none" style="background-color:#B3B2DC;"  onclick="agregarAlCarrito('${producto.nombre}', ${producto.precio})"  data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation" data-bs-toggle="offcanvas">Agregar al Carrito</button>
        </div>
        </div>
        </div>
        `;
        contenedorProductos.appendChild(elementoProducto);
    });
}

let carrito = [];
  // Función para agregar productos al carrito
  function agregarAlCarrito(nombre, precio) {
    const productoExistente = carrito.find(item => item.nombre === nombre);

    if (productoExistente) {
        productoExistente.cantidad++;
    } else {
        carrito.push({ nombre, precio, cantidad: 1 });
    }

    actualizarCarrito();
}


function actualizarCarrito() {
    const contenedorItemsCarrito = document.getElementById('items-carrito');
    const totalCarritoElemento = document.getElementById('total-carrito');

    contenedorItemsCarrito.innerHTML = '';
    let total = 0;

    carrito.forEach((item, index) => {
        const elementoItemCarrito = document.createElement('li');
        elementoItemCarrito.className = 'item-carrito';
        

        const nombreItem = document.createElement('span');
        nombreItem.textContent = `${item.nombre} (Precio Unitario: $${item.precio}) x ${item.cantidad}`;
        nombreItem.className = 'texto';

        const controlesItem = document.createElement('div');

        const botonAumentar = document.createElement('button');
        botonAumentar.textContent = '+';
        botonAumentar.className = 'btn1';
        botonAumentar.onclick = () => aumentarCantidad(index);

        const botonDisminuir = document.createElement('button');
        botonDisminuir.textContent = '-';
        botonDisminuir.className = 'btn2';
        botonDisminuir.onclick = () => disminuirCantidad(index);

        const botonEliminar = document.createElement('button');
        botonEliminar.textContent = 'Eliminar';
        botonEliminar.className = 'btn3';
        botonEliminar.onclick = () => eliminarItem(index);

        controlesItem.appendChild(botonDisminuir);
        controlesItem.appendChild(botonAumentar);
        controlesItem.appendChild(botonEliminar);

        elementoItemCarrito.appendChild(nombreItem);
        elementoItemCarrito.appendChild(controlesItem);
        
        contenedorItemsCarrito.appendChild(elementoItemCarrito);
        total += item.precio * item.cantidad;
    });
    totalCarritoElemento.className='total';
    totalCarritoElemento.textContent = total;
}
function vaciarCarrito() {
    carrito = [];
    actualizarCarrito();
}

// Función para aumentar la cantidad de un producto en el carrito
function aumentarCantidad(index) {
    carrito[index].cantidad++;
    actualizarCarrito();
}

// Función para disminuir la cantidad de un producto en el carrito
function disminuirCantidad(index) {
    if (carrito[index].cantidad > 1) {
        carrito[index].cantidad--;
    } else {
        eliminarItem(index);
    }
    actualizarCarrito();
}

// Función para eliminar un producto del carrito
function eliminarItem(index) {
    carrito.splice(index, 1);
    actualizarCarrito();
}












renderizarProductos();

