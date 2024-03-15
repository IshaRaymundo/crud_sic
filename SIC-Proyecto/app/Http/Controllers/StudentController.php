<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Student;
use App\Http\Requests\StudentRequest;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $students=Student::all();
        $students=Student::paginate(10);
        return view('students',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }



    public function show(string $id)
    {
        //
        $student=Student::find($id);
        return view('show-student',compact('student'));
    }




    // Método para almacenar un nuevo alumno
    // Método para almacenar un nuevo alumno
// Método para almacenar un nuevo alumno

public function store(StudentRequest $request)
{


    $request->validated();

    $student = new Student;
    $student->name_student = $request->name_student;
    $student->lastname_student = $request->lastname_student;
    $student->id_student = $request->id_student;
    $student->birthday = $request->birthday;
    $student->comments = $request->comments;
    $student->save();

    return redirect()->route('estudiantes.index')->with('success', 'Datos agregados exitosamente.');
}
/*

    


    public function show(string $id)
    {
        //
        $student=Student::find($id);
        return view('show-student',compact('student'));
    }

    /**
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('edit-student', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, $id): RedirectResponse
    {


        // dd($request->all());

        $student = Student::find($id);
        
        // Actualiza los atributos del estudiante con los datos del formulario
        $student->update($request->all());
        
        return redirect()->route('estudiantes.index')->with('notificacion', 'Estudiante editado correctamente');
    }

    /**
  

     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
