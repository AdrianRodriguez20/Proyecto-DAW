//VARIABLES Y CONSTANTES GENERALES
const expersiones_regulares = {
    dni: /(^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$)|(^[XYZ][0-9]{7}[TRWAGMYFPDXBNJZSQVHLCKE]$)/, //expersion regular del dni  numeros y una letra
    nombre_propio: /^[A-ZÁÉÍÓÚÑ][a-záéíóúñüA-ZÁÉÍÓÚÑ\s]*$/, //expresion para nombres propio permite mas de una palabra mayusculas
    domicilio: /^[A-ZÁÉÍÓÚÑ][a-záéíóúñüA-ZÁÉÍÓÚÑ0-9\s\/\.\-]*$/, //texto especifico domicilio permmite simbolos como: '\', 'º', etc
    codigo_postal: /[0-9]{5}$/, //codigo postal de 5 digitos
    telefono: /^[6-9]{1}([\d]{2}[-]*){3}[\d]{2}$/, //telefono nueve digitos
    correo: /^[^@]+@[^@]+\.[a-zA-Z]{2,3}$/ //especifico mail
        //FALTA DENOMINACION[] TIPO[] DENOMINCACION_ESTUDIOS CODIGO[] 
};
let campos = {
    dni: false,
    nombre: false,
    apellido: false,
    domicilio: false,
    provincia: false,
    cod_postal: false,
    localidad: false,
    telefono_1: false,
    telefono_2: false,
    email: false,
    nombre_ciclo: false,
    familia_profesional: false,
}

window.onload = function() {
    let formulario = document.getElementById('formulario');
    let inputs = document.getElementsByTagName("INPUT");
    //funcion flecha para validar formulario
    let validarFormulario = (e) => {
            console.log(e.target.name);
            switch (e.target.name) {
                case "dni":
                    cambioCampoValidar(expersiones_regulares.dni, e.target.name, e.target.value);
                    /*solo NIF para NIE == substr(‘TRWAGMYFPDXBNJZSQVHLCKE’, substr(str_replace(array(‘X’,’Y’,’Z’), array(‘0′,’1′,’2’), $cif), 0, 8) % 23, 1))

                     if (campos.dni) {
                         validarDNI(e.target.value) ? campos.dni = true : campos.dni = false;
                         if (!campos.dni) {
                             document.getElementById("formulario_dni").classList.add('formulario_grupo-erroneo');
                             document.getElementById("formulario_dni").classList.remove('formulario_grupo-valido');
                             //cambiar icono
                             document.querySelector("#formulario_dni svg").classList.remove('fa-check');
                             document.querySelector("#formulario_dni svg").classList.add('fa-times');
                             //mostrar mensaje error
                             document.getElementById("error_dni").classList.add('formulario_sms_error-activo');
                             campos[dni] = false;
                         }
                     }
                     */
                    break;
                case "nombre":
                case "apellido":
                case "provincia":
                case "localidad":
                case "nombre_ciclo":
                case "familia_profesional":
                    cambioCampoValidar(expersiones_regulares.nombre_propio, e.target.name, e.target.value);
                    break;
                case "domicilio":
                    cambioCampoValidar(expersiones_regulares.domicilio, e.target.name, e.target.value);
                    break;
                case "telefono_1":
                case "telefono_2":
                    cambioCampoValidar(expersiones_regulares.telefono, e.target.name, e.target.value);
                    break;
                case "cod_postal":
                    cambioCampoValidar(expersiones_regulares.codigo_postal, e.target.name, e.target.value);
                    break;
                case "email":
                    cambioCampoValidar(expersiones_regulares.correo, e.target.name, e.target.value);
                    break;
            };
        }
        //los dos primeros input son de tokken ocultos -> {{csrf_field()}}
        //poner a los input un event listener para saber cuando validar el input
    for (let i = 0; i < inputs.length; i++) {
        //al soltar tecla
        inputs[i].addEventListener('keyup', validarFormulario);
        //al hacer click fuera
        inputs[i].addEventListener('blur', validarFormulario);

    }
}


//FUNCIONES//

//funcion para cambiar el document html de color, cambiar iconos, mostrar texto
function cambioCampoValidar(expresion, elemento, valor) {
    if (expresion.test(valor)) {
        //cambiar elemento
        document.getElementById(`formulario_${elemento}`).classList.add('formulario_grupo-valido');
        document.getElementById(`formulario_${elemento}`).classList.remove('formulario_grupo-erroneo');
        //cambiar icono
        document.querySelector(`#formulario_${elemento} svg`).classList.remove('fa-times');
        document.querySelector(`#formulario_${elemento} svg`).classList.add('fa-check');
        //elimniar mensaje error
        document.getElementById(`error_${elemento}`).classList.remove('formulario_sms_error-activo');
        campos[elemento] = true;
    } else { //cambiar elemento
        document.getElementById(`formulario_${elemento}`).classList.add('formulario_grupo-erroneo');
        document.getElementById(`formulario_${elemento}`).classList.remove('formulario_grupo-valido');
        //cambiar icono
        document.querySelector(`#formulario_${elemento} svg`).classList.remove('fa-check');
        document.querySelector(`#formulario_${elemento} svg`).classList.add('fa-times');
        //mostrar mensaje error
        document.getElementById(`error_${elemento}`).classList.add('formulario_sms_error-activo');
        campos[elemento] = false;
    }
}

//funcion para comprobar q los campos estan correctos para enviar formulario
function comprobarCamposRellenosValidos() {
    var todosCamposCorrectosYRellenos = true;
    for (const campo in campos) {
        if (!campos[campo]) {
            todosCamposCorrectosYRellenos = false;
        }
    }
    return todosCamposCorrectosYRellenos;
}

function validarDNI(dni) {
    const cadenaLetraNIF = 'TRWAGMYFPDXBNJZSQVHLCKE';
    const numeroDivisorioNIF = 23;
    var expReg = /^[0-9]{8}$/;
    var letraObtenida = '';
    var correcto = false;
    var numero = dni.substring(0, dni.length - 1);
    var letra = dni.charAt(dni.length - 1);
    if (expReg.test(numero)) {
        letraObtenida = cadenaLetraNIF.charAt(numero % numeroDivisorioNIF);
        if (letraObtenida != letra) {
            correcto = false;
        } else {
            correcto = true;
        }
    } else {
        correcto = false;
    }
    return correcto;
}


formulario.addEventListener('submit', (e) => {

    if (comprobarCamposRellenosValidos()) {
        //no reseteamos el formulario cambiamos de vista
        // formulario.reset();

        document.getElementById('formulario_sms_exito').classList.add('formulario_sms_exito-activo');
        setTimeout(() => {
            document.getElementById('formulario_sms_exito').classList.remove('formulario_sms_exito-activo');
        }, 3000);
        document.querySelectorAll('.formulario_grupo-valido').forEach((icono) => {
            icono.classList.remove('formulario_grupo-valido');
        });
    } else {
        //Para evitar el envio directamente al server cancelamos el evento
        e.preventDefault();
        document.getElementById('formulario_mensaje').classList.add('formulario_mensaje-activo');
        setTimeout(() => {
            document.getElementById('formulario_mensaje').classList.remove('formulario_mensaje-activo');
        }, 3000);
    }

});