@extends('plantilla')

@section('titulo')
    alumnos
@endsection

@section('contenido')
<style>
    table {
        border-collapse: collapse;
        width: 100%;
        border: 2px solid #ddd;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #ade8f4; /* Azul crema */
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }


 /* Estilo para el botón */
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


    tr:hover {
        background-color: #f2f2f2;
    }
</style>

    <h1>Lista de estudiantes</h1>
    <a href="formulario"><button type="submit">Insertar</button></a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            {{-- <th>Fecha de nacimiento</th>
            <th>Comentarios</th> --}}
            <th>Detalles</th>
            <th>Editar</th>

        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{$student->id_student}}</td>

                <td>{{$student->name_student}}</td>
                <td>{{$student->lastname_student}}</td>
                {{-- <td>{{$student->birthday}}</td>
                <td>{{$student->comments}}</td> --}}
                <td><a href="{{route('estudiantes.show', $student->id)}}">ver</a></td>
                <td><a href="{{route('estudiantes.edit', $student->id)}}">editar</a></td>
            </tr>
        @endforeach
    </table>

    <div>
        {{$students->links()}}
    </div>
@endsection
