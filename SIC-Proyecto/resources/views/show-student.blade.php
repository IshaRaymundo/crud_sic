@extends('plantilla')

@section('titulo')
    DETALLES
@endsection

@section('contenido')


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detalles del Estudiante</title>
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

    .student-details {
        text-align: left;
    }
    

    button[type="submit"] {
    background-color:  #4e93ee;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    justify-content: center;
    align-items: center;

    border-radius: 4px;
    cursor: pointer;
    width: 250px;
    font-size: 14px; /* Establece el tamaño de la letra */
    font-weight: bold;
    }

    button:hover{
        background-color: #0b2a81;
        color: #ccc
    }

    .student-details p {
        margin: 10px 0;
    }

    .label {
        font-weight: bold;
    }
</style>
</head>
<body>

    <br>
    <br>
    <a href="../estudiantes"><button type="submit">Regresar</button></a>


<div class="card">
    <div class="student-details">
        <p><span class="label">Nombre del estudiante:</span>{{$student->name_student}}</p>

        <p><span class="label">Apellidos del estudiante:</span>{{$student->lastname_student}}</p>

        <p><span class="label">Matrícula del estudiante:</span>{{$student->id_student}}</p>

        <p><span class="label">Cumpleaños del estudiante:</span>{{$student->birthday}}</p>

        <p><span class="label">Comentarios del estudiante:</span>{{$student->comments}}</p>
    </div>
</div>

</body>
</html>
@endsection
