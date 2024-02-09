@extends('layouts.registro')
 
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

            padding: 3px;
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
            background-color: #0a5b42;
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

        .btn-primary{
            border-color: #2039c9;
        
        }


</style>



{!! Form::open(['route' => ['expediente.store'],'class' => 'form-horizontal']) !!}
<div class="container">
    <div class="card">
        <div class="row">
            <center>
        
        </center>
            <div class="col-md-1"> </div>
    
        </div>
        <br>
        <div class="steps-form">
            <div class="steps-row setup-panel">
              <div class="steps-step">
                <a href="#step-1" type="button" data-bs-toggle="tooltip" data-bs-title="IDENTIFICACIÓN DE LA SOLICITUD"  class="btn btn-step btn-circle" id = "step-1"><span id="text-1"><b>1</b></span><i id="stepi-1" class="fas fa-check" style="display:none;"></i></a>
            
              </div>
              <div class="steps-step">
                <a href="#step-2" type="button" data-bs-toggle="tooltip" data-bs-title="INFORMACIÓN SOBRE EL PREDIO" class="btn btn-light btn-circle" id = "step-2" disabled="disabled"><span id="text-2"><b>2</b></span><i id="stepi-2" class="fas fa-check" style="display:none;"></i></a>
      
              </div>
              <div class="steps-step">
                <a href="#step-3" type="button" data-bs-toggle="tooltip" data-bs-title="DATOS DE CONVOCADOS" class="btn btn-light btn-circle"  id = "step-3" disabled="disabled"><span id="text-3"><b>3</b></span><i id="stepi-3" class="fas fa-check" style="display:none;"></i></a>
           
              </div>
              <div class="steps-step">
                <a href="#step-4" type="button" data-bs-toggle="tooltip" data-bs-title="DATOS DE CONCILIACIÓN" class="btn btn-light btn-circle" id = "step-4" disabled="disabled"><span id="text-4"><b>4</b></span><i id="stepi-4" class="fas fa-check" style="display:none;"></i></a>
             
              </div>
              <div class="steps-step">
                <a href="#step-5" type="button" data-bs-toggle="tooltip" data-bs-title="DATOS DE CONCILIACIÓN" class="btn btn-light btn-circle" id = "step-5" disabled="disabled"><span id="text-4"><b>5</b></span><i id="stepi-5" class="fas fa-check" style="display:none;"></i></a>
             
              </div>
              <div class="steps-step">
                <a href="#step-6" type="button" data-bs-toggle="tooltip" data-bs-title="DATOS DE CONCILIACIÓN" class="btn btn-light btn-circle" id = "step-6" disabled="disabled"><span id="text-4"><b>6</b></span><i id="stepi-6" class="fas fa-check" style="display:none;"></i></a>
             
              </div>
            </div>
            
    
          </div>
          <div class="progress">
            <div class="progress-bar bg-primary" role="progressbar" id="progressbar" style="width: 9%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        
          <br>   <br>
    <div class="card tab" id="tab-1">
        <div class="card-header"> <div class="row">
            <center>
        IDENTIFICACIÓN DE LA SOLICITUD
        </center>
            <div class="col-md-1"> </div>
    
        </div>
        <br>
    </div>
        <div class="card-body">
            <div class="form-row align-items-end">
                {{-- <div class="form-group col-md-6">
                    {{ Form::label('radicado', 'Radicado:', ['class' => 'control-label ']) }}
                
                </div>
                <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="basic-addon1">54001-1-18-0</span>
                {{ Form::text('radicado', $todoxxxx['numerox'], ['class' => $errors->first('radicado') ? 'form-control form-control-sm is-invalid ' :
                    'form-control form-control-sm', 'placeholder' => 'Numero de Radicado', 'maxlength' => '120', 'readonly']) }}
                @if($errors->has('radicado'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('radicado') }}
                </div>
                @endif
            </div> --}}
            <div class="row">
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-control-sm validate" id="primernombre" onkeyup="this.value=this.value.toUpperCase();"  onpaste="return false;" name="primernombre" autocomplete="off"  required placeholder="0" minlength="4" maxlength="20"  >
                    <label for="primerNombre">Primer Nombre *</label>
                    <div class="invalid-feedback primerNombre">
                        Campo obligatorio.
                      </div>
 
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm validate" id="segundonombre" onkeyup="this.value=this.value.toUpperCase();"  onpaste="return false;" name="segundonombre" autocomplete="off"  required placeholder="0" minlength="4" maxlength="20"  >
                        <label for="segundonombre">Segundo Nombre *</label>
                        <div class="invalid-feedback segundonombre">
                            Campo obligatorio.
                          </div>
     
                      </div>
                    </div>
                <div class="col-md-3">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control form-control-sm validate" id="primerapellido" onkeyup="this.value=this.value.toUpperCase();"  onpaste="return false;" name="primerapellido" autocomplete="off"  required placeholder="0" minlength="4" maxlength="20"  >
                            <label for="primerapellido">Primer Apellido *</label>
                            <div class="invalid-feedback primerapellido">
                                Campo obligatorio.
                              </div>
         
                          </div>
                </div>

                <div class="col-md-3">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm validate" id="segundoapellido" onkeyup="this.value=this.value.toUpperCase();"  onpaste="return false;" name="segundoapellido" autocomplete="off"  required placeholder="0" minlength="4" maxlength="20"  >
                                <label for="segundoapellido">Segundo Apellido *</label>
                                <div class="invalid-feedback segundoapellido">
                                    Campo obligatorio.
                                  </div>
             
                              </div>
                </div>
                <div class="col-md-3">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control form-control-sm validate" id="numeroDocumento" onkeyup="this.value=this.value.toUpperCase();"  onpaste="return false;" name="numeroDocumento" autocomplete="off" onkeypress = "return soloNumeros(event);" required placeholder="0" minlength="4" maxlength="10" pattern="[0-9]+" >
                                    <label for="numeroDocumento">Numero de Documento</label>
                                    <div class="invalid-feedback numeroDocumento">
                                        Campo obligatorio.
                                      </div>
                 
                                  </div>
                </div>
                <div class="col-md-3">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control form-control-sm validate" id="celular" onkeyup="this.value=this.value.toUpperCase();"  onpaste="return false;" name="celular" autocomplete="off" onkeypress = "return soloNumeros(event);" required placeholder="0" minlength="4" maxlength="10" pattern="[0-9]+" >
                                        <label for="celular">Telefono Celular</label>
                                        <div class="invalid-feedback celular">
                                            Campo obligatorio.
                                          </div>
                     
                                      </div>
                </div>
                <div class="col-md-3">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control form-control-sm validate" id="primerTelefono" onkeyup="this.value=this.value.toUpperCase();"  onpaste="return false;" name="primerTelefono" autocomplete="off" onkeypress = "return soloNumeros(event);" required placeholder="0" minlength="4" maxlength="10" pattern="[0-9]+" >
                                            <label for="primerTelefono">Telefono Fijo</label>
                                            <div class="invalid-feedback primerTelefono">
                                                Campo obligatorio.
                                              </div>
                         
                                          </div>
                </div>
                     <div class="col-md-3">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control form-control-sm validate" id="direccion" onkeyup="this.value=this.value.toUpperCase();"  onpaste="return false;" name="direccion" autocomplete="off" onkeypress = "return soloNumeros(event);" required placeholder="0" minlength="4" maxlength="10" pattern="[0-9]+" >
                                                <label for="direccion">Dirección</label>
                                                <div class="invalid-feedback direccion">
                                                    Campo obligatorio.
                                                  </div>
                             
                                              </div>
                </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    {{ Form::select('estrato', $todoxxxx['estadox'], null, ['class' => $errors->first('estrato') ? 'form-control form-control-sm is-invalid validate' : 'form-control form-control-sm validate','name'=>'estrato','id'=>'estrato','placeholder'=>'- Seleccione Dato -']) }}
                    <label for="estrato"> 1.1 Tipo de Tramite *</label>
                    <div class="invalid-feedback estrato">
                        Campo obligatorio.
                      </div>
                  </div>
            </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
      
                    {{ Form::select('estrato', $todoxxxx['estadox'], null, ['class' => $errors->first('estrato') ? 'form-control form-control-sm is-invalid validate' : 'form-control form-control-sm validate','name'=>'estrato','id'=>'estrato','placeholder'=>'- Seleccione Dato -']) }}
                    <label for="estrato"> 1.2 Objeto del Tramite *</label>
                    <div class="invalid-feedback estrato">
                        Campo obligatorio.
                      </div>
                  </div>
            </div>        
            <div class="col-md-3">
                <div class="form-floating mb-3">
      
                    {{ Form::select('estrato', $todoxxxx['estadox'], null, ['class' => $errors->first('estrato') ? 'form-control form-control-sm is-invalid validate' : 'form-control form-control-sm validate','name'=>'estrato','id'=>'estrato','placeholder'=>'- Seleccione Dato -']) }}
                    <label for="estrato"> 1.3 Modalidad Licencia de Urbanicación *</label>
                    <div class="invalid-feedback estrato">
                        Campo obligatorio.
                      </div>
                  </div>
            </div>                
            <div class="col-md-3">
                <div class="form-floating mb-3">
      
                    {{ Form::select('estrato', $todoxxxx['estadox'], null, ['class' => $errors->first('estrato') ? 'form-control form-control-sm is-invalid validate' : 'form-control form-control-sm validate','name'=>'estrato','id'=>'estrato','placeholder'=>'- Seleccione Dato -']) }}
                    <label for="estrato"> 1.4 Modalidad Licencia de Contrucción *</label>
                    <div class="invalid-feedback estrato">
                        Campo obligatorio.
                      </div>
                  </div>
            </div>  
            <div class="col-md-3">
                <div class="form-floating mb-3">
      
                    {{ Form::select('estrato', $todoxxxx['estadox'], null, ['class' => $errors->first('estrato') ? 'form-control form-control-sm is-invalid validate' : 'form-control form-control-sm validate','name'=>'estrato','id'=>'estrato','placeholder'=>'- Seleccione Dato -']) }}
                    <label for="estrato"> 1.5 Modalidad Licencia de Subdivisión *</label>
                    <div class="invalid-feedback estrato">
                        Campo obligatorio.
                      </div>
                  </div>
            </div>  
            <div class="col-md-3">
                <div class="form-floating mb-3">
      
                    {{ Form::select('estrato', $todoxxxx['estadox'], null, ['class' => $errors->first('estrato') ? 'form-control form-control-sm is-invalid validate' : 'form-control form-control-sm validate','name'=>'estrato','id'=>'estrato','placeholder'=>'- Seleccione Dato -']) }}
                    <label for="estrato"> 1.6 Usos *</label>
                    <div class="invalid-feedback estrato">
                        Campo obligatorio.
                      </div>
                  </div>
            </div> 
            <div class="col-md-3">
                <div class="form-floating mb-3">
      
                    {{ Form::select('estrato', $todoxxxx['estadox'], null, ['class' => $errors->first('estrato') ? 'form-control form-control-sm is-invalid validate' : 'form-control form-control-sm validate','name'=>'estrato','id'=>'estrato','placeholder'=>'- Seleccione Dato -']) }}
                    <label for="estrato"> 1.7 Área o Unidades Construida(s) *</label>
                    <div class="invalid-feedback estrato">
                        Campo obligatorio.
                      </div>
                  </div>
            </div> 
            <div class="col-md-3">
                <div class="form-floating mb-3">
      
                    {{ Form::select('estrato', $todoxxxx['estadox'], null, ['class' => $errors->first('estrato') ? 'form-control form-control-sm is-invalid validate' : 'form-control form-control-sm validate','name'=>'estrato','id'=>'estrato','placeholder'=>'- Seleccione Dato -']) }}
                    <label for="estrato"> 1.8 Tipo de Vivienda *</label>
                    <div class="invalid-feedback estrato">
                        Campo obligatorio.
                      </div>
                  </div>
            </div> 
            <div class="col-md-3">
                <div class="form-floating mb-3">
      
                    {{ Form::select('estrato', $todoxxxx['estadox'], null, ['class' => $errors->first('estrato') ? 'form-control form-control-sm is-invalid validate' : 'form-control form-control-sm validate','name'=>'estrato','id'=>'estrato','placeholder'=>'- Seleccione Dato -']) }}
                    <label for="estrato"> 1.9 Bien de Interes Cultural *</label>
                    <div class="invalid-feedback estrato">
                        Campo obligatorio.
                      </div>
                    </div>
                </div> 

                </div>
            </div>
        </div>
        <div class="row justify-content-md-center" style="padding-top: 3px">
            <div id="apode_id" class="col-2">
            <div class="btn btn-success pt-2" onclick="run(1, 2);"  > Siguiente  <i class="far fa-check-circle ms-2" ></i> </div>
            
             </div>
         
        </div>
        <br>
    </div>
    

             
         <div class="card tab" id="tab-2">
            <div class="card-header">2.INFORMACIÓN SOBRE EL PREDIO</div>
                 <div class="card-body">
                    {{-- Step 2 --}}
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm validate" id="direccion" onkeyup="this.value=this.value.toUpperCase();"  onpaste="return false;" name="direccion" autocomplete="off" onkeypress = "return soloNumeros(event);" required placeholder="0" minlength="4" maxlength="10" pattern="[0-9]+" >
                                <label for="direccionact">2.1 Dirección O Nomenclatura Actual</label>
                                <div class="invalid-feedback direccion">
                                    Campo obligatorio.
                                  </div>
             
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control form-control-sm validate" id="direccion" onkeyup="this.value=this.value.toUpperCase();"  onpaste="return false;" name="direccion" autocomplete="off" onkeypress = "return soloNumeros(event);" required placeholder="0" minlength="4" maxlength="10" pattern="[0-9]+" >
                                    <label for="direccionact">Dirección O Nomenclatura Anterior(es)</label>
                                    <div class="invalid-feedback direccion">
                                        Campo obligatorio.
                                      </div>
                 
                                  </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control form-control-sm validate" id="direccion" onkeyup="this.value=this.value.toUpperCase();"  onpaste="return false;" name="direccion" autocomplete="off" onkeypress = "return soloNumeros(event);" required placeholder="0" minlength="4" maxlength="10" pattern="[0-9]+" >
                                        <label for="direccionact">2.2 No. Matrícula Inmobiliaria</label>
                                        <div class="invalid-feedback direccion">
                                            Campo obligatorio.
                                          </div>
                     
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control form-control-sm validate" id="direccion" onkeyup="this.value=this.value.toUpperCase();"  onpaste="return false;" name="direccion" autocomplete="off" onkeypress = "return soloNumeros(event);" required placeholder="0" minlength="4" maxlength="10" pattern="[0-9]+" >
                                            <label for="direccionact">2.3 No. Identificación Catastral</label>
                                            <div class="invalid-feedback direccion">
                                                Campo obligatorio.
                                              </div>
                         
                                          </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating mb-3">
                                  
                                                {{ Form::select('estrato', $todoxxxx['estadox'], null, ['class' => $errors->first('estrato') ? 'form-control form-control-sm is-invalid validate' : 'form-control form-control-sm validate','name'=>'estrato','id'=>'estrato','placeholder'=>'- Seleccione Dato -']) }}
                                                <label for="estrato"> 2.4 Clasificación del Suelo</label>
                                                <div class="invalid-feedback estrato">
                                                    Campo obligatorio.
                                                  </div>
                                                </div>
                                            </div> 
                      <div class="col-md-3">
                            <div class="form-floating mb-3">
                                {{ Form::select('estrato', $todoxxxx['estadox'], null, ['class' => $errors->first('estrato') ? 'form-control form-control-sm is-invalid validate' : 'form-control form-control-sm validate','name'=>'estrato','id'=>'estrato','placeholder'=>'- Seleccione Dato -']) }}
                                <label for="estrato"> 2.5 Planimetría Del Lote *</label>
                                <div class="invalid-feedback estrato">
                                    Campo obligatorio.
                                  </div>
                                </div>
                            </div> 
                            <div class="col-md-3">
                                <div class="form-floating mb-3">
                      
                                    {{ Form::select('estrato', $todoxxxx['estadox'], null, ['class' => $errors->first('estrato') ? 'form-control form-control-sm is-invalid validate' : 'form-control form-control-sm validate','name'=>'estrato','id'=>'estrato','placeholder'=>'- Seleccione Dato -']) }}
                                    <label for="estrato"> 2.6a Barrio O Urbanicación</label>
                                    <div class="invalid-feedback estrato">
                                        Campo obligatorio.
                                      </div>
                                    </div>
                                </div> 
                            <div class="col-md-3">
                <div class="form-floating mb-3">
      
                    {{ Form::select('estrato', $todoxxxx['estadox'], null, ['class' => $errors->first('estrato') ? 'form-control form-control-sm is-invalid validate' : 'form-control form-control-sm validate','name'=>'estrato','id'=>'estrato','placeholder'=>'- Seleccione Dato -']) }}
                    <label for="estrato"> 2.6b. Vereda *</label>
                    <div class="invalid-feedback estrato">
                        Campo obligatorio.
                      </div>
                    </div>
                </div> 
                            <div class="col-md-3">
                <div class="form-floating mb-3">
      
                    {{ Form::select('estrato', $todoxxxx['estadox'], null, ['class' => $errors->first('estrato') ? 'form-control form-control-sm is-invalid validate' : 'form-control form-control-sm validate','name'=>'estrato','id'=>'estrato','placeholder'=>'- Seleccione Dato -']) }}
                    <label for="estrato"> 2.6b Comuna *</label>
                    <div class="invalid-feedback estrato">
                        Campo obligatorio.
                      </div>
                    </div>
                </div> 
                            <div class="col-md-3">
                <div class="form-floating mb-3">
      
                    {{ Form::select('estrato', $todoxxxx['estadox'], null, ['class' => $errors->first('estrato') ? 'form-control form-control-sm is-invalid validate' : 'form-control form-control-sm validate','name'=>'estrato','id'=>'estrato','placeholder'=>'- Seleccione Dato -']) }}
                    <label for="estrato"> 2.6b Sector *</label>
                    <div class="invalid-feedback estrato">
                        Campo obligatorio.
                      </div>
                    </div>
                </div> 
                            <div class="col-md-3">
                <div class="form-floating mb-3">
      
                    {{ Form::select('estrato', $todoxxxx['estadox'], null, ['class' => $errors->first('estrato') ? 'form-control form-control-sm is-invalid validate' : 'form-control form-control-sm validate','name'=>'estrato','id'=>'estrato','placeholder'=>'- Seleccione Dato -']) }}
                    <label for="estrato"> 2.6b Estrato *</label>
                    <div class="invalid-feedback estrato">
                        Campo obligatorio.
                      </div>
                    </div>
                </div> 
                            <div class="col-md-3">
                <div class="form-floating mb-3">
      
                    {{ Form::select('estrato', $todoxxxx['estadox'], null, ['class' => $errors->first('estrato') ? 'form-control form-control-sm is-invalid validate' : 'form-control form-control-sm validate','name'=>'estrato','id'=>'estrato','placeholder'=>'- Seleccione Dato -']) }}
                    <label for="estrato"> 2.6b Corregimiento *</label>
                    <div class="invalid-feedback estrato">
                        Campo obligatorio.
                      </div>
                    </div>
                </div> 
                            <div class="col-md-3">
                <div class="form-floating mb-3">
      
                    {{ Form::select('estrato', $todoxxxx['estadox'], null, ['class' => $errors->first('estrato') ? 'form-control form-control-sm is-invalid validate' : 'form-control form-control-sm validate','name'=>'estrato','id'=>'estrato','placeholder'=>'- Seleccione Dato -']) }}
                    <label for="estrato"> 2.6b Manzana *</label>
                    <div class="invalid-feedback estrato">
                        Campo obligatorio.
                      </div>
                    </div>
                </div> 
                            <div class="col-md-3">
                <div class="form-floating mb-3">
      
                    {{ Form::select('estrato', $todoxxxx['estadox'], null, ['class' => $errors->first('estrato') ? 'form-control form-control-sm is-invalid validate' : 'form-control form-control-sm validate','name'=>'estrato','id'=>'estrato','placeholder'=>'- Seleccione Dato -']) }}
                    <label for="estrato"> 2.6b LOTE No. *</label>
                    <div class="invalid-feedback estrato">
                        Campo obligatorio.
                      </div>
                    </div>
                </div> 
                    </div>
                </div>
                <div class="row justify-content-md-center" style="padding-top: 3px">
                    <div id="apode_id" class="col-2">
                    <div class="btn btn-success pt-2" onclick="run(2, 3);"  > Siguiente  <i class="far fa-check-circle ms-2" ></i> </div>
                    
                     </div>
                 
                </div>
                <br>
            </div>






            
            
            {{-- Step 3-4 --}}
            <div class="card tab" id="tab-3">
                <div class="card-header">3. INFORMACIÓN DE VECINOS COLINDANTES</div>
                     <div class="card-body">
                 <div class="row">
                    <div class="card-body" style="margin-bottom: 10px; height">
                        <p class="text-justify">Si es un numero plural de convocados indique los correos electrónicos de cada uno de ellos. Se advierte que la invitación a la audiencia de conciliación virtual se realizará por correo electrónico, y por tanto deben ser verídicos. <b><u>Si no cuenta con ellos, adelante la solicitud de conciliación presencial en la Sedes de Conciliación del Personería de Bogotá D.C</u> </b>. que se encuentra publicadas en la página web de la Entidad.</p>
                        <br>
                        <div class="agregar">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" onkeyup="this.value=this.value.toUpperCase();"  onpaste="return false;" style="text-transform: uppercase" name="dirpredio" id="dirpredio" autocomplete="off" placeholder="0" minlength="3" maxlength="200" >
                                    <label for="dirpredio">Dirección del predio</label>
                                    <div class="invalid-feedback dirpredio">
                                        Campo obligatorio.
                                      </div>
                            </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" onkeyup="this.value=this.value.toUpperCase();"  onpaste="return false;" style="text-transform: uppercase" name="dircorr" id="dircorr" autocomplete="off" placeholder="0" minlength="3" maxlength="200" >
                                    <label for="dircorr">Dirección de correspondencia</label>
                                    <div class="invalid-feedback dircorr">
                                        Campo obligatorio.
                                      </div>
                            </div>
                            </div>
                  
                        </div>
                            <br>
        
                            
                            <div class="col-md-3">
                                 
                           <button type="button" class="btn btn-success pt-2" id="add_btn" >Agregar <i class="fa-solid fa-user-plus"></i></button> 
                            
            
              
                          </div>
                      <br><br>
                      
                    </div>
                    <div class="test">
                        <div class="row">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>DIRECCIÓN DEL PREDIO</th>
                                <th>DIRECCIÓN DE CORRESPONDENCIA</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody id="tablita"></tbody>
                          </table>
                        </div>
                        </div>
                       
                       
                    </div>
        
                  
                 </div>
                 <div class="row justify-content-md-center" style="padding-top: 3px">
                    <div id="apode_id" class="col-2">
                    <div class="btn btn-success pt-2" onclick="run(3, 4);"  > Siguiente  <i class="far fa-check-circle ms-2" ></i> </div>
                    
                     </div>
                 
                </div>
                <br>
                </div>
            </div>

            
            <div class="card tab" id="tab-4">
                <div class="card-header">4. LINDEROS DIMENSIONES Y ÁREAS</div>
                     <div class="card-body">
                        <div class="row">
                            <div class="card-body" style="margin-bottom: 10px; height">
                                <p class="text-justify">Si es un numero plural de convocados indique los correos electrónicos de cada uno de ellos. Se advierte que la invitación a la audiencia de conciliación virtual se realizará por correo electrónico, y por tanto deben ser verídicos. <b><u>Si no cuenta con ellos, adelante la solicitud de conciliación presencial en la Sedes de Conciliación del Personería de Bogotá D.C</u> </b>. que se encuentra publicadas en la página web de la Entidad.</p>
                                <br>
                                <div class="agregar">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-floating mb-3">
                                        <input type="text" class="form-control form-control-sm" onkeyup="this.value=this.value.toUpperCase();"  onpaste="return false;" style="text-transform: uppercase" name="linderos" id="linderos" autocomplete="off" placeholder="0" minlength="3" maxlength="200" >
                                            <label for="linderos">Linderos</label>
                                            <div class="invalid-feedback linderos">
                                                Campo obligatorio.
                                              </div>
                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-floating mb-3">
                                        <input type="text" class="form-control form-control-sm" onkeyup="this.value=this.value.toUpperCase();"  onpaste="return false;" style="text-transform: uppercase" name="longitud" id="longitud" autocomplete="off" placeholder="0" minlength="3" maxlength="200" >
                                            <label for="longitud">Longitud</label>
                                            <div class="invalid-feedback longitud">
                                                Campo obligatorio.
                                              </div>
                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-floating mb-3">
                                        <input type="text" class="form-control form-control-sm" onkeyup="this.value=this.value.toUpperCase();"  onpaste="return false;" style="text-transform: uppercase" name="colinda" id="colinda" autocomplete="off" placeholder="0" minlength="3" maxlength="200" >
                                            <label for="colinda">Colinda Con</label>
                                            <div class="invalid-feedback colinda">
                                                Campo obligatorio.
                                              </div>
                                    </div>
                                    </div>
                          
                                </div>
                                    <br>
                
                                    
                                    <div class="col-md-3">
                                         
                                   <button type="button" class="btn btn-success pt-2" id="add2_btn" >Agregar <i class="fa-solid fa-user-plus"></i></button> 
                                    
                    
                      
                                  </div>
                              <br><br>
                              
                            </div>
                            <div class="test">
                                <div class="row">
                                <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th>LINDEROS</th>
                                        <th>LONGITUD</th>
                                        <th>COLINDA CON</th>
                                        <th></th>
                                      </tr>
                                    </thead>
                                    <tbody id="tablind"></tbody>
                                  </table>
                                </div>
                                </div>
                               
                               
                            </div>
                
                          
                         </div>
                         <div class="row justify-content-md-center" style="padding-top: 3px">
                            <div id="apode_id" class="col-2">
                            <div class="btn btn-success pt-2" onclick="run(4, 5);"  > Siguiente  <i class="far fa-check-circle ms-2" ></i> </div>
                            
                             </div>
                         
                        </div>
                        <br>
                </div>
            </div>

            
            <div class="card tab" id="tab-5">
                <div class="card-header">5. TITULARES Y PROFESIONALES RESPONSABLES</div>
                     <div class="card-body">
                 <div class="row">
                    <div class="row">
                        <div class="card-body" style="margin-bottom: 10px; height">
                            <p class="text-justify">Si es un numero plural de convocados indique los correos electrónicos de cada uno de ellos. Se advierte que la invitación a la audiencia de conciliación virtual se realizará por correo electrónico, y por tanto deben ser verídicos. <b><u>Si no cuenta con ellos, adelante la solicitud de conciliación presencial en la Sedes de Conciliación del Personería de Bogotá D.C</u> </b>. que se encuentra publicadas en la página web de la Entidad.</p>
                            <br>
                            <div class="agregar">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-floating mb-3">
                                    <input type="text" class="form-control form-control-sm" onkeyup="this.value=this.value.toUpperCase();"  onpaste="return false;" style="text-transform: uppercase" name="nomtit" id="nomtit" autocomplete="off" placeholder="0" minlength="3" maxlength="200" >
                                        <label for="nomtit">Nombre</label>
                                        <div class="invalid-feedback linderos">
                                            Campo obligatorio.
                                          </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3">
                                    <input type="number" class="form-control form-control-sm" onkeyup="this.value=this.value.toUpperCase();"  onpaste="return false;" style="text-transform: uppercase" name="cedutit" id="cedutit" autocomplete="off" placeholder="0" minlength="3" maxlength="200" >
                                        <label for="cedutit">Cedula</label>
                                        <div class="invalid-feedback longitud">
                                            Campo obligatorio.
                                          </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3">
                                    <input type="number" class="form-control form-control-sm" onkeyup="this.value=this.value.toUpperCase();"  onpaste="return false;" style="text-transform: uppercase" name="teleftitu" id="teleftitu" autocomplete="off" placeholder="0" minlength="3" maxlength="200" >
                                        <label for="teleftitu">Teléfono</label>
                                        <div class="invalid-feedback colinda">
                                            Campo obligatorio.
                                          </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3">
                                        <input type="emailtitu" class="form-control form-control-sm" name="emailtitu" style="text-transform: lowercase" id="emailtitu" autocomplete="off" onpaste="return false;" placeholder="0" minlength="3" maxlength="50" >
                                        <label for="emailtitu">Email</label>
                                        <div class="invalid-feedback colinda">
                                            Campo obligatorio.
                                          </div>
                                </div>
                                </div>
                      
                            </div>
                                <br>
            
                                
                                <div class="col-md-3">
                                     
                               <button type="button" class="btn btn-success pt-2" id="add3_btn" >Agregar <i class="fa-solid fa-user-plus"></i></button> 
                                
                
                  
                              </div>
                          <br><br>
                          
                        </div>
                        <div class="test">
                            <div class="row">
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th>NOMBRE</th>
                                    <th>CEDULA</th>
                                    <th>TELÉFONO</th>
                                    <th>EMAIL</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody id="tabltitu"></tbody>
                              </table>
                            </div>
                            </div>
                           
                           
                        </div>
            
                      
                     </div>
                    </div>
                    <div class="row justify-content-md-center" style="padding-top: 3px">
                        <div id="apode_id" class="col-2">
                        <div class="btn btn-success pt-2" onclick="run(5, 6);"  > Siguiente  <i class="far fa-check-circle ms-2" ></i> </div>
                        
                         </div>
                     
                    </div>
                    <br>
                </div>
            </div>
                     <div class="card tab" id="tab-6">
                        <div class="card-header">5.2 PROFESIONALES RESPONSABLES</div>
                             <div class="card-body">
                               <div class="row">
                        <div class="card-body" style="margin-bottom: 10px; height">
                            <p class="text-justify">Si es un numero plural de convocados indique los correos electrónicos de cada uno de ellos. Se advierte que la invitación a la audiencia de conciliación virtual se realizará por correo electrónico, y por tanto deben ser verídicos. <b><u>Si no cuenta con ellos, adelante la solicitud de conciliación presencial en la Sedes de Conciliación del Personería de Bogotá D.C</u> </b>. que se encuentra publicadas en la página web de la Entidad.</p>
                            <br>
                            <div class="agregar">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-floating mb-3">
                                    <input type="text" class="form-control form-control-sm" onkeyup="this.value=this.value.toUpperCase();"  onpaste="return false;" style="text-transform: uppercase" name="nomprof" id="nomprof" autocomplete="off" placeholder="0" minlength="3" maxlength="200" >
                                        <label for="nomprof">Nombre</label>
                                        <div class="invalid-feedback nomprof">
                                            Campo obligatorio.
                                          </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3">
                                    <input type="text" class="form-control form-control-sm" onkeyup="this.value=this.value.toUpperCase();"  onpaste="return false;" style="text-transform: uppercase" name="cedprof" id="cedprof" autocomplete="off" placeholder="0" minlength="3" maxlength="200" >
                                        <label for="cedprof">Cedula</label>
                                        <div class="invalid-feedback cedprof">
                                            Campo obligatorio.
                                          </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3">
                                    <input type="text" class="form-control form-control-sm" onkeyup="this.value=this.value.toUpperCase();"  onpaste="return false;" style="text-transform: uppercase" name="teleprofe" id="teleprofe" autocomplete="off" placeholder="0" minlength="3" maxlength="200" >
                                        <label for="teleprofe">Teléfono</label>
                                        <div class="invalid-feedback teleprofe">
                                            Campo obligatorio.
                                          </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control form-control-sm" name="emailpro" style="text-transform: lowercase" id="emailpro" autocomplete="off" onpaste="return false;" placeholder="0" minlength="3" maxlength="50" >
                                        <label for="emailpro">Email</label>
                                        <div class="invalid-feedback emailpro">
                                            Campo obligatorio.
                                          </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control form-control-sm" name="nummatri" style="text-transform: lowercase" id="nummatri" autocomplete="off" onpaste="return false;" placeholder="0" minlength="3" maxlength="50" >
                                        <label for="nummatri">No. Matricula Profesional</label>
                                        <div class="invalid-feedback nummatri">
                                            Campo obligatorio.
                                          </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control form-control-sm" name="fechamatri" style="text-transform: lowercase" id="fechamatri" autocomplete="off" onpaste="return false;" placeholder="0" minlength="3" maxlength="50" >
                                        <label for="fechamatri">Fecha Exp. Matricula</label>
                                        <div class="invalid-feedback fechamatri">
                                            Campo obligatorio.
                                          </div>
                                </div>
                                </div>
                      
                            </div>
                                <br>
            
                                
                                <div class="col-md-3">
                                     
                               <button type="button" class="btn btn-success pt-2" id="add4_btn" >Agregar <i class="fa-solid fa-user-plus"></i></button> 
                                
                
                  
                              </div>
                          <br><br>
                          
                        </div>
                        <div class="test">
                            <div class="row">
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th>NOMBRE</th>
                                    <th>CEDULA</th>
                                    <th>TELÉFONO</th>
                                    <th>EMAIL</th>
                                    <th># MATRÍCULA</th>
                                    <th>FECHA EXP. MATRÍCULA</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody id="tablprof"></tbody>
                              </table>
                            </div>
                            </div>
                           
                           
                        </div>
            
                      
                     </div>
                    

                    <div class="row justify-content-md-center" style="padding-top: 3px">
                        <div class="col-md-2" style="align-content: center;">
                          {{ Form::submit('Registrar', ['class' => 'btn btn-success' ]) }}
                        </div>
                
                      </div>
                  
                 </div>
                </div>
            </div>
            
                   
                   
       
            
             
      
            
        
            <br>
 
        </div>
    </div>


