<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class StudentReportControllers extends Controller
{
    public function show_cardex($id){
        // OBTENER LOS DAROS DEL MODELOS
        $student=Student::find($id);
        $data=[
            'title'=>'Reporte de Estudiante',
            'details'=>$student
        ];
        // dd($student);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('reports.cardex',$data);
        return $pdf->stream();

    }

}
