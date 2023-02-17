<?php

namespace App\Http\Controllers;

use App\DataTables\ExpedientesDataTable;
use App\Http\Traits\Expedientes\CrudTrait;
use App\Models\Area;
use App\Models\Estado;
use App\Models\Expediente;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpedienteController extends Controller
{

    use CrudTrait; // trait donde se hace el crud de localidades

    public function index(ExpedientesDataTable $dataTable)
    {

       
        return $dataTable->render('expedientes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Area=Area::get();
        $Estado=Estado::get();
        $opciones['numerox']=Expediente::count()+1;
        $opciones['estadox'] = $this->comb($Estado,true,false);
        $opciones['areasxx'] = $this->comb($Area,true,false);


        return view('expedientes.crear', ['todoxxxx' => $opciones]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->radicado);
        $request->request->add(['radicado'=> '54001-1-18-0'.$request->radicado]);
        $request->request->add(['user_id'=>Auth::user()->id ]);
        
        //dd($request->radicado);

        return $this->SetExpediente([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Diagnóstico creado con éxito',
            'routxxxx' => 'expediente.crear'
        ]);
    }

    public static function comb($modelo, $cabecera, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            $comboxxx = ['' => 'Seleccione'];
        }
        foreach ($modelo as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
            } else {
                $comboxxx[$registro->id] = $registro->nombre;
            }
        }
        return $comboxxx;
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expediente  $expediente
     * @return \Illuminate\Http\Response
     */
    public function show(Expediente $expediente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expediente  $expediente
     * @return \Illuminate\Http\Response
     */
    public function edit(Expediente $modelox)
    {
        $dato = Expediente::find($modelox->id);
       // dd($dato->areas);
        $opciones['estadox'] = Estado::combo(true,false);
        $opciones['modelox'] =  $dato;
        $opciones['areasxx'] = Area::comb(true,false);
        return view('expedientes.edit', ['todoxxxx' => $opciones]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expediente  $expediente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expediente $modelox)
    {
        //ddd($modelox);
        $request->request->add(['user_id'=>Auth::user()->id ]);
        
        return $this->UpdateExpediente([
            'requestx' => $request,
            'modeloxx' => $modelox,
            'infoxxxx' => 'Diagnóstico creado con éxito',
            'routxxxx' => 'expediente.index'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expediente  $expediente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expediente $expediente)
    {
        //
    }
}