{!! Form::close() !!}

<script>
function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 48) || (keynum == 57))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }

$(".tab").css("display", "none");
$("#tab-1").css("display", "block");
function run(hideTab, showTab){
    let valid = true ;
        if(hideTab < showTab){ // If not press previous button
          // Validation if press next button
          var currentTab = 0;
      
          x = $('#tab-'+hideTab);
          y = $(x).find(".form-control.form-control-sm.validate");
          z = $(x).find(".form-control.form-control-sm.selectize");
          
          var empty_fields=[];




        if (hideTab==3){
            

                if ($("#dircorr").val()===undefined) {
                    var texto="Nombre";
                    campostab2(texto);
                    return;
                }
                

        }


                for (i = 0; i < y.length; i++){
                    
                    if (y[i].value == ""||$(y[i]).val().length < y[i].minLength){
                        var nombre= y[i].name;
                        //$(y[i]).css("border-color", "rgb(235 16 16)");
                        $(y[i]).css("background", "#ffdddd");
                        nombre= nombre.replace('[]','')
                        $('.invalid-feedback.'+nombre).show();
                        valid =false;
                    }else{
                        console.log(y[i].name);
                        var nombre= y[i].name;
            
                        nombre= nombre.replace('[]','');
                
                      //  $(y[i]).css("border", "var(--bs-border-width) solid var(--bs-border-color)");
                       $(y[i]).css("background", "transparent");
                        $('.invalid-feedback.'+nombre).hide();
                    }          
                  }
   
                //   for (i = 0; i < z.length; i++){
                    
                //     var nombre= z[i].id;
                //     if (z[i].value == ""||$(z[i]).val().length < z[i].minLength){
                        
                //      //   $(y[i]).css("border-color", "rgb(235 16 16)");
                //         $(z[i]).css("background", "#ffdddd");
                //         //$(z[i]).parents(".input-file").find('input').val('');
                //         console.log( $(z[i]));
                  
                //         var cerca =$(z[i]).next(".form-control.form-control-sm.selectize.selectize-control.single")
                //         //form-control form-control-sm selectize selectize-control single
                //         console.log(cerca);
                //         $(cerca).css("background", "#ffdddd");
                //         console.log(z[i].value);
                //         nombre= nombre.replace('[]','')
                 
                //         $('.invalid-feedback.'+nombre).show();
                //         valid =false;
                //     }else{
                //         console.log(z[i].name);
                //         var nombre= z[i].name;
                //         var cerca =$(z[i]).next(".form-control.form-control-sm.selectize.selectize-control.single")
                       
                //         $(cerca).css("background", "transparent");
                        
                //         $('.invalid-feedback.'+nombre).hide();
                //     }          
                //   }


        }

        // Progress bar

        if (valid) {
        // Lógica para avanzar al siguiente paso (puede ser cambio de clases, visibilidad, etc.)
        if (hideTab==1){
              
              // if ($("#tipoSolicitud").val()===' ') {
              //     TipoSolicitud();
              //     return;
              // }
               if ($("#email").val() !== $("#emailCon").val()||$("#email").val() ==='') {
                  $('.invalid-feedback.igual').show();
                  $('.invalid-feedback.igualcon').show();
                   return;
              
              }else{
                  $('.invalid-feedback.igual').hide();
                  $('.invalid-feedback.igualcon').hide();
              }
      }

      if (hideTab==2){
                if ($("#emailApoderado").val() !== $("#emailApoderadoCon").val() || $("#emailApoderado").val() ==='') {
                    $('.invalid-feedback.iguala').show();
                    $('.invalid-feedback.igualacon').show();
                    return;
                }else{
                    $('.invalid-feedback.iguala').hide();
                    $('.invalid-feedback.igualacon').hide();
                }

        }


        // Switch tab
        $("#tab-"+hideTab).css("display", "none");
        $("#tab-"+showTab).css("display", "block");
        //$("#step-"+hideTab).removeClass('btn-success').addClass('btn-light');
        // $("#stepi-"+hideTab).css("display", "block"); 0f5132
        // $("#text-"+hideTab).css("display", "none");
        $("#step-"+showTab).removeClass('btn-light');
        $("#step-"+showTab).addClass('btn-step');
        //$("input").css("background", "#fff");
        for (i = 1; i < showTab; i++){
          if($("#tipoSolicitud").val()===0){
            $("#step-2").hide();
          }else{
            $("#step-2").show();
            $("#step-2").removeClass('btn-light');
            $("#step-2").addClass('btn-step');
          }
           $("#step-"+i).addClass("opacity", "1");
          console.log(i)
          
        }
        if(showTab===1){
            $("#progressbar").css("width", "10%");
        }else
        if(showTab===2){
            $("#progressbar").css("width", "25%");
        }else
        if(showTab===3){
            $("#progressbar").css("width", "40%");
        }else
        if(showTab===4){
            $("#progressbar").css("width", "60%");

        }else
        if(showTab===5){
            $("#progressbar").css("width", "75%");
        }else{
        $("#progressbar").css("width", "92%");
     }
        }

}

