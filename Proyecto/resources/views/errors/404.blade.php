@extends('errors::illustrated-layout')

@section('code', '404')

@section('title', __('Página no encontrada'))

@extends('layouts.app')

@section('content')


@section('image')

<style>
   body{
       background-color:white;
   }
</style>




<div id="apartado-derecho" class="absolute  bg-cover bg-no-repeat md:bg-left lg:bg-center">
<img src="https://i.ibb.co/pRzdJb4/404-Error-Page-not-Found-with-people-connecting-a-plug-bro.png" alt="404-Error-with-a-cute-animal-bro" width="75%" height="75%" >

</div>
@endsection


@section('message', __('No hemos encontrado la página que buscas.'))
