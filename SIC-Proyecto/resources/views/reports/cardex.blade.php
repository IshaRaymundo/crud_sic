<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{public_path('css/reports.css')}}"/>
    <title>Document</title>
</head>
<body>
    
    <h1>{{$title}}</h1>

    <div class="container">
        <div class="img-container">
            <img src="{{ public_path('images/foto.jpg') }}" alt="Foto del estudiante">
        </div>
        
        <div class="card">
            <p>Nombre del estudiante: <b>{{$details->name_student}}</b></p>
            <p>Apellido del estudiante: <b>{{$details->lastname_student}}</b></p>
            <p>Matricula del estudiante: <b>{{$details->id_student}}</b></p>
            <p>Fecha de nacimiento del estudiante: <b>{{$details->birthday}}</b></p>
            <p>Comentarios del estudiante: <b>{{$details->comments}}</b></p>
        </div>
    </div>

</body>
</html>
