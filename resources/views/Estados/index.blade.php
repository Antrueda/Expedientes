@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Expedientes</div>
       
            <div class="card-body">
                <a href='{{ route('estado.crear') }}' class='btn btn-sm btn-primary'>Crear Estado</a>
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>

    
@endsection
 
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush