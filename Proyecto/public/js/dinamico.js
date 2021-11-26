$(document).ready(function() {
    var maxField = 10; // Numero maximo de campos
    var addButton = $('.add_button'); // Selector del boton de Insertar
    var wrapper = $('.field_wrapper'); // Contenedor de campos
    var fieldHTML =
        '<tr>' +
        '<td><input type="text" class="form-control" id="denominacion" name="denominacion[]" />' +
        '</td>' +
        '<td>' +
        '<input type="text" class="form-control" id="codigo" name="codigo[]">' +
        '</td>' +
        '<td class="text-center ">' +
        '<a href="javascript:void(0);" class="remove_button" "><i class="far fa-trash-alt mt-1" style="font-size:24px; color:red"></i></a>' +
        '</td>' +
        '</tr >';
    var x = 1; // Iniciamos el contador a 1
    $(addButton).click(function() { // Una vez que se haga clic en el boton
        if (x < maxField) { //Comprobamos el maximo
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Añadimos el HTML
        }
    });
    $(wrapper).on('click', '.remove_button', function(
        e) { // Una vez se ha hecho clic en el boton de eliminar
        e.preventDefault();
        $(this).parent('td').parent("tr").remove(); //Eliminamos el div
        x--; // Reducimos el contador a 1
    });

    var addButtonModulo = $('.add_buttonModulos'); // Selector del boton de Insertar
    var wrapperModulo = $('.field_wrapperModulos'); // Contenedor de campos
    var fieldHTMLModulos =
        '<tr>' +
        '<td><input type="text" class="form-control" id="denominacion_estudios" name="denominacion_estudios[]" />' +
        '</td>' +
        '<td>' +
        '<input type="text" class="form-control" id="tipo" name="tipo[]">' +
        '</td>' +
        '<td class="text-center ">' +
        '<a href="javascript:void(0);" class="remove_buttonModulo" "><i class="far fa-trash-alt mt-1" style="font-size:20px; color:red"></i></a>' +
        '</td>' +
        '</tr >';

    var y = 1; // Iniciamos el contador a 1
    $(addButtonModulo).click(function() { // Una vez que se haga clic en el boton
        if (y < maxField) { //Comprobamos el maximo
            y++; //Increment field counter
            $(wrapperModulo).append(fieldHTMLModulos); // Añadimos el HTML
        }
    });
    $(wrapperModulo).on('click', '.remove_buttonModulo', function(
        e) { // Una vez se ha hecho clic en el boton de eliminar
        e.preventDefault();
        $(this).parent('td').parent("tr").remove(); //Eliminamos el div
        y--; // Reducimos el contador a 1
    });
});