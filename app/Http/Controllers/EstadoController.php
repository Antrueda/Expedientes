<?php

namespace App\Http\Controllers;

use App\DataTables\EstadosDataTable;
use App\Http\Traits\Estados\CrudTrait;
use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
use CrudTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(EstadosDataTable $dataTable)
    {
        return $dataTable->render('estados.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estados.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->SetEstado([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Diagnóstico creado con éxito',
            'routxxxx' => 'estado.index'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estado  $modelox
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $modelox)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estado  $modelox
     * @return \Illuminate\Http\Response
     */
    public function edit(Estado $modelox)
    {
        $dato = Estado::find($modelox->id);
        // dd($dato->areas);
         $opciones['modelox'] =  $dato;
         return view('areas.edit', ['todoxxxx' => $opciones]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estado  $modelox
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estado $modelox)
    {
        return $this->UpdateEstado([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Diagnóstico creado con éxito',
            'routxxxx' => 'area.index'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estado  $modelox
     * @return \Illuminate\Http\Response
     */


     public function eliminar(Estado $modelox)
     {

         return $this->destroy($modelox);
             }


    public function destroy(Estado $modelox)
    {
        $modelox->delete();
        return redirect()->back()
            ->with('info', 'Asistente eliminado correctamente');
    }
}
