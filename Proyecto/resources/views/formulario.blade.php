@extends('layouts.app')
<script src="{{ asset('js\dinamico.js') }}" defer></script>

@section('content')
<div class="container">

    @if (\Session::has('success'))
    <div class="alert alert-danger">
        <h4> {!! \Session::get('success') !!}</h4>
    </div>
    @endif
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">

            <form action="{{url('/alumno')}}" method="post" enctype="multipart/form-data" class="formulario"
                id="formulario">
                {{csrf_field()}}
                <fieldset>
                    <legend>Datos Personales:</legend>
                    <div class="form-row">
                        <!--Grupo Input DNI-->
                        <div class="col-md-6 mb-3 formulario_grupo " id="formulario_dni">
                            <label for="dni" class="formulario_label">NIE/NIF/Pasaporte</label>
                            <div class="formulario_grupo_input">
                                <input type="text" class="form-control formulario_input" name="dni" id="dni">
                                <i class="icono formulario_validacion_estado fas fa-times"></i>
                            </div>
                            <span id="error_dni" class="formulario_sms_error">Dato incorrecto o inválido, por favor
                                escribir un DNI/NIE válido, recuerda letras en mayúscula</span>
                        </div>
                        <!--Grupo Input Nombre-->
                        <div class="col-md-6 mb-3 formulario_grupo" id="formulario_nombre">
                            <label for="nombre" class="formulario_label">Nombre</label>
                            <div class="formulario_grupo_input">
                                <input type="text" class="form-control formulario_input" name="nombre" id="nombre">
                                <i class=" formulario_validacion_estado fas fa-times"></i>
                            </div>
                            <span id="error_nombre" class="formulario_sms_error">Dato incorrecto o inválido, por favor
                                escribir el nombre todo en mayúsculas o sólo la primera letra, no se admiten símbolos</span>
                        </div>
                        <!--Grupo Input Apellidos-->
                        <div class="col-md-12 mb-3 formulario_grupo" id="formulario_apellido">
                            <label for="apellido" class="formulario_label">Apellidos</label>
                            <div class="formulario_grupo_input">
                                <input type="text" class="form-control formulario_input" name="apellido" id="apellido">
                                <i class=" formulario_validacion_estado fas fa-times"></i>
                            </div>
                            <span id="error_apellido" class="formulario_sms_error">Dato incorrecto o inválido, por favor
                                escribir los apellidos todo en mayúsculas o sólo la primera letra, no se admiten símbolos</span>
                        </div>
                        <!--Grupo Input Domicilio-->
                        <div class="col-md-12 mb-3 formulario_grupo" id="formulario_domicilio">
                            <label for="domicilio" class="formulario_label">Domicilio</label>
                            <div class="formulario_grupo_input">
                                <input type="text" class="form-control formulario_input" name="domicilio"
                                    id="domicilio">
                                <i class=" formulario_validacion_estado fas fa-times"></i>
                            </div>
                            <span id="error_domicilio" class="formulario_sms_error">Dato incorrecto o inválido, por favor
                                escribir el domicilio todo en mayúsculas o sólo la primera letra, no se admiten símbolos</span>
                        </div>
                        <!--Grupo Input provincia-->
                        <div class="col-md-4 mb-3 formulario_grupo" id="formulario_provincia">
                            <label for="provincia" class="formulario_label">Provincia</label>
                            <div class="formulario_grupo_input">
                                <input type="text" class="form-control formulario_input" name="provincia"
                                    id="provincia">
                                <i class=" formulario_validacion_estado fas fa-times"></i>
                            </div>
                            <span id="error_provincia" class="formulario_sms_error">Dato incorrecto o inválido, por favor
                                escribir la provincia todo en mayúsculas o sólo la primera letra, no se admiten símbolos</span>
                        </div>
                        <!--Grupo Input codigo postal -->
                        <div class="col-md-4 mb-3 formulario_grupo" id="formulario_cod_postal">
                            <label for="cod_postal" class="formulario_label">Código Postal</label>
                            <div class="formulario_grupo_input">
                                <input type="text" class="form-control formulario_input" name="cod_postal"
                                    id="cod_postal">
                                <i class=" formulario_validacion_estado fas fa-times"></i>
                            </div>
                            <span id="error_cod_postal" class="formulario_sms_error">Dato incorrecto o inválido, por
                                favor escribe el código postal sólo consta de 5 dígitos</span>
                        </div>
                        <!--Grupo Input localidad-->
                        <div class="col-md-4 mb-3 formulario_grupo" id="formulario_localidad">
                            <label for="localidad" class="formulario_label">Localidad</label>
                            <div class="formulario_grupo_input">
                                <input type="text" class="form-control formulario_input" name="localidad"
                                    id="localidad">
                                <i class=" formulario_validacion_estado fas fa-times"></i>
                            </div>
                            <span id="error_localidad" class="formulario_sms_error">Dato incorrecto o inválido, por favor
                                escribir la localidad todo en mayúsculas o sólo la primera letra, no se admiten símbolos</span>
                        </div>
                        <!--Grupo Input Télefono 1-->
                        <div class="col-md-4 mb-3 formulario_grupo" id="formulario_telefono_1">
                            <label for="telefono_1" class="formulario_label">Telefono 1</label>
                            <div class="formulario_grupo_input">
                                <input type="text" class="form-control formulario_input" name="telefono_1"
                                    id="telefono_1">
                                <i class=" formulario_validacion_estado fas fa-times"></i>
                            </div>
                            <span id="error_telefono_1" class="formulario_sms_error">Dato incorrecto o inválido, por
                                favor escribir el teléfono con formato de 6 dígitos</span>
                        </div>
                        <!--Grupo Input Télefono 2-->
                        <div class="col-md-4 mb-3 formulario_grupo" id="formulario_telefono_2">
                            <label for="telefono_2" class="formulario_label">Telefono 2</label>
                            <div class="formulario_grupo_input">
                                <input type="text" class="form-control formulario_input" name="telefono_2"
                                    id="telefono_2">
                                <i class=" formulario_validacion_estado fas fa-times"></i>
                            </div>
                            <span id="error_telefono_2" class="formulario_sms_error">Dato incorrecto o inválido, por
                                favor escribir el teléfono con formato de 6 dígitos</span>
                        </div>
                        <!--Grupo Input Email-->
                        <div class="col-md-4 mb-3 formulario_grupo" id="formulario_email">
                            <label for="email" class="formulario_label">Email</label>
                            <div class="formulario_grupo_input">
                                <input type="email" class="form-control formulario_input" name="email" id="email">
                                <i class=" formulario_validacion_estado fas fa-times"></i>
                            </div>
                            <span id="error_email" class="formulario_sms_error">Dato incorrecto o inválido, por favor
                                escribe el email con formato info@mail.com</span>
                        </div>

                    </div>
                </fieldset>

                <fieldset>
                    <legend>Ciclo Formativo en que está matriculado/a</legend>
                    <div class="form-row">
                        <!--Grupo Input nombre_ciclo-->
                        <div class="col-md-12 mb-3 formulario_grupo" id="formulario_nombre_ciclo">
                            <label for="nombre_ciclo" class="formulario_label">Estudio</label>
                            <div class="formulario_grupo_input">
                                <input type="text" class="form-control formulario_input" id="nombre_ciclo"
                                    name="nombre_ciclo">
                                <i class=" formulario_validacion_estado fas fa-times"></i>
                            </div>
                            <span id="error_nombre_ciclo" class="formulario_sms_error">Dato incorrecto o inválido, por favor
                                escribir el nombre del ciclo todo en mayúsculas o sólo la primera letra, no se admiten símbolos</span>
                        </div>
                        <!--Grupo Input  radioButton nivel-->
                        <div class="col-md-6 mb-3">
                            <label>Nivel</label>
                            </br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" value="Grado Medio" type="radio" id="nivel"
                                    name="nivel">
                                <label class="form-check-label" for="nivel">
                                    Grado Medio
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" value="Grado Superior" type="radio" id="nivel"
                                    name="nivel" checked>
                                <label class="form-check-label" for="nivel">
                                    Grado Superior
                                </label>
                            </div>
                        </div>
                        <!--Grupo Input radioButton LEy Educativa-->
                        <div class="col-md-6 mb-3">
                            <label>Ley Educativa</label>
                            </br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" value="LOE" type="radio" id="ley_educativa"
                                    name="ley_educativa">
                                <label class="form-check-label" for="ley_educativa">
                                    LOE
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" value="LOGSE" type="radio" id="ley_educativa"
                                    name="ley_educativa" checked>
                                <label class="form-check-label" for="ley_educativa">
                                    LOGSE
                                </label>
                            </div>
                        </div>
                        <!--Grupo Input familia_profesional-->
                        <div class="col-md-12 mb-3 formulario_grupo" id="formulario_familia_profesional">
                            <label for="familia_profesional" class="formulario_label">Familia Profesional</label>
                            <div class="formulario_grupo_input">
                                <input type="text" class="form-control formulario_input" id="familia_profesional"
                                    name="familia_profesional">
                                <i class=" formulario_validacion_estado fas fa-times"></i>
                            </div>
                            <span id="error_familia_profesional" class="formulario_sms_error">Dato incorrecto o inválido, por favor
                                escribir la familia profesional todo en mayúsculas o sólo la primera letra, no se admiten símbolos</span>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Módulos profesionales que se solicitan</legend>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th for="denominacion">Denominación</th>
                                <th for="codigo" colspan="2">Código</th>
                            </tr>
                        </thead>
                        <tbody class="field_wrapper">
                            <tr>
                                <td> <input type="text" class="form-control" name="denominacion[]" id="denominacion"
                                        class="add_button"></td>
                                <td> <input type="text" class="form-control" id="codigo" name="codigo[]"></td>
                                <td class="text-center"><a href="javascript:void(0);" class="add_button"
                                        title="Add field"><i class="fa fa-plus mt-1" style="font-size:24px; color:green"
                                            aria-hidden="true"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </fieldset>


                <fieldset>
                    <legend> Estudios que se aportan</legend>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th for="denominacion_estudios">Denominación</th>
                                <th for="tipo" colspan="2">Tipo</th>
                            </tr>
                        </thead>
                        <tbody class="field_wrapperModulos">
                            <tr>
                                <td> <input type="text" class="form-control" name="denominacion_estudios[]"
                                        id="denominacion_estudios"></td>
                                <td> <input type="text" class="form-control" id="tipo" name="tipo[]"></td>
                                <td class="text-center"><a href="javascript:void(0);" class="add_buttonModulos"
                                        title="Add field"><i class="fa fa-plus mt-1" style="font-size:24px; color:green"
                                            aria-hidden="true"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </fieldset>

                <fieldset>
                    <legend>Certificado de notas</legend>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="certificadoNotas" id="certificadoNotas"
                            lang="es" required>
                        <label class="custom-file-label" for="certificadoNotas">Seleccionar Archivo</label>
                    </div>
                </fieldset>

                <div class="formulario_mensaje" id="formulario_mensaje">
                    <span><i class="fas fa-exclamation-triangle"></i><b>Error:</b>
                        Por favor rellene el formulario correctamente</span>
                </div>
                <br />
                <div class="col text-center mb-3 formmulario_grupo formulario_boton">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                    <br /><br />
                    <span class="formulario_sms_exito" id="formulario_sms_exito">Formulario enviado</span>
                </div>
            </form>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
</div>
@endsection
