<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Ciclo_formativo;
use App\Models\Estudio;
use App\Models\Modulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevoUsuario = Alumno::find(request()->input("dni"));

        if ($nuevoUsuario != null && $nuevoUsuario['dni'] === request()->input("dni")) {
            return redirect()->back()->with('success', 'Dni repetido');
        } else {

            $datosAlumno = request()->only(['nombre', 'apellido', 'domicilio', 'cod_postal', 'provincia', 'localidad', 'telefono_1', 'telefono_2', 'email', 'dni', 'certificadoNotas']);

            $datosCicloFormativo = request()->only(['nombre_ciclo', 'nivel', 'ley_educativa', 'familia_profesional', "dni"]);
            $datosModulo = request()->only(["denominacion", "codigo", "dni"]);
            $datosEstudio = request()->only(["denominacion_estudios", "tipo", "dni"]);
            $alumno = request()->input("dni");

            if ($request->hasFile('certificadoNotas')) {
                //se guarda pero con nombre chungo que significa direccion de archivo
                //AÑADIR EN $DATOSALUMNO PARA SUBIRLOS A LA BASE DE DATOS PERO ANTES HACER NUEVO CAMPO BASE DE DATOS CON MIGRACIONs

                $nombre = $datosAlumno['apellido'] . $datosAlumno['nombre'] . "_certificado_notas" . "." . $request->file('certificadoNotas')->extension();
                $archivoRuta = $request->file('certificadoNotas')->storeAs('public', 'uploads\\' . $nombre);
                //  dd($archivo);
                //hacer un enlace simbolico de la carpeta storage
                //php artisan storage:link
            }
            $datosAlumno['certificadoNotas'] = $archivoRuta;
            Alumno::insert($datosAlumno);
            Ciclo_formativo::insert($datosCicloFormativo);

            $data_estudio = [];

            for ($j = 0; $j < count($datosEstudio['denominacion_estudios']); $j++) {
                $data_estudio[$j] = ['denominacion_estudios' => $datosEstudio['denominacion_estudios'][$j], 'dni' => $datosEstudio['dni'], 'tipo' => $datosEstudio['tipo'][$j]];
            }
            Estudio::insert($data_estudio);

            $data_modulo = [];
            for ($i = 0; $i < count($datosModulo['denominacion']); $i++) {
                $data_modulo[$i] = ['denominacion' => $datosModulo['denominacion'][$i], 'dni' => $datosModulo['dni'], 'codigo' => $datosModulo['codigo'][$i]];
            }
            Modulo::insert($data_modulo);

            return view('alumnoImprimirPDF')->with('alumno', $alumno);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno = Alumno::find($id);
        $estudio = DB::table('estudios')->where('dni', 'LIKE', '%' . $id . '%')->get();
        $modulo = DB::table('modulos')->where('dni', 'LIKE', '%' . $id . '%')->get();
        $cicloFormativo = Ciclo_formativo::find($id);
        return view('administradorAlumno')
            ->with('alumno', $alumno)
            ->with('estudio', $estudio)
            ->with('cicloFormativo', $cicloFormativo)
            ->with('modulo', $modulo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        if ($request->only('resolucion')) {
            $modulo = DB::table('modulos')->where('id', 'LIKE', '%' . $id . '%')->update($request->only('resolucion'));

        } else if ($request->only('estado')) {
            $alumno = DB::table('alumnos')->where('dni', 'LIKE', '%' . $id . '%')->update($request->only('estado'));

        }

        return Redirect::back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $alumno = Alumno::destroy($id);

        return redirect('home');

    }
}
