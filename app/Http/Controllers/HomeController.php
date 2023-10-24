<?php

namespace App\Http\Controllers;

use App\Models\AsignarServicio;
use App\Models\Tecnico;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Realiza una consulta para obtener el número de servicios asignados
        $numeroDeServiciosAsignados = AsignarServicio::count(); // Esto cuenta el número de registros en la tabla AsignarServicios

        $numeroDeTecnicos = Tecnico::count(); // Esto cuenta el número de registros en la tabla AsignarServicios

        return view('home', ['numeroDeServiciosAsignados' => $numeroDeServiciosAsignados,
            'numeroDeTecnicos' => $numeroDeTecnicos,

        ]);
    }
}
