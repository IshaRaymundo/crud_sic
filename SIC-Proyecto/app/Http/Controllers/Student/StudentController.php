<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use App\Models\Alumno;

class StudentController extends Controller
{
    // Método que muestra la plantilla principal
    public function index()
    {
        return view('student');
    }

    // Método para almacenar un nuevo alumno
    // Método para almacenar un nuevo alumno
// Método para almacenar un nuevo alumno
public function store(StudentRequest $request)
{
    // Validar los datos utilizando las reglas definidas en StudentRequest
    $request->validated();

    // Si la validación pasa, procedemos a guardar el alumno en la base de datos
    $alumno = new Alumno();
    $alumno->name_student = $request->name_student;
    $alumno->id_student = $request->id_student;
    $alumno->email_student = $request->email_student;
    $alumno->password_student = bcrypt($request->password_student); // Recuerda cifrar la contraseña

    // Guardar el alumno en la base de datos
    $alumno->save();

    // Redireccionar o realizar cualquier otra acción después de guardar el alumno
    return redirect()->route('docentes');

}


    // ESTE ES EL BUENO
    public function show($id)
    {
        // Buscar el alumno por su ID en la base de datos
        $alumno = Alumno::findOrFail($id);
        
        // Retornar la vista de detalles del alumno con los datos del alumno encontrado
        return view('alumnos.show', compact('alumno'));

    }

    public function edit(string $id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumnos.edit', compact('alumno')); // Pass $alumno to the view
    }

    public function update(StudentRequest $request, $id)
    {
        $alumno = Alumno::find($id);
        $alumno->update($request->all());
        return redirect()->route('estudiantes.index')->with('notificacion','Estudiante editado correctamente');
    }
}