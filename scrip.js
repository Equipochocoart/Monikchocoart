let productos = []; // Arreglo para almacenar todos los productos

function cargarProductosCliente() {
    // Cargar productos del cliente desde alguna fuente de datos
    for (let i = 1; i <= 10; i++) {
        productos.push({
            id: i,
            nombre: `Producto Cliente ${i}`,
            precio: Math.floor(Math.random() * 100) + 1,
            imagen: `img/producto_cliente${i}.jpg`,
            tipo: 'cliente' // Marcar como producto del cliente
        });
    }
}

function cargarProductosAdministrador() {
    // Cargar productos del administrador desde alguna fuente de datos
    // Inicialmente podría estar vacío
    
}

function mostrarProductosAdministrador() {
    const productosAdminSection = document.getElementById('productos-administrador');
    productosAdminSection.innerHTML = '';

    productos.forEach(producto => {
        if (producto.tipo === 'administrador') {
            const productoHTML = `
                <div class="producto">
                    <h3>${producto.nombre}</h3>
                    <p>Precio: $${producto.precio}</p>
                    <button onclick="eliminarProducto(${producto.id})">Eliminar</button>
                </div>
            `;
            productosAdminSection.innerHTML += productoHTML;
        }
    });
}

function eliminarProducto(idProducto) {
    productos = productos.filter(producto => producto.id !== idProducto);
    mostrarProductosAdministrador();
}

function agregarNuevoProducto(event) {
    event.preventDefault();

    const nombre = document.getElementById('nombre').value;
    const imagen = document.getElementById('imagen').files[0];
    const descripcion = document.getElementById('descripcion').value;
    const precio = parseFloat(document.getElementById('precio').value);

    const nuevoProducto = {
        id: productos.length + 1,
        nombre: nombre,
        imagen: URL.createObjectURL(imagen),
        descripcion: descripcion,
        precio: precio,
        tipo: 'administrador' // Marcar como producto del administrador
    };

    productos.push(nuevoProducto);
    mostrarProductosAdministrador();
    document.getElementById('formulario-producto').style.display = "none";
    document.getElementById('nuevo-producto-form').reset();
}

function manejarModal() {
    const modal = document.getElementById('formulario-producto');
    const btnAgregarProducto = document.getElementById('btn-agregar-producto');
    const spanClose = document.getElementsByClassName('close')[0];

    btnAgregarProducto.onclick = function() {

        modal.style.display = "block";
    }

    spanClose.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
}

document.getElementById('nuevo-producto-form').addEventListener('submit', agregarNuevoProducto);

window.onload = () => {
    cargarProductosCliente();
    cargarProductosAdministrador();
    mostrarProductosAdministrador();
    manejarModal();
};
