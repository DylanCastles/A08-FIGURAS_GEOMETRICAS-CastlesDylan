function validarDatos(event) {
    const regexNumeros = /^-?\d+(\.\d+)?$/; // Expresión regular para numeros positivos, negativos y decimales
    let mal = false;
    let medidas = [];

    const figura = document.getElementById("variableSesion").value;
    const datos = document.getElementsByName("datos[]");

    datos.forEach(dato => {
        medidas[dato.id] = Number(dato.value);
        const span = document.getElementsByName(dato.id);
        if (dato.value === "") {
            dato.style.border = '2px solid red';
            span[0].innerHTML = ' (Campo vacío)';
            mal = true;
        } else if (!(regexNumeros.test(dato.value))) {
            dato.style.border = '2px solid red';
            span[0].innerHTML = ' (Ingrese un numero)';
            mal = true;
        } else if (dato.value <= 0) {
            dato.style.border = '2px solid red';
            span[0].innerHTML = ' (Numero no positivo)';
            mal = true;
        } else if (dato.value > 100) {
            dato.style.border = '2px solid red';
            span[0].innerHTML = ' (Numero mayor 100)';
            mal = true;
        } else{
            dato.style.border = '2px solid green';
            span[0].innerHTML = '';
        }
    });
    if (mal) {
        event.preventDefault();
        switch (figura) {
            case 'cuadrado':
                Swal.fire({
                    imageUrl: '../img/cuadradoFalta.png',
                    imageWidth: 150,
                    imageHeight: 150,
                    width: 180,
                    confirmButtonText: 'Aceptar'
                });
            break;
            case 'rectangulo':
                Swal.fire({
                    imageUrl: '../img/rectanguloFalta.png',
                    imageWidth: 150,
                    imageHeight: 150,
                    width: 180,
                    confirmButtonText: 'Aceptar'
                });
            break;
            case 'triangulo':
                Swal.fire({
                    imageUrl: '../img/trianguloFalta.png',
                    imageWidth: 150,
                    imageHeight: 150,
                    width: 180,
                    confirmButtonText: 'Aceptar'
                });
            break;
            case 'circulo':
                Swal.fire({
                    imageUrl: '../img/circuloFalta.png',
                    imageWidth: 150,
                    imageHeight: 150,
                    width: 180,
                    confirmButtonText: 'Aceptar'
                });
            break;
        }
    } else {
        if (figura === 'triangulo') {
            let imposible = false;
            if ((medidas['l1'] + medidas['l2']) <= medidas['l3']) {imposible = true;}
            if ((medidas['l2'] + medidas['l3']) <= medidas['l1']) {imposible = true;}
            if ((medidas['l3'] + medidas['l1']) <= medidas['l2']) {imposible = true;}
            if (imposible) {
                event.preventDefault();
                Swal.fire({
                    imageUrl: '../img/trianguloImposible.png',
                    imageWidth: 200,
                    imageHeight: 200,
                    title: '¡Triangulo imposible!',
                    text: 'Un lado no puede ser mas grande que la suma de los otros dos.',
                    width: 300,
                    confirmButtonText: 'Aceptar'
                });
            }
        }
    }
}

function validarDato(input) {
    const regexNumeros = /^-?\d+(\.\d+)?$/; // Expresión regular para numeros positivos, negativos y decimales
    const span = document.getElementsByName(input.id);
    
    if (input.value === "") {
        input.style.border = '2px solid red';
        span[0].innerHTML = ' (Campo vacío)';
    } else if (!(regexNumeros.test(input.value))) {
        input.style.border = '2px solid red';
        span[0].innerHTML = ' (Ingrese un numero)';
    } else if (input.value <= 0) {
        input.style.border = '2px solid red';
        span[0].innerHTML = ' (Numero no positivo)';
    } else if (input.value > 100) {
        input.style.border = '2px solid red';
        span[0].innerHTML = ' (Numero mayor 100)';
    } else{
        input.style.border = '2px solid green';
        span[0].innerHTML = '';
    }
    return true;
}
