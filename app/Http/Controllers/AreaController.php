<?php

namespace App\Http\Controllers;

use App\DataTables\AreasDataTable;
use App\Http\Traits\Areas\CrudTrait;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    use CrudTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AreasDataTable $dataTable)
    {
        return $dataTable->render('areas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('areas.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->SetArea([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Diagnóstico creado con éxito',
            'routxxxx' => 'area.index'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(Area $modelox)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit(Area $modelox)
    {
        $dato = Area::find($modelox->id);
        // dd($dato->areas);
         $opciones['modelox'] =  $dato;
         return view('areas.edit', ['todoxxxx' => $opciones]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Area $modelox)
    {
        return $this->UpdateArea([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Diagnóstico creado con éxito',
            'routxxxx' => 'area.index'
        ]);
    }

    public function eliminar(Area $modelox)
    {

        return $this->destroy($modelox);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy(Area $modelox)
    {
        $modelox->delete();
        return redirect()->back()
            ->with('info', 'Asistente eliminado correctamente');
    }
}
