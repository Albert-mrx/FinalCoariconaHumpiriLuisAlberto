<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcercadeController extends Controller
{
    public function index()
    {
        return view('acercade', [
            'apellidos_nombres' => 'Apellidos y Nombres', // Reemplaza con tus apellidos y nombres
            'carrera' => 'Carrera Profesional', // Reemplaza con tu carrera
            'nivel_ciclo' => 'Nivel/Ciclo de Estudios', // Reemplaza con tu nivel o ciclo de estudios
            'turno' => 'Turno', // Reemplaza con tu turno
        ]);
    }

}