$('#add_btn').on('click',function(){
    var dirpredio= $("#dirpredio").val() ;
    var dircorr= $("#dircorr").val();
    
    var html='';
     html+=' <tr>';
     html+='<td style="text-transform: uppercase"><input type="text" class="form-control form-control-sm" name="dircorr[]" id="dircorr" value="'+dircorr+'" style="display:none;" >'+dircorr+'</td>';
     html+='<td style="text-transform: uppercase"><input type="text" class="form-control form-control-sm" name="dircorr[]" id="dircorr" value="'+dircorr+'" style="display:none;" >'+dircorr+'</td>';
     html+='<td> <button type="button" id="deletebtn" class="btn btn btn-outline-danger deletebtn">Eliminar <i class="far fa-times-circle"></i></button> </td>';
     html+='</tr>';


     $('#tablita').append(html);
     
     
    });
    $(document).on('click','#deletebtn',function(){
            console.log('test');
            $(this).closest('tr').remove();


        });


        
$('#add2_btn').on('click',function(){
    var linderos= $("#linderos").val() ;
    var longitud= $("#longitud").val() ;
    var colinda= $("#colinda").val();
    
    var html='';
     html+=' <tr>';
     html+='<td style="text-transform: uppercase"><input type="text" class="form-control form-control-sm" name="linderos[]" id="linderos" value="'+linderos+'" style="display:none;" >'+linderos+'</td>';
     html+='<td style="text-transform: uppercase"><input type="text" class="form-control form-control-sm" name="longitud[]" id="longitud" value="'+longitud+'" style="display:none;" >'+longitud+'</td>';
     html+='<td style="text-transform: uppercase"><input type="text" class="form-control form-control-sm" name="colinda[]" id="colinda" value="'+colinda+'" style="display:none;" >'+colinda+'</td>';
     html+='<td> <button type="button" id="deletebtn2" class="btn btn btn-outline-danger deletebtn2">Eliminar <i class="far fa-times-circle"></i></button> </td>';
     html+='</tr>';


     $('#tablind').append(html);
     
     
    });
    $(document).on('click','#deletebtn2',function(){
            console.log('test');
            $(this).closest('tr').remove();


        });

        
        $('#add3_btn').on('click',function(){
    var nomtitular= $("#nomtit").val() ;
    var cedutitular= $("#cedutit").val() ;
    var teleftitular= $("#teleftitu").val();
    var emailtitular= $("#emailtitu").val();
    
    var html='';
     html+=' <tr>';
     html+='<td style="text-transform: uppercase"><input type="text" class="form-control form-control-sm" name="nomtitular[]" id="nomtitular" value="'+nomtitular+'" style="display:none;" >'+nomtitular+'</td>';
     html+='<td style="text-transform: uppercase"><input type="text" class="form-control form-control-sm" name="cedutitular[]" id="cedutitular" value="'+cedutitular+'" style="display:none;" >'+cedutitular+'</td>';
     html+='<td style="text-transform: uppercase"><input type="text" class="form-control form-control-sm" name="cedutitular[]" id="cedutitular" value="'+cedutitular+'" style="display:none;" >'+cedutitular+'</td>';
     html+='<td style="text-transform: uppercase"><input type="text" class="form-control form-control-sm" name="emailtitu[]" id="emailtitu" value="'+emailtitu+'" style="display:none;" >'+emailtitu+'</td>';
     html+='<td> <button type="button" id="deletebtn2" class="btn btn btn-outline-danger deletebtn2">Eliminar <i class="far fa-times-circle"></i></button> </td>';
     html+='</tr>';


     $('#tabltitu').append(html);
     
     
    });
    $(document).on('click','#deletebtn2',function(){
            console.log('test');
            $(this).closest('tr').remove();


        });

        $('#add4_btn').on('click',function(){
    var nomprofe= $("#nomprof").val() ;
    var cedprofe= $("#cedprof").val() ;
    var teleprof= $("#teleprofe").val();
    var emailprof= $("#emailpro").val();
    var nummatrif= $("#nummatri").val();
    var fechamatrif= $("#fechamatri").val();
    
    var html='';
     html+=' <tr>';
     html+='<td style="text-transform: uppercase"><input type="text" class="form-control form-control-sm" name="nomprofe[]" id="nomprofe" value="'+nomprofe+'" style="display:none;" >'+nomprofe+'</td>';
     html+='<td style="text-transform: uppercase"><input type="text" class="form-control form-control-sm" name="cedprofe[]" id="cedprofe" value="'+cedprofe+'" style="display:none;" >'+cedprofe+'</td>';
     html+='<td style="text-transform: uppercase"><input type="text" class="form-control form-control-sm" name="teleprof[]" id="teleprof" value="'+teleprof+'" style="display:none;" >'+teleprof+'</td>';
     html+='<td style="text-transform: uppercase"><input type="text" class="form-control form-control-sm" name="emailprof[]" id="emailprof" value="'+emailprof+'" style="display:none;" >'+emailprof+'</td>';
     html+='<td style="text-transform: uppercase"><input type="text" class="form-control form-control-sm" name="nummatrif[]" id="nummatrif" value="'+nummatrif+'" style="display:none;" >'+nummatrif+'</td>';
     html+='<td style="text-transform: uppercase"><input type="text" class="form-control form-control-sm" name="fechamatrif[]" id="fechamatrif" value="'+fechamatrif+'" style="display:none;" >'+fechamatrif+'</td>';
     html+='<td> <button type="button" id="deletebtn2" class="btn btn btn-outline-danger deletebtn2">Eliminar <i class="far fa-times-circle"></i></button> </td>';
     html+='</tr>';


     $('#tablprof').append(html);
     
     
    });
    $(document).on('click','#deletebtn2',function(){
            console.log('test');
            $(this).closest('tr').remove();


        });
   
</script>
 
@endsection