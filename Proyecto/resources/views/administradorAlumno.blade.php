@extends('layouts.app')
<link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">

            <fieldset>
                <legend>Datos Personales:</legend>
                <div class="row">
                    <div class="col-md-2">
                        <table class="table table-bordered">
                            <tr>
                                <th>Nombre</th>
                            </tr>
                            <tr>
                                <td>{{$alumno->nombre}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-3">
                        <table class="table table-bordered">
                            <tr>
                                <th>Apellidos</th>
                            </tr>
                            <tr>
                                <td>{{$alumno->apellido}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-2">
                        <table class="table table-bordered">
                            <tr>
                                <th>NIE/NIF/Pasaporte</th>
                            </tr>
                            <tr>
                                <td>{{$alumno->dni}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-2">
                        <table class="table table-bordered">
                            <tr>
                                <th>Domicilio</th>
                            </tr>
                            <tr>
                                <td>{{$alumno->domicilio}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-2">
                        <table class="table table-bordered">
                            <tr>
                                <th>Provincia</th>
                            </tr>
                            <tr>
                                <td>{{$alumno->provincia}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-2">
                        <table class="table table-bordered">
                            <tr>
                                <th>Código Postal</th>
                            </tr>
                            <tr>
                                <td>{{$alumno->cod_postal}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-2">
                        <table class="table table-bordered">
                            <tr>
                                <th>Localidad</th>
                            </tr>
                            <tr>
                                <td>{{$alumno->localidad}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-2">
                        <table class="table table-bordered">
                            <tr>
                                <th>Telefono 1</th>
                            </tr>
                            <tr>
                                <td>{{$alumno->telefono_1}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-2">
                        <table class="table table-bordered">
                            <tr>
                                <th>Telefono 2</th>
                            </tr>
                            <tr>
                                <td>{{$alumno->telefono_2}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-2">
                        <table class="table table-bordered">
                            <tr>
                                <th>Email</th>
                            </tr>
                            <tr>
                                <td>{{$alumno->email}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Ciclo Formativo en que está matriculado/a:</legend>
                <div class="row">
                    <div class="col-md-2">
                        <table class="table table-bordered">
                            <tr>
                                <th>Estudio</th>
                            </tr>
                            <tr>
                                <td>{{$cicloFormativo->nombre_ciclo}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-2">
                        <table class="table table-bordered">
                            <tr>
                                <th>Nivel</th>
                            </tr>
                            <tr>
                                <td>{{$cicloFormativo->nivel}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-2">
                        <table class="table table-bordered">
                            <tr>
                                <th>Ley Educativa</th>
                            </tr>
                            <tr>
                                <td>{{$cicloFormativo->ley_educativa}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-2">
                        <table class="table table-bordered">
                            <tr>
                                <th>Familia Profesional</th>
                            </tr>
                            <tr>
                                <td>{{$cicloFormativo->familia_profesional}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Estudios que se aportan:</legend>
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-bordered">
                            <tr>
                                <th>Denominacion</th>
                                <th>Tipo</th>
                            </tr>
                            @foreach($estudio as $a)
                            <tr>

                                <td>{{$a->denominacion_estudios}}</td>
                                <td>{{$a->tipo}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Módulos profesionales que se solicitan:</legend>
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-bordered">
                            <tr>
                                <th>Denominacion</th>
                                <th>Código</th>
                                <th>Resolución</th>
                            </tr>
                            @foreach($modulo as $a)
                            <tr>
                                <td>{{$a->denominacion}}</td>
                                <td>{{$a->codigo}}</td>
                                <td>
                                    <form action="{{url('alumno/'.$a->id.'/edit')}}" method='GET'>

                                        @if($a->resolucion===null)
                                        <label class="btn btn-success">
                                            <input type="radio" name="resolucion" value="1" autocomplete="off">Aprobar
                                            </input>
                                        </label>

                                        <label class="btn btn-danger">
                                            <input type="radio" name="resolucion" value="0" class="ml-1"
                                                autocomplete="off">Denegar </input>
                                        </label>

                                        @elseif($a->resolucion==1)
                                        <label class="btn btn-success">
                                            <input type="radio" name="resolucion" value="1" checked>Aprobar </input>
                                        </label>

                                        <label class="btn btn-danger">
                                            <input type="radio" name="resolucion" value="0" class="ml-1">Denegar
                                            </input>
                                        </label>
                                        @else
                                        <label class="btn btn-success">
                                            <input type="radio" name="resolucion" value="1">Aprobar </input>
                                        </label>

                                        <label class="btn btn-danger">
                                            <input type="radio" name="resolucion" value="0" checked class="ml-1">Denegar
                                            </input>
                                        </label>
                                        @endif


                                        <button class="btn btn-primary mb-2" type="submit">Guardar</button>

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </fieldset>
            <div class="col text-center mb-3">
                <button class="btn btn-info"
                    onclick="location.href='{{url('/imprimirPDFanexoV/'.$alumno->dni)}}'">Imprimir Anexo</button>
                <button class="btn btn-info"
                    onclick="location.href='{{url('/imprimirCertificado/'.$alumno->dni)}}'">Imprimir Certificado
                </button>
                <button class="btn btn-info" onclick="location.href='/home'">Regresar</button>

            </div>

        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
</div>
@endsection
