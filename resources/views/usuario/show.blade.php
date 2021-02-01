@extends('layouts.plantillaUsuario')

    @section('contenido')

    <h1>Datos del usuario</h1>

    Nombre usuario creado: {{ $user->name }}





    @endsection()

    @section('footer')

    @endsection()
