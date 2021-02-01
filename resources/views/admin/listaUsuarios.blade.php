@extends('layouts.plantillaAdmin')

    @section('contenido')

    <a href="{{ route('admin.nuevocliente') }}">Nuevo cliente</a>

    <h1>Lista de usuarios creados</h1>


            <ul>
                @foreach($users as $user)
                <nav-link>
                    <li><a href="{{route('admin.edit', $user->id) }}">{{ $user->name }}</a>{{$user->email}} {{$user->rolusuario }}</li>
                @endforeach
            </ul>

{{$users->links()}}


    @endsection()

    @section('footer')

    @endsection()
