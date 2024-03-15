@extends('plantilla')

@section('titulo')
    formulario
@endsection


@section('contenido')
<style>
    
    body {
    font-family: 'Arial', sans-serif;
    background-position: center; /* Centra la imagen en el cuerpo */
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}


        .sub {
        text-align: center; /* Centra horizontalmente el contenido del div */
        }

    .sub h3 {
    font-size: 20px; /* Establece el tamaño de la letra */
    font-weight: bold;
    color: #4e93ee;
    }

        main {
            flex: 1;
            padding: 20px;
        }

        /* Estilo para el contenedor del formulario */
    .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 62vh;
    }

    /* Estilo para el formulario */
    form {
    width: 250px;
    padding: 20px;
    padding_top: 50px;
    border-radius: 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Estilo para los inputs */
    input[type="text"],
    input[type="number"],
    input[type="date"],
    input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border: 1px solid #d2c2c2;
    border-radius: 5px;
    box-sizing: border-box;
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

    /* Estilo para los mensajes de error */
    div[style="color:red"] {
    margin-bottom: 10px;
    }   


        .icon {
            margin-bottom: 10px;
            font-size: 48px;
            color: #0056b3; /* Azul oscuro */
        }
    </style>
    <div>
        <div>

        </div>
    </div>
    <br>
    <a href="estudiantes"><button type="submit">Regresar</button></a>
    <br>
    <div class="container">
        <form action="{{url('estudiantes')}}" method="post" class="mt-10">
            @csrf
            <div class="sub">
                <h3>INSERTAR</h3>
            </div>
            <input type="text" name="name_student" placeholder="Nombre"/>
            @error('name_student')
                <div>{{$message}}</div>
            @enderror
            <input type="text" name="lastname_student" placeholder="Apellido"/>
            @error('lastname_student')
                <div>{{$message}}</div>
            @enderror
            <input type="number" name="id_student" placeholder="Matricula"/>
            @error('id_student')
                <div>{{$message}}</div>
            @enderror
            <input type="date" name="birthday" placeholder="Cumpleaños"/>
            @error('birthday')
                <div>{{$message}}</div>
            @enderror
            <input type="text" name="comments" placeholder="Comentarios"/>
            @error('comments')
                <div>{{$message}}</div>
            @enderror
            <button type="submit">Enviar</button>
        </form>
    </div>
    @endsection

