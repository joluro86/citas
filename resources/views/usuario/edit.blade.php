@extends('layouts.plantillaUsuario')

@section('contenido')

aqui editas  un usuario
<br>


    <div class="formulario">

        <form action="{{ route('usuarios.update', $user) }}" method="post">

            @csrf
            @method('put')


            <div class="mb-3">

                <label for="name" class="form-label">Nombre Usuario</label>
                <input type="text" class="form-control" name="name" value="{{ $user->name }}">

                <label for="email" class="form-label">Correo</label>
                <input type="text" class="form-control" name="email" value="{{ $user->email }}">

                <label for="rolusuario" class="form-label">Rol Usuario</label>
                <input type="text" class="form-control" name="rolusuario" value="{{ $user->rolusuario}}">
                <label for="password" class="form-label">Nueva contraseña</label>
                <input type="" class="form-control" name="password" value="" required>



            </div>
                      <button type="submit" class="btn btn-primary">Actualizar</button>
                      <button type="delete" class="btn btn-primary">Eliminar</button>

        </form>
    </div>




@endsection
