@extends('plantilla')

@section('titulo')
    Formulario de Estudiantes
@endsection

@section('contenido')
    <div class="container">
        <h2 class="text-center mb-4 mt-3">Formulario de Estudiantes</h2>
        <form action="{{ url('estudiantes') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name_student">Nombre:</label>
                <input type="text" class="form-control" id="name_student" name="name_student" placeholder="Nombre">
                @error('name_student')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="id_student">Matrícula:</label>
                <input type="text" class="form-control" id="id_student" name="id_student" placeholder="Matrícula">
                @error('id_student')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email_student">Correo:</label>
                <input type="email" class="form-control" id="email_student" name="email_student" placeholder="Correo">
                @error('email_student')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password_student">Contraseña:</label>
                <input type="password" class="form-control" id="password_student" name="password_student" placeholder="Contraseña">
                @error('password_student')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button> 

        </form>
        <a href="{{ url('estudiantes') }}" class="btn btn-secondary mt-3">Ir a la tabla</a>
    </div>

@endsection