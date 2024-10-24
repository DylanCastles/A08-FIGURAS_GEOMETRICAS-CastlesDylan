function cambiarImagen() {
    const imagen = document.getElementById('imagen');
    const selectedValue = document.querySelector("input[name='figura']:checked").value;
    switch (selectedValue) {
        case 'triangulo':
            imagen.src = '../img/triangulo.png';
            break;
        case 'cuadrado':
            imagen.src = '../img/cuadrado.png';
            break;
        case 'rectangulo':
            imagen.src = '../img/rectangulo.png';
            break;
        case 'circulo':
            imagen.src = '../img/circulo.png';
            break;
        default:
            imagen.src = '';
    }

    // Mostrar la imagen solo si hay una ruta válida
    imagen.style.display = imagen.src ? 'block' : 'none';
}

function validarTipoFigura(event) {
    var figura = document.querySelector('input[name="figura"]:checked');
    var imagen = document.getElementById("imagen");
    if (!figura) {
        imagen.src = "../img/noSeleccionado.png";
        imagen.style.display = "block";
        imagen.style.width = "180px";
        imagen.style.height = "180px";
        event.preventDefault();
    }
}
