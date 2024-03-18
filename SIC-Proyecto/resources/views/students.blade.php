@vite('resources/css/app.css')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
   
<header class="bg-indigo-950 text-white py-6 shadow-lg">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo o título -->
        <a href="#" class="text-xl font-bold">Sistema de Calificaciones</a>
        
        <!-- Enlaces de navegación -->
        <nav>
            <ul class="flex space-x-4">
                <li><a href="#" class="hover:text-gray-300 font-semibold">Inicio</a></li>
                <li><a href="#" class="hover:text-gray-300 font-semibold">Asesores</a></li>
                <li><a href="#" class="hover:text-gray-300 font-semibold">Alumnos</a></li>
                <li><a href="#" class="hover:text-gray-300 font-semibold">Calificaciones</a></li>
            </ul>
        </nav>
    </div>
</header>

    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-8">Lista de Estudiantes</h1>

        <div class="flex justify-center mb-8">
            <a href="formulario" class="bg-indigo-950 text-white py-2 px-4 rounded hover:bg-indigo-900 transition duration-300 ease-in-out">Agregar</a>
        </div>

        <table class="w-full bg-white shadow-md rounded-md">
            <thead class="bg-indigo-950 text-white">
                <tr>
                    <th class="py-2 px-4">ID</th>
                    <th class="py-2 px-4">Nombre</th>
                    <th class="py-2 px-4">Apellido</th>
                    <th class="py-2 px-4">Detalles</th>
                    <th class="py-2 px-4">Editar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr class="hover:bg-gray-100 transition duration-300 ease-in-out">
                    <td class="py-2 px-4">{{$student->id_student}}</td>
                    <td class="py-2 px-4">{{$student->name_student}}</td>
                    <td class="py-2 px-4">{{$student->lastname_student}}</td>
                    <td class="py-2 px-4"><a href="{{route('estudiantes.show', $student->id)}}" class="text-indigo-500 hover:text-indigo-700">Ver</a></td>
                    <td class="py-2 px-4"><a href="{{route('estudiantes.edit', $student->id)}}" class="text-indigo-500 hover:text-indigo-700">Editar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-8">
            {{$students->links()}}
        </div>
    </div>
</body>
</html>
