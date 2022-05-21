// Variables
const carrito = document.querySelector('#carrito');
const contenedorCarrito = document.querySelector('#lista-carrito tbody');
const vaciarCarritoBtn = document.querySelector('#vaciar-carrito');
const listaCursos = document.querySelector('#lista-cursos');
let articulosCarrito = [];

cargarEventListeners();

function cargarEventListeners() {
    // Dispara cuando se presiona "Agregar Carrito"
    listaCursos.addEventListener('click', agregarCurso);

    // Elimina cursos del carrito
    carrito.addEventListener('click', eliminarCurso)

    // Vaciar el carrito
    vaciarCarritoBtn.addEventListener('click', () => {
        articulosCarrito = [];
        localStorage.clear();
        document.querySelector("#total").innerHTML=`$0`;
        alert("Se vació el carrito");
        limpiarHTML();
    });
}

function agregarCurso(e) {
    e.preventDefault();
    if (e.target.classList.contains('agregar-carrito')) {
        const cursoSeleccionado = e.target.parentElement.parentElement;
        leerDatosCurso(cursoSeleccionado);
    }
}

// Elimina un curso del carrito
function eliminarCurso(e) {
    if(e.target.classList.contains('borrar-curso')) {
        //Agarra los articulos del localstorage
        productoLS=JSON.parse(localStorage.getItem('carrito'));
        //Agarra el id del curso
        const cursoId = e.target.getAttribute('data-id');

        // itera por cada elemento del arreglo
        for (elementos in productoLS) {
            //En caso de que el producto exista
            if (productoLS[elementos].id == cursoId) {
                //Encuentra la posicion de ese producto dentro del arreglo
                POSdeproducto=productoLS.findIndex(productoLS => productoLS.id == cursoId);
                //Remueve ese producto del arreglo
                productoLS.splice(POSdeproducto, 1);
                //Actualiza el localstorage
                localStorage.setItem('carrito', JSON.stringify(productoLS));

            }  

        }
        //Mensaje de eliminacion de productos de carrito
        alert("Se eliminó del carrito")
        //Actualiza el carrito para que se mueste en la pagina
        limpiarHTML();
        //Manda a llamar funcion para mostrar el total
        desplegartotal(); 
    }
}

// Lee el contenido del curso y extrae la info
function leerDatosCurso(curso) {
    // Crea un objeto con el contenido
    const infoCurso = {
        imagen: curso.querySelector('img').src,
        titulo: curso.querySelector('h4').textContent,
        precio: curso.querySelector('.precio span').textContent,
        id: curso.querySelector('a').getAttribute('data-id'),
        cantidad: 1
    }

    // Revisa si un elemento ya existe 
    const existe = articulosCarrito.some(curso => curso.id === infoCurso.id);
    if(existe) {
        // Aumenta la cantidad
        const cursos = articulosCarrito.map(curso => {
            if (curso.id === infoCurso.id) {
                curso.cantidad++;
                return curso; // retorna el objeto actualizado
            } else {
                return curso; // reotrna el objeto sin cambios
            }
        })
        articulosCarrito = [...cursos];
    } else {
        articulosCarrito = [...articulosCarrito, infoCurso];
    }

    // Agrega elementos al arreglo de carrito
    carritoHTML();
}

// Muestra el Carrito en el HTML 
function carritoHTML() {
    // Limpiar el HTML 
    limpiarHTML();
    //Generamos un array
    producto = [];
    
    
        for (articulos of articulosCarrito) {
            //Objeto de productos con los datos del carrito actual
            const infoProducto = {
                imagen: articulos["imagen"],
                titulo: articulos["titulo"],
                precio: articulos["precio"],
                id: articulos["id"],
                cantidad: articulos["cantidad"],
            }
            //SE USAN ELEMENTOS DE FUNCIONES ANTERIORES PARA AGREGARLO A LA LISTA
            // Revisa si un elemento ya existe 
            const existe = articulosCarrito.some(producto => producto.id === infoProducto.id);
            if(existe) {
                // Aumenta la cantidad
                const productos = articulosCarrito.map(producto => {
                    if (producto.id === infoProducto.id) {
                        
                        return producto; // retorna el objeto actualizado
                    } else {
                    
                        return producto; // reotrna el objeto sin cambios
                    }
                })
                articulosCarrito = [...productos];
            } else {
                articulosCarrito = [...articulosCarrito, infoProducto];
            }
            localStorage.setItem('carrito', JSON.stringify(articulosCarrito));
            productoLS = JSON.parse(localStorage.getItem('carrito'));
            
        
    }
    //Mensaje de producto agregado
    alert("Se agregó al carrito")
    desplegartotal();
}

//Funcion para desplegar el total
function desplegartotal(){

    productosLS = JSON.parse(localStorage.getItem('carrito'));
    for (Elemento in productosLS) {

    const row = document.createElement('tr')
    row.innerHTML = `
    <td>
    <img src="${productosLS[Elemento].imagen}" width="100">
    </td>
    <td> ${productosLS[Elemento].titulo} </td>
    <td> ${productosLS[Elemento].precio} </td>
    <td> ${productosLS[Elemento].cantidad} </td>
    <td>
    <a href="#" class="borrar-curso" data-id="${productosLS[Elemento].id}">X</a>
    </td>
    `
    
    // // Agrega el HTML en el tbody
    contenedorCarrito.appendChild(row);
    }


    //Se establece el total a0
    total = 0;
    //Itera sobre el arreglo de los productos seleccionados
    for (i=0; i<productosLS.length; i++){
        //Agarra la cantidad de precio (sigue en tipo texto)
        precioTexto=productosLS[i].precio
        //Separa el seigno de $ del precio
        PrecioSeparado=precioTexto.split("$")
        //Convierte el precio tipo texto a numero
        preciofinal=parseInt(PrecioSeparado[1])
        //Agarra la cantidad de productos que se seleccionaron
        cantidad=productosLS[i].cantidad
        //Multiplica el precio por la cantidad
        cantidadfinal=preciofinal*cantidad
        //Suma esa cantidad al total
        total= total + cantidadfinal
        
    }
    localStorage.setItem("total", total);
    totalLocalstorage=localStorage.getItem("total");
    //Selecciona el elemento HTML que tiene el ID de total y le agrega la cantidad del total como texto
    document.querySelector("#total").innerHTML=`$${totalLocalstorage}`
}


// Elimina el curso del carrito
function limpiarHTML() {
    // Forma lenta
    // contenedorCarrito.innerHTML = '';

    while(contenedorCarrito.firstChild) {
        contenedorCarrito.removeChild(contenedorCarrito.firstChild);
    }
}