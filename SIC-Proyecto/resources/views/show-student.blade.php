@extends('plantilla')

@section('titulo')
    DETALLES
@endsection

@section('contenido')
    <div class="bg-gray-100 min-h-screen flex justify-center items-center">
        <div class="max-w-lg mx-auto bg-white rounded-lg shadow-md p-6">
            <h1 class="text-2xl font-bold mb-4">Detalles del Estudiante</h1>

            <table class="w-full">
                <tr>
                    <td class="py-2 px-4 bg-gray-200 font-semibold">Nombre del Estudiante:</td>
                    <td class="py-2 px-4 bg-gray-200">{{$student->name_student}}</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 font-semibold">Apellido del Estudiante:</td>
                    <td class="py-2 px-4">{{$student->lastname_student}}</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 bg-gray-200 font-semibold">Matrícula del Estudiante:</td>
                    <td class="py-2 px-4 bg-gray-200">{{$student->id_student}}</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 font-semibold">Cumpleaños del Estudiante:</td>
                    <td class="py-2 px-4">{{$student->birthday}}</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 bg-gray-200 font-semibold">Comentarios del Estudiante:</td>
                    <td class="py-2 px-4 bg-gray-200">{{$student->comments}}</td>
                </tr>
            </table>

            <div class="mt-6">
                <a href="../estudiantes" class="inline-block bg-indigo-900 text-white py-2 px-4 rounded-xl hover:bg-indigo-950 transition duration-300 ease-in-out"><- Regresar</a>
            </div>
        </div>
    </div>
@endsection
