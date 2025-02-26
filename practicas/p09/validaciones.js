var form = document.getElementById('formularioProductos');
var mensaje1 = '';
var mensaje2 = '';
var mensaje3 = '';
var mensaje4 = '';
var mensaje5 = '';
var mensaje6 = '';
var mensaje7 = '';

function validar_nombre() {
    let entrada = document.getElementById("form-name").value;
    let sinErrores = true;

    if (entrada.trim() === "" || entrada.length > 100) {
        mensaje1 = "El nombre debe ser requerido y tener 100 caracteres o menos.";
        sinErrores = false;
    }

    return sinErrores;
}

function validar_marca() {
    let entrada = document.getElementById("form-marca").value;
    let sinErrores = true;

    if (entrada === "") {
        mensaje2 = "La marca debe ser requerida y seleccionarse de una lista de opciones.";
        sinErrores = false;
    }

    return sinErrores;
}

function validar_modelo() {
    let entrada = document.getElementById("form-modelo").value;
    let sinErrores = true;

    if (entrada.trim() === "" || entrada.length > 25) {
        mensaje3 = "El modelo debe ser requerido, alfanumérico y tener 25 caracteres o menos.";
        sinErrores = false;
    }

    return sinErrores;
}

function validar_precio() {
    let entrada = document.getElementById("form-precio").value;
    let sinErrores = true;

    if (entrada < 99.99) {
        mensaje4 = "El precio debe ser mayor a 99.99.";
        sinErrores = false;
    }

    return sinErrores;
}

function validar_detalles() {
    let detalles = document.getElementById('form-detalles').value;
    let sinErrores = true;

    if (detalles.length > 250) {
        mensaje5 = "Si se ingresan detalles, no pueden exceder los 250 caracteres.";
        sinErrores = false;
    }

    return sinErrores;
}

function validar_unidades() {
    let entrada = document.getElementById("form-unidades").value;
    let sinErrores = true;

    if (entrada < 0) {
        mensaje6 = "Las unidades deben ser requeridas y el número debe ser mayor o igual a 0.";
        sinErrores = false;
    }

    return sinErrores;
}

function validar_imagen() {
    let entrada = document.getElementById("form-imagen").value;
    let sinErrores = true;

    if (entrada === "") {
        // Si no se proporciona una URL de imagen, usamos la ruta por defecto
        entrada = '/p07-solucion/img/imagen.png';
    }

    return sinErrores;
}

form.addEventListener('submit', function(event) {
    event.preventDefault();
    let hayErrores = false;

    if (!validar_nombre()) {
        document.getElementById("res1").innerHTML = '<span>' + mensaje1 + '</span>';
        hayErrores = true;
    } else {
        limpiarMensaje('res1');
    }

    if (!validar_marca()) {
        document.getElementById("res2").innerHTML = '<span>' + mensaje2 + '</span>';
        hayErrores = true;
    } else {
        limpiarMensaje('res2');
    }

    if (!validar_modelo()) {
        document.getElementById("res3").innerHTML = '<span>' + mensaje3 + '</span>';
        hayErrores = true;
    } else {
        limpiarMensaje('res3');
    }

    if (!validar_precio()) {
        document.getElementById("res4").innerHTML = '<span>' + mensaje4 + '</span>';
        hayErrores = true;
    } else {
        limpiarMensaje('res4');
    }

    if (!validar_detalles()) {
        document.getElementById("res5").innerHTML = '<span>' + mensaje5 + '</span>';
        hayErrores = true;
    } else {
        limpiarMensaje('res5');
    }

    if (!validar_unidades()) {
        document.getElementById("res6").innerHTML = '<span>' + mensaje6 + '</span>';
        hayErrores = true;
    } else {
        limpiarMensaje('res6');
    }

    if (!validar_imagen()) {
        document.getElementById("res7").innerHTML = '<span>' + mensaje7 + '</span>';
        hayErrores = true;
    } else {
        limpiarMensaje('res7');
    }

    if (!hayErrores) {
        form.submit();
    }
});

function limpiarMensaje(id) {
    document.getElementById(id).innerHTML = '';
}
