@extends ('plantilla')
@section('titulo')
    docentes
@endsection

@section('contenido')
<h1>Bienvenidos docentes</h1>

<a href="{{route('alumnos')}}">alumnos</a>
@endsection


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Bienvenidos docentes</h1>

        <a href="{{route('alumnos')}}">alumnos</a>
    </div>
</body>
</html> -->

