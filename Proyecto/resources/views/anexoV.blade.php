<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    body {
        font-family: 'Nunito', sans-serif;
    }

    label {
        font-size: 12px;
    }

    .dotted {
        border-bottom: 1.5px dotted black;

    }

    p,
    span {
        font-size: 12px;
    }


    body {
        background-image: url("https://i.ibb.co/WzQsmcx/boletin1.png");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: bottom 840px;
        background-size: 700px 200px;

    }
    </style>

</head>

<body>

    <img src="https://i.ibb.co/zn1WJnH/Screenshot-9.png" width="700px" height="100px">
    <h5 class="mt-3 text-center">ANEXO V</h5>
    <h5 class=" text-center">Solicitud de convalidación de módulos de formación profesional</h5>
    <p>DATOS PERSONALES
    <p>

    <table>
        <tr>
            <td style="width:120px;" colspan="1"><label class="ml-2"> NIE/NIF/Pasaporte</label></td>
            <td style="width:100px" colspan="1"><label class=" dotted" style="width:100px">{{$alumno->dni}}</label></td>
            <td style="width:60px" colspan="1"><label class="ml-2">Nombre</label></td>
            <td style="width:400px" colspan="3"><label class="dotted" style="width:400px">{{$alumno->nombre}} </label>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td style="width:60px" colspan="1"><label class="ml-2">Apellidos</label></td>
            <td style="width:626px" colspan="5"><label class=" dotted" style="width:626px"> {{$alumno->apellido}}
                </label></td>
        </tr>
    </table>
    <table>
        <tr>
            <td style="width:60px" colspan="1"><label class="ml-2">Domicilio</label></td>
            <td style="width:625px" colspan="5"><label class="dotted" style="width:625px">{{$alumno->domicilio}}
                </label></td>
        </tr>
    </table>
    <table>
        <tr>
            <td style="width:90px"><label class="ml-2">Código Postal</label></td>
            <td><label class="dotted" style="width:100px">{{$alumno->cod_postal}}</label></td>
            <td style="width:60px"><label class="ml-2">Localidad</td>
            <td><label class="dotted" style="width:180px">{{$alumno->localidad}}</label></td>
            <td style="width:60px"><label class="ml-2">Provincia</td>
            <td><label class="dotted" style="width:180px">{{$alumno->provincia}}</label></td>
        </tr>
    </table>
    <table>
        <tr>
            <td style="width:60px;"><label class="ml-2">Tlf.Fijo</label></td>
            <td style="width:255px" colspan="2"><label class="dotted" style="width:255px">{{$alumno->telefono_2}}
                </label></td>
            <td style="width:60px"><label class="ml-2">Tlf. Movil</label></td>
            <td style="width:300px" colspan="2"><label class="dotted" style="width:300px">{{$alumno->telefono_1}}
                </label></td>
        </tr>
    </table>
    <table>
        <tr>
            <td style="width:120px" colspan="1"><label class="ml-2">Correo electrónico</label></td>
            <td style="width:565px" colspan="5"><label class="dotted" style="width:565px"> {{$alumno->email}}</label>
            </td>
        </tr>
    </table>

    <span class="mt-4">DATOS DEL INSTITUTO DE EDUCACIÓN SECUNDARIA</span><br>
    <span> O CENTRO DE FORMACIÓN COMPETENTE</span>

    <table class="mt-3">
        <tr>
            <td style="width:100px" colspan="1"><label class="ml-2">Denominación</label></td>
            <td style="width:584px" colspan="7"><label class="dotted" style="width:584px">38700391 - C.PROFES. NORTE DE
                    TENERIFE </label></td>
        </tr>
    </table>
    <table>
        <tr>
            <td style="width:100px" colspan="1"><label class="ml-2">Dirección</label></td>
            <td style="width:584px" colspan="7"><label class="dotted" style="width:584px"> Calle las Cabezas, 7 </label>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td style="width:90px"><label class="ml-2">Código Postal</label></td>
            <td><label class="dotted" colspan="3" style="width:100px">38400</label></td>
            <td style="width:60px"><label class="ml-2">Localidad</label></td>
            <td style="width:430px" colspan="3"><label class="dotted" style="width:430px"> Puerto de la Cruz</label>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td style="width:60px"><label class="ml-2">Provincia</label></td>
            <td><label class="dotted" style="width:100px">Santa Cruz de Tenerife</label></td>
            <td style="width:10px"><label class="ml-2">Tlf.Fijo</td>
            <td><label class="dotted" style="width:75px">922 38 01 12</label></td>
            <td style="width:30px"><label class="ml-2">Fax</td>
            <td><label class="dotted" style="width:75px">922381401</label></td>
            <td style="width:110px"><label class="ml-2">Correo electrónico</td>
            <td><label class="dotted" style="width:170px">38003999@gobiernodecanarias.org</label></td>
        </tr>
    </table>

    <p class="mt-3">CICLO FORMATIVO EN EL QUE SE ENCUENTRA MATRICULADO
    <p>

    <table>
        <tr>
            <td style="width:500px; height: 30px; " colspan="1"><label class=" dotted"
                    style="width:500px">{{$cicloFormativo->nivel}} {{$cicloFormativo->nombre_ciclo}}
                    {{$cicloFormativo->ley_educativa}} </label></td>
        </tr>
    </table>


    <p class="mt-3">ESTUDIOS QUE APORTA ( Indicar si es LOGSE/LOE/Estudios universitarios/otros)
    <p>

    <table>
        @foreach($estudio as $a)

        <tr>
            <td style="width:500px; height: 30px; " colspan="1"><label class=" dotted"
                    style="width:500px">{{$a->denominacion_estudios}}</label></td>
        </tr>
        @endforeach
    </table>

    <p class="mt-3">MÓDULOS PROFESIONALES QUE SOLICITA: (Se debe hacer constar el nombre
        correcto. En caso de módulos profesionales LOE, indicar el código especificado
        en el Real Decreto que establece el título)
    <p>

    <table>
        @foreach($modulo as $a)
        @if($a->resolucion==1)
        <tr>
            <td style="width:500px; height: 30px; " colspan="1"><label class=" dotted"
                    style="width:500px">{{$a->denominacion}} </label></td>
        </tr>
        @endif
        @endforeach
    </table>


    <p class="mt-3">FIRMA DEL SOLICITANTE Y FECHA
    <p>



</body>
