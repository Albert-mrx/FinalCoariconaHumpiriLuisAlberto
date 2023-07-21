<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcercadeController extends Controller
{
    public function index()
    {
        return view('acercade', [
            'apellidos_nombres' => 'Coaricona Humpiri Luis Alberto',
            'carrera' => 'Desarrollo de sistemas de informacion',
            'nivel_ciclo' => '4to semestre',
            'turno' => 'noche',
        ]);
    }

}
