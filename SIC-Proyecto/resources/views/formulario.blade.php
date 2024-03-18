@extends('plantilla')

@section('titulo')
    formulario
@endsection

@section('contenido')
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-md w-full sm:w-96">
            <div class="text-center mb-4">
            <h1 class="text-2xl font-bold mb-4">Agregar Estudiante</h1>
            </div>
            <form action="{{ url('estudiantes') }}" method="post" class="space-y-4">
                @csrf
                <div>
                    <input type="text" name="name_student" placeholder="Nombre"
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                    @error('name_student')
                        <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <input type="text" name="lastname_student" placeholder="Apellido"
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                    @error('lastname_student')
                        <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <input type="number" name="id_student" placeholder="Matrícula"
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                    @error('id_student')
                        <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <input type="date" name="birthday" placeholder="Fecha de nacimiento"
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                    @error('birthday')
                        <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <input type="text" name="comments" placeholder="Comentarios"
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                    @error('comments')
                        <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit"
                        class="mx-auto bg-indigo-950 text-white py-2 px-4 rounded-md hover:bg-indigo-900 transition duration-300 ease-in-out block">
                    Agregar
                </button>
            </form>
        </div>
    </div>
@endsection
