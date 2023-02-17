@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Expedientes</div>
       
            <div class="card-body">
                <a href='{{ route('area.crear') }}' class='btn btn-sm btn-primary'>Agregar Area</a>
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>

    
@endsection
 
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush