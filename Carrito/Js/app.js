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
        document.querySelector("#total").innerHTML=`$0`;
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
    console.log(e.target.classList);
    if(e.target.classList.contains('borrar-curso')) {
        const cursoId = e.target.getAttribute('data-id')

        // Eliiar el curso del arreglo
        articulosCarrito = articulosCarrito.filter(curso => curso.id !== cursoId);
        carritoHTML(); // Actualiza el HTML
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

    articulosCarrito.forEach(curso => {
        const { imagen, titulo, precio, cantidad, id } = curso;
        const row = document.createElement('tr')
        row.innerHTML = `
        <td>
            <img src="${imagen}" width="100">
        </td>
        <td> ${titulo} </td>
        <td> ${precio} </td>
        <td> ${cantidad} </td>
        <td>
            <a href="#" class="borrar-curso" data-id="${id}">X</a>
        </td>
        `

        // Agrega el HTML en el tbody
        contenedorCarrito.appendChild(row);
    })
    //Mensaje de producto agregado
    alert("Se agrego al carrito")
    desplegartotal();
}

//Funcion para desplegar el total
function desplegartotal(){
    //Se establece el total a0
    total = 0;
    //Itera sobre el arreglo de los productos seleccionados
    for (i=0; i<articulosCarrito.length; i++){
        //Agarra la cantidad de precio (sigue en tipo texto)
        precioTexto=articulosCarrito[i].precio
        //Separa el seigno de $ del precio
        PrecioSeparado=precioTexto.split("$")
        //Convierte el precio tipo texto a numero
        preciofinal=parseInt(PrecioSeparado[1])
        //Agarra la cantidad de productos que se seleccionaron
        cantidad=articulosCarrito[i].cantidad
        //Multiplica el precio por la cantidad
        cantidadfinal=preciofinal*cantidad
        //Suma esa cantidad al total
        total= total + cantidadfinal
        
    }
    //Selecciona el elemento HTML que tiene el ID de total y le agrega la cantidad del total como texto
    document.querySelector("#total").innerHTML=`$${total}`
}


// Elimina el curso del carrito
function limpiarHTML() {
    // Forma lenta
    // contenedorCarrito.innerHTML = '';

    while(contenedorCarrito.firstChild) {
        contenedorCarrito.removeChild(contenedorCarrito.firstChild);
    }
}