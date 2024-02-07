@extends('layouts.app')
 
@section('content')



<style>
    .step{
        height: 50px;
        width: 50px;
        line-height: 40px;
        margin: 0 2px;
        color: white;
        background: #0d6efd;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.25;
}
.col-md-3 {
    flex: 0 0 auto;

    padding: 10px;
}
.col-md-4 {
    flex: 0 0 auto;

    padding: 10px;
}
.d-flex {
    display: flex!important;
}
.ps-1 {
    padding-left: 0.25rem!important;
}
.align-items-center {
    align-items: center!important;
}

img, svg {
    vertical-align: middle;
}
*, ::after, ::before {
    box-sizing: border-box;
}

.icono
{
    margin-left: 10px;
    float: left;
}


.selectize-dropdown .selected {
    background-color: #198754;
    color: #fff;
}

img {
    overflow-clip-margin: content-box;
    overflow: clip;
}

.selectize-dropdown-content {
    overflow-y: auto;
    overflow-x: hidden;
    max-height: 130px;
    overflow-scrolling: touch;
}

textarea {
    resize: none;
    overflow: hidden;
    min-height: 80px;
    max-height: 210px;
}

.form-floating>.form-control, .form-floating>.form-control-plaintext, .form-floating>.form-select {
    height: calc(3.99rem + calc(var(--bs-border-width) * 2));
    margin: 2px;
    line-height: 1.25;
}

