@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Expedientes</div>
       
            <div class="card-body">
                <a href='{{ route('expediente.crear') }}' class='btn btn-sm btn-primary'>Registrar Expediente</a>
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>

    
@endsection
 
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush