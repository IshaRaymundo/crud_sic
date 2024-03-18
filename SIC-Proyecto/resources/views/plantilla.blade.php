@vite('resources/css/app.css')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    
</head>
<body>
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
    @yield('contenido')
    <footer></footer>
</body>
</html>
