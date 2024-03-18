@extends('plantilla')

@section('titulo')
    Editar
@endsection

@section('contenido')
    <div class="flex justify-center items-center h-screen bg-zinc-100">
        <div class="bg-white p-8 rounded-lg shadow-md w-full sm:w-2/3 max-w-md">
            <h1 class="text-2xl font-bold mb-4">Editar Estudiante</h1>

            <form action="{{ route('estudiantes.update', $student->id) }}" method="POST" class="space-y-4">
                @csrf
                @method("put")

                <div>
                    <label for="name_student" class="block font-semibold">Nombre:</label>
                    <input type="text" id="name_student" name="name_student" value="{{ $student->name_student }}"
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                    @error('name_student')
                        <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="lastname_student" class="block font-semibold">Apellido:</label>
                    <input type="text" id="lastname_student" name="lastname_student"
                           value="{{ $student->lastname_student }}"
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                    @error('lastname_student')
                        <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="id_student" class="block font-semibold">Matrícula:</label>
                    <input type="text" id="id_student" name="id_student" value="{{ $student->id_student }}"
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                    @error('id_student')
                        <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="birthday" class="block font-semibold">Fecha de nacimiento:</label>
                    <input type="text" id="birthday" name="birthday" value="{{ $student->birthday }}"
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                    @error('birthday')
                        <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="comments" class="block font-semibold">Comentarios:</label>
                    <input type="text" id="comments" name="comments" value="{{ $student->comments }}"
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                    @error('comments')
                        <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex justify-between">
            <button type="submit" class="bg-indigo-950 text-white py-2 px-4 rounded-md hover:bg-indigo-900 transition duration-300 ease-in-out">Enviar</button>
            <a href="../../estudiantes" class="bg-indigo-900 text-white py-2 px-4 rounded-xl hover:bg-indigo-950 transition duration-300 ease-in-out">Regresar</a>
        </div>
    </div>
@endsection
