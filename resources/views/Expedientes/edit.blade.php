@extends('layouts.app')
 
@section('content')

{!! Form::model($todoxxxx['modelox'],[route('expediente.update',$todoxxxx['modelox']->id),'method'=>'PUT','id'=>"formulario",'enctype'=>"multipart/form-data"]) !!}
<div class="container">
    <div class="card">
        <div class="card-header">Expedientes</div>
        <div class="card-body">
            <div class="form-row align-items-end">
                <div class="form-group col-md-6">
                    {{ Form::label('radicado', 'Radicado:', ['class' => 'control-label col-form-label-sm']) }}
                
                </div>
                <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="basic-addon1">54001-1-18-0</span>
                {{ Form::text('radicado', null, ['class' => $errors->first('radicado') ? 'form-control form-control-sm is-invalid ' :
                    'form-control form-control-sm', 'placeholder' => 'Numero de Radicado', 'maxlength' => '120', 'readonly']) }}
                @if($errors->has('radicado'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('radicado') }}
                </div>
                @endif
            </div>
                <div class="form-group col-md-6">
                    {{ Form::label('esta_id', 'Estado', ['class' => 'control-label']) }}
                    {{ Form::select('esta_id', $todoxxxx['estadox'], null, ['class' => $errors->first('esta_id') ?
                'form-control form-control-sm is-invalid cargos' : 'form-control form-control-sm cargos',
                'data-placeholder' => 'Seleccione un estado']) }}
                    @if($errors->has('esta_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('esta_id') }}
                    </div>
                    @endif
                </div>        
                <div class="form-group col-md-6">
                    {{ Form::label('area_id','Area') }}
                    {{ Form::select('area_id', $todoxxxx['areasxx'], null,['class'=> $errors->first('area_id') ? 'form-control is-invalid' :'form-control form-control-sm select2','autofocus']) }}
                    @if($errors->has('area_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('area_id') }}
                    </div>
                    @endif
                </div>
      
            
            </div>
            <br>
            <div class="row">
                <div class="col-md-4" style="align-content: center;">
                  {{ Form::submit('Actualizar', ['class' => 'btn btn-primary' ]) }}
                </div>
        
              </div>
        </div>
    </div>

</div>


{!! Form::close() !!}
@endsection
 
