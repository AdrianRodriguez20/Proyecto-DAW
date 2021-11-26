<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Support\Facades\DB;

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
        $datos['alumno'] = Alumno::all();

        $datosResueltos['alumnosResueltos'] = DB::table('alumnos')->where('estado', 'LIKE', '%' . 1 . '%')->get();
        $datosPendientes['alumnosPendientes'] = DB::table('alumnos')->where('estado', 'LIKE', '%' . 0 . '%')->get();

        return view('administradorListado')
            ->with($datos)
            ->with($datosPendientes)
            ->with($datosResueltos);

    }
}
