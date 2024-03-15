<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <style>
        /* Estilos para el header */
        header {
            background-color: #9be2f0;
            color: #3e3c3c;
            padding: 10px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 10px;
        }

        nav ul li a {
            color: #3e3c3c;
            text-decoration: none;
        }

        /* Estilos para las cards */
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between; /* Distribuir las cards horizontalmente */
            gap: 20px; /* Espacio entre las cards */
        }

        .card {
            flex: 0 0 calc(33.33% - 20px); /* Ancho de las cards (aproximadamente un tercio) */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 10px;
            margin: 10px;
            background-color: #f9f9f9;
            font-size: 14px; /* Tamaño de fuente más pequeño */
            width: 200px; /* Ancho de la card */
            height: 150px; /* Altura de la card */
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Usuarios</a></li>
                <li><a href="#">Docentes</a></li>
                <li><a href="#">Asignaturas</a></li>
                <li><a href="#">Calificaciones</a></li>
                <li><a href="#">Actividades</a></li>
                <li><a href="#">Asistencias</a></li>
                <li><a href="#">Participaciones</a></li>
            </ul>
        </nav>
    </header>
    @yield('contenido')
    <footer></footer>
</body>
</html>
