@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-4">
            <div class="col text-center">
                <img src="https://i.ibb.co/xDr6Hht/Teacher-bro-1.png" width="75%" height="75%">
                <button type="button" class="btn btn-primary" onclick="window.location.href='/home'">Acceso como
                    profesor</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="col text-center">
                <img src="https://i.ibb.co/YcdfJQw/Exams-bro-2.png" width="75%" height="75%">
                <button type="button" onclick="window.location.href='/alumno/create'" class="btn btn-primary">Acceso
                    como alumno</button>
            </div>
        </div>
        <div class="col-md-2">

        </div>
    </div>
</div>
@endsection
