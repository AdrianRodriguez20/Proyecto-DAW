<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Bootstrap -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    table,
    th,
    td {
        border: 1px solid;
    }

    label {
        font-size: 12px;

    }

    body {
        font-family: 'Nunito', sans-serif;
    }

    li {
        font-size: 9px;
    }

    p {
        font-size: 12px;
    }
    </style>

</head>

<body>
    <img src="https://i.ibb.co/x5H9RQN/Screenshot-9.png" width="700px" height="85px">


    <h5 class="mt-3 text-center"> SOLICITUD DE CONVALIDACIÓN DE MÓDULOS PROFESIONALES </h5>
    <label>Datos personales del/de la solicitante</label>
    <table>
        <tr>
            <td style="width:160px;"><label class="ml-2"> NIE/NIF/Pasaporte</label></td>
            <td style="width:120px"><label class="ml-2">{{$alumno->dni}} </label></td>
            <td style="width:100px"> <label class="ml-2">Nombre</label></td>
            <td style="width:310px"><label class="ml-2">{{$alumno->nombre}}</label></td>
        </tr>
        <tr>
            <td><label class="ml-2">Apellidos</label></td>
            <td colspan="3"><label class="ml-2">{{$alumno->apellido}}</label></td>
        </tr>
        <tr>
            <td><label class="ml-2">Domicilio</label></td>
            <td colspan="3"><label class="ml-2">{{$alumno->domicilio}}</label></td>
        </tr>
        <tr>
            <td><label class="ml-2">Código Postal</label></td>
            <td><label class="ml-2">{{$alumno->cod_postal}}</label></td>
            <td><label class="ml-2">Localidad</td>
            <td><label class="ml-2">{{$alumno->localidad}}</label></td>
        </tr>
        <tr>
            <td><label class="ml-2">Provincia</td>
            <td colspan="3"><label class="ml-2">{{$alumno->provincia}}</label></td>
        </tr>
        <tr>
            <td><label class="ml-2">Teléfono 1</label></td>
            <td><label class="ml-2">{{$alumno->telefono_1}} </label></td>
            <td><label class="ml-2">Teléfono 2</label></td>
            <td><label class="ml-2">{{$alumno->telefono_2}} </label></td>
        </tr>
        <tr>
            <td><label class="ml-2">Correo electrónico</label></td>
            <td colspan="3"><label class="ml-2">{{$alumno->email}}</label></td>
        </tr>
    </table>

    <label class="mt-3"> Ciclo Formativo en que está matriculado/a </label>
    <table>
        <tr>
            <td style="width:200px"><label class="ml-2"> Estudio</label></td>
            <td style="width:600px" colspan="3"><label class="ml-2">{{$cicloFormativo->nombre_ciclo}} </label></td>
        </tr>
        <tr>
            <td><label class="ml-2">Nivel</label></td>
            <td><label class="ml-2">{{$cicloFormativo->nivel}} </label></td>
            <td><label class="ml-2">Ley Educativa</td>
            <td><label class="ml-2">{{$cicloFormativo->ley_educativa}} </label></td>
        </tr>
        <tr>
            <td><label class="ml-2">Familia Profesional</label></td>
            <td colspan="3"><label class="ml-2">{{$cicloFormativo->familia_profesional}} </label></td>
        </tr>

    </table>

    <table class="mt-3">
        <tr>
            <th colspan="4" class="text-center">Estudios que se aportan</th>
        </tr>
        <tr>
            <td style="width:600px"><label class="ml-2"> Denominación</label></td>
            <td style="width:200px" colspan="3"><label class="ml-2"> Tipo</label></td>
        </tr>
        @foreach($estudio as $a)
        <tr>
            <td style="height: 20px;"><label class="ml-2">{{$a->denominacion_estudios}}</label></td>
            <td colspan="3"><label class="ml-2">{{$a->tipo}}</label></td>
        </tr>
        @endforeach

    </table>

    <table class="mt-3">
        <tr>
            <th colspan="4" class="text-center">Módulos Profesionales que se solicitan</th>
        </tr>
        <tr>
            <td style="width:600px , height: 50px;"><label class="ml-2"> Denominación</label></td>
            <td style="width:200px, height: 50px;" colspan="3"><label class="ml-2"> Código</label></td>
        </tr>
        @foreach($modulo as $a)

        <tr>
            <td style="height: 20px;"><label class="ml-2">{{$a->denominacion}} </label></td>
            <td colspan="3"><label class="ml-2">{{$a->codigo}}</label></td>
        </tr>

        @endforeach
    </table>

    <p class="mt-2">En __________________________________ , a _____ de ______________ de ______</p>
    <p>Firma:
    <p>
    <p>__________________________________
    <p>
    <ol>
        <li>Se debe indicar qué tipo de estudio es, empleando los siguientes números 1 (FP LOE), 2 (FP LOGSE), 3
            (Estudios Universitarios), 4
            (Certificados de Profesionalidad), 5 Otros </li>
        <li>En caso de módulos profesionales LOE, indicar el código especificado en el Real Decreto que establece el
            título</li>



</body>

</html>
