@extends('plantilla')

@section('titulo')
    alumnos
@endsection

@section('estilos')
   
@endsection

@section('contenido')
<style>
    table {
        border-collapse: separate;
        border-spacing: 0 10px; /* Espacio entre las celdas */
        width: 100%;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
    <h1>Lista de estudiantes</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>ID</th>
            <th>Fecha de nacimiento</th>
            <th>Comentarios</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{$student->name_student}}</td>
                <td>{{$student->lastname_student}}</td>
                <td>{{$student->id_student}}</td>
                <td>{{$student->birthday}}</td>
                <td>{{$student->comments}}</td>
            </tr>
        @endforeach
    </table>
@endsection
