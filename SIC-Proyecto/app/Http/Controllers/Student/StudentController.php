<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //ESTE HEREDA DE LA CLASE CONTROLLER
    //EXTENDS EN PHP ES HERENCIA OK???????
    //VAMOS A SOBREESCRIIR ALGUNOS METODOS
    //DE LA CLASE PADRE A ESO COMO SE LE LLAMA EN POO? POLIMORFISMO



    public function index(){
        //
        return view('student');
    }

    public function store(StudentRequest $request){
        return "formulario procesando";
    }
}
