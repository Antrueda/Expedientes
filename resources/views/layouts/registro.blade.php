<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="{{ asset('adminlte/plugins/toastr/toastr.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset ('adminlte/plugins/toastr/toastr.min.css') }}">
   
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<style>

 .has-float-label {
                display: block;
                position: relative;
                font-size: larger;
                f
            }
          
            .btn-perso{
             background-color: #003e65;
                border-color:#003e65;
                color: white;
            }
            .form-label {
             margin-bottom: 1.5rem;
            }
            .form-control {

    background-color: #ffffff;
}
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

</style>
<script>
	toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "9000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}



</script>
<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Consulta Expedientes') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Crear Usuario') }}</a>
                                </li>
                            @endif
                        @else
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">{{ __('Usuarios') }}</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('expediente.index') }}">{{ __('Consultar Expedientes') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('expediente.crear') }}">{{ __('Registrar Expedientes') }}</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('area.index') }}">{{ __('Areas') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('estado.index') }}">{{ __('Estados') }}</a>
                        </li> --}}
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @stack('scripts')
    @include('layouts.mensaje')
</body>
</html>
