

@extends('plantilla')

@section('titulo')
    EDITAR
@endsection


@section('contenido')



<style>
    .card {
        height: 200px;
        width: 350px;
        margin: 0 auto;
        background-color: #f9f9f9;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    label {
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
    }

    input[type="text"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
    }

    .error-message {
        color: red;
        margin-top: 5px;
    }

    button[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
<body>

    <a href="../../estudiantes"><button type="submit">Regresar</button></a>

    <div class="card">


<form action="{{ route('estudiantes.update', $student->id) }}" method="POST">
    @csrf
    @method("put")

    <label for="name_student_input">Nombre:</label>
<input type="text" id="name_student_input" name="name_student" value="{{ $student->name_student }}">

    @error('name_student')
        <p class="error-message">{{ $message }}</p>
    @enderror

    <label for="lastname_student">Apellido:</label>
    <input type="text" name="lastname_student" value="{{ $student->lastname_student }}">
    @error('lastname_student')
        <p class="error-message">{{ $message }}</p>
    @enderror

    <button type="submit">Editar</button>
</form>

    </div>

@endsection
