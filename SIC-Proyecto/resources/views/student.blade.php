@extends('plantilla')

@section('titulo')
    Estudiantes
@endsection

@section('estilos')

@endsection

@section('contenido')
    <h1>Bienvenidos estudiantes</h1>

    <form action="{{url('alumnos')}}" method="POST">
        @csrf
        <input type="text" name="name_student" placeholder="Nombre">
        @error('name_student')
        <div class="error-message">{{$message}}</div>
        @enderror
        <input type="text" name="id_student" placeholder="Matricula">
        <input type="email" name="email_student" placeholder="Correo">
        <input type="password" name="password_student" placeholder="Contraseña">
        <button type="submit">ENVIAR</button>
    </form>
    
@endsection