.selectize-input {
    min-height: calc(1.5em + 0.5rem + calc(var(--bs-border-width) * 2));
    padding: -0.25rem 0.5rem;
    padding-top: 2px;
    padding-left: 2px;
    font-size: .875rem;
    color: black;
    max-width: 100%;
    border-radius: 0.25rem;
    appearance: none;
    color: var(--bs-body-color);
        border: 0px solid #d0d0d0;
        background: 0 0!important;
        width: 95%;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

.selectize-control.single .selectize-input.dropdown-active:after {
    margin-top: -38px;
    border-width: 0 5px 5px 5px;
    border-color: transparent transparent grey transparent;
}
.selectize-control.single .selectize-input:after {
    content: " ";
    display: block;
    position: absolute;
    top: 50%;
    right: -18px;
    margin-top: -3px;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 5px 5px 0 5px;
    border-color: grey transparent transparent transparent;
}


.selectize-input>input[placeholder] {
    box-sizing: initial;
    color: black;
    font-size: .875rem;
    opacity: 100;
}

.selectize-input>input {
    display: inline-block!important;
    padding: 0!important;
    min-height: 0!important;
    max-height: none!important;
    max-width: 100%!important;
    margin: 0!important;
    text-indent: 0!important;
    border: 0 none!important;
    background: 0 0!important;
    line-height: inherit!important;
    user-select: auto!important;
    box-shadow: none!important;
}

.progress, .progress-stacked {
    --bs-progress-height: 5px;
    --bs-progress-font-size: 0.75rem;
    --bs-progress-bg: var(--bs-secondary-bg);
    --bs-progress-border-radius: var(--bs-border-radius);
    --bs-progress-box-shadow: var(--bs-box-shadow-inset);
    --bs-progress-bar-color: #fff;
    --bs-progress-bar-bg: #0d6efd;
    --bs-progress-bar-transition: width 0.6s ease;
    display: flex;
    height: var(--bs-progress-height);
    overflow: hidden;
    font-size: var(--bs-progress-font-size);
    background-color: var(--bs-progress-bg);
    border-radius: var(--bs-progress-border-radius);
    margin-top: -21px;
}


.select2-container {
    box-sizing: border-box;
    display: contents;
    
    margin-bottom: 222px;
    position: relative;
    vertical-align: middle;
}


.select2 {
width:100%!important;
padding: -0.625rem 0.75rem 0.375rem 2.25rem;
     background-image: ; 
     background-repeat: no-repeat; 
    background-position: right 0.75rem center; 
    background-size: 0px 0px;
	appearance: none;
    font-family: 'Public Sans', sans-serif;
    font-size: .875rem;


}


.select2-container--default .select2-selection--single .select2-selection__arrow b {
  background-image: url(https://cdn4.iconfinder.com/data/icons/user-interface-174/32/UIF-76-512.png);
  background-color: transparent;
  background-size: contain;
  border: none !important;
  height: 20px !important;
  width: 20px !important;
  margin: auto !important;
  top: auto !important;
  left: auto !important;
}


.select2-selection__arrow b{
    display:none !important;
}
.steps-form {
    display: table;
    width: 100%;
    position: relative; }
.steps-form .steps-row {
    display: table-row; }
.steps-form .steps-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc; }
.steps-form .steps-row .steps-step {
    display: table-cell;
    text-align: center;
    position: relative; }
.steps-form .steps-row .steps-step p {
    margin-top: 0.5rem; }
.steps-form .steps-row .steps-step button[disabled] {
    opacity: 3 !important;
    filter: alpha(opacity=100) !important; }
.steps-form .steps-row .steps-step .btn-circle {
    width: 36px;
    height: 35px;
    text-align: center;
    padding: 7px 0;
    font-size: 12px;
    /* line-height: 1.528571429;
    
    margin-top: -2px;  */
    border-radius: 25px;
    }


.btn-indigo{
    background-color: #6610f2;
    color: white;
}

.btn-indigo{
    background-color: #6610f2;
    color: white;
}
.btn-default{
    background-color: #20c997;
    color: white;
}

.btn-secondary:hover .svg {
  fill: black !important;
}

svg {
  fill: white;
}

.btn-step{
    background-color: var(--prm-color);
    color: #fff;
}

.btn-light{
    border-color: #0a5b42;
    opacity: 20px;
    
}

.btn-step:hover{
    border-color: #0a5b42;
    background-color: #50ae82;
    color: #ffffff
    
}

.text-:hover{
    border-color: #0a5b42;
    background-color: #ffffff;
    
}
/* .btn-light:hover {
  color: #1F2D3D;
  background-color: #e2e6ea;
  
} */
.btn-primary{
    border-color: #2039c9;
 
}


</style>

<div class="steps-form">
    <div class="steps-row setup-panel">
      <div class="steps-step">
        <a href="#step-1" type="button" data-bs-toggle="tooltip" data-bs-title="DATOS DEL SOLICITANTE"  class="btn btn-step btn-circle" id = "step-1"><span id="text-1"><b>1</b></span><i id="stepi-1" class="fas fa-check" style="display:none;"></i></a>
    
      </div>
      <div class="steps-step">
        <a href="#step-2" type="button" data-bs-toggle="tooltip" data-bs-title="DATOS DEL APODERADO" class="btn btn-light btn-circle" id = "step-2" disabled="disabled"><span id="text-2"><b>2</b></span><i id="stepi-2" class="fas fa-check" style="display:none;"></i></a>

      </div>
      <div class="steps-step">
        <a href="#step-3" type="button" data-bs-toggle="tooltip" data-bs-title="DATOS DE CONVOCADOS" class="btn btn-light btn-circle"  id = "step-3" disabled="disabled"><span id="text-3"><b>3</b></span><i id="stepi-3" class="fas fa-check" style="display:none;"></i></a>
   
      </div>
      <div class="steps-step">
        <a href="#step-4" type="button" data-bs-toggle="tooltip" data-bs-title="DATOS DE CONCILIACIÓN" class="btn btn-light btn-circle" id = "step-4" disabled="disabled"><span id="text-4"><b>4</b></span><i id="stepi-4" class="fas fa-check" style="display:none;"></i></a>
     
      </div>
    </div>
    

  </div>
  <div class="progress">
    <div class="progress-bar bg-primary" role="progressbar" id="progressbar" style="width: 12%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
  </div>



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
 
