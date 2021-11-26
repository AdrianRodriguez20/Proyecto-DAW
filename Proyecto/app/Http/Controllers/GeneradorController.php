<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Ciclo_formativo;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GeneradorController extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function imprimirPDFanexoV($id)
    {
        $alumno = Alumno::find($id);
        $estudio = DB::table('estudios')->where('dni', 'LIKE', '%' . $id . '%')->get();
        $modulo = DB::table('modulos')->where('dni', 'LIKE', '%' . $id . '%')->get();
        $cicloFormativo = Ciclo_formativo::find($id);

        $pdf = \PDF::loadView('anexoV', compact('alumno', 'estudio', 'modulo', 'cicloFormativo'));
        $apellidos = strtr($alumno['apellido'], " ", "_");
        return $pdf->download($apellidos . '_' . $alumno['nombre'] . '_AnexoV.pdf');

    }

    public function imprimirIES($id)
    {
        $alumno = Alumno::find($id);
        $estudio = DB::table('estudios')->where('dni', 'LIKE', '%' . $id . '%')->get();
        $modulo = DB::table('modulos')->where('dni', 'LIKE', '%' . $id . '%')->get();
        $cicloFormativo = Ciclo_formativo::find($id);

        $pdf = \PDF::loadView('formularioIES', compact('alumno', 'estudio', 'modulo', 'cicloFormativo'));
        $apellidos = strtr($alumno['apellido'], " ", "_");
        return $pdf->download($apellidos . '_' . $alumno['nombre'] . '_formularioIES.pdf');

    }

    public function imprimirCertificado($id)
    {
        $alumno = Alumno::find($id);
        $pathtoFile = $alumno['certificadoNotas'];
        return Storage::download($pathtoFile);
    }
}
