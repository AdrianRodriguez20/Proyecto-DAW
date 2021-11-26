@extends('layouts.app')
@section('content')
<script>
$('#myTab a').on('click', function(e) {
    e.preventDefault()
    $(this).tab('show')
})
</script>
<div class="container">

    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">

            <ul class="nav nav-tabs" role="tablist">
                <li ><a class="nav-item nav-link active"  role="button" data-toggle="tab" href="#home">Todos</a></li>
                <li><a class="nav-item nav-link"data-toggle="tab" href="#pendientes">Pendientes</a></li>
                <li><a class="nav-item nav-link" data-toggle="tab" href="#archivados">Resueltos</a></li>

            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane show in active">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>DNI</th>
                            <th>Ver Solicitud </th>
                            <th>Borrar</th>
                            <th>Archivar</th>
                        </tr>

                        @foreach($alumno as $a)
                        <tr>
                            <td>{{$a->nombre}}</td>
                            <td>{{$a->apellido}}</td>
                            <td>{{$a->dni}}</td>

                            <td> <a class="btn btn-info" role="button" href="{{url('/alumno/'.$a->dni)}}"><i
                                        class="far fa-eye" style="color:white"></i></a></td>
                            <td>
                                <form method="POST" action="{{ url('/alumno/'.$a->dni)}} ">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('¿Deseas borrar?');"><i
                                            class="fas fa-user-slash"></i></button>
                                </form>
                            </td>
                            <td>
                            <!--archivar-->
                            <form action="{{url('alumno/'.$a->dni.'/edit')}}" method='GET'>

                             <button type="submit" class="btn btn-secondary" name="estado" value="1" ><i class="fas fa-archive" style="color:white"></i></button>
                            </i></a>
                            </form>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                </div>
                <div id="pendientes" class="tab-pane fade">
                <table class="table table-bordered">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>DNI</th>
                            <th>Ver Solicitud </th>
                            <th>Borrar</th>
                        </tr>

                        @foreach($alumnosPendientes as $a)
                        <tr>
                            <td>{{$a->nombre}}</td>
                            <td>{{$a->apellido}}</td>
                            <td>{{$a->dni}}</td>

                            <td> <a class="btn btn-info" role="button" href="{{url('/alumno/'.$a->dni)}}"><i
                                        class="far fa-eye" style="color:white"></i></a></td>
                            <td>
                                <form method="POST" action="{{ url('/alumno/'.$a->dni)}} ">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('¿Deseas borrar?');"><i
                                            class="fas fa-user-slash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                </div>
                <div id="archivados" class="tab-pane fade">
                <table class="table table-bordered">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>DNI</th>
                            <th>Ver Solicitud </th>
                            <th>Borrar</th>
                        </tr>

                        @foreach($alumnosResueltos as $a)
                        <tr>
                            <td>{{$a->nombre}}</td>
                            <td>{{$a->apellido}}</td>
                            <td>{{$a->dni}}</td>

                            <td> <a class="btn btn-info" role="button" href="{{url('/alumno/'.$a->dni)}}"><i
                                        class="far fa-eye" style="color:white"></i></a></td>
                            <td>
                                <form method="POST" action="{{ url('/alumno/'.$a->dni)}} ">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('¿Deseas borrar?');"><i
                                            class="fas fa-user-slash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                </div>
            </div>

        </div>
        <div class="col-md-2">
        </div>
    </div>

</div>

@endsection
