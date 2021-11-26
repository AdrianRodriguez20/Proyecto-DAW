@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Su solicitud se ha enviado correctamente , recuerde imprimir y firmar la solicitud.
            </h3>
            <h3 class="text-center">Debe de entregar la solicitud en el centro antes de finales de Octubre.</h3>
        </div>
        <div class="col-md-12 d-flex justify-content-center">
            <img src="https://i.ibb.co/hsRWRDL/Download-bro.png" width="30%" height="80%" />
        </div>
        <div class="col-md-12 d-flex justify-content-center">
            <div class="col text-center">
                <button class="btn btn-info"
                    onclick="location.href='{{url('/imprimirIES/'.$alumno)}}'">Imprimir</button>
                <button class="btn btn-info" onclick="location.href='{{url('/')}}'">Regresar</button>

            </div>
        </div>
    </div>
</div>


@endsection
