@extends('layouts.app')
 
@section('content')

{!! Form::open(['route' => ['estado.store'],'class' => 'form-horizontal']) !!}
<div class="container">
    <div class="card">
        <div class="card-header">Estado</div>
        <div class="card-body">
            <div class="form-row align-items-end">
                <div class="form-group col-md-6">
                    {{ Form::label('nombre', 'Nombre Estado:', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::text('nombre',null, ['class' => $errors->first('nombre') ? 'form-control form-control-sm is-invalid ' :
                    'form-control form-control-sm', 'placeholder' => 'Nombre', 'maxlength' => '120',]) }}
                @if($errors->has('nombre'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('nombre') }}
                </div>
                @endif
            </div>
               
      
            
            </div>
            <br>
            <div class="row">
                <div class="col-md-4" style="align-content: center;">
                  {{ Form::submit('Registrar', ['class' => 'btn btn-primary' ]) }}
                </div>
        
              </div>
        </div>
    </div>

</div>
{!! Form::close() !!}
@endsection
 
