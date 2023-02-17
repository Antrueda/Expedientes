<?php

namespace App\DataTables;

use App\Models\Expediente;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ExpedientesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        $test=
        
        Expediente::select(
            [
                'expedientes.id',
                'expedientes.radicado',
                'expedientes.created_at',
                'expedientes.esta_id',
                'expedientes.updated_at',
                'estados.nombre as estados',
                'areas.nombre as areas',
               'users.name as usuario',
            ]
        )
            ->join('estados', 'expedientes.esta_id', '=', 'estados.id')
            ->join('areas', 'expedientes.area_id', '=', 'areas.id')
            ->join('users', 'expedientes.user_id', '=', 'users.id');

        return (new EloquentDataTable($test))
        //->addColumn('link',"<a href='{{ route('expediente.editar') }}' class='btn btn-sm btn-primary'>Register</a>")
        // ->addColumn('link', function($test) {
        //     return '<a href="{{ route(expediente.editar,'$test->id') }}" class="btn btn-sm btn-primary">Register</a>';
        //     <a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.editar', [$queryxxx->id]) }}">EDITAR</a>
            
        // })
        ->addColumn('link', function($test) {
                return  view('Expedientes\botonesapi', [
                    'modelox' => $test,
                ]);
            }
        )
        ->rawColumns(['link'])
        ->setRowId('id');
            
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Expediente $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Expediente $model): QueryBuilder
    {
    
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('expedientes-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
      
                        Button::make('excel'),
                    //    Button::make('csv'),
                    //    Button::make('pdf'),
                        Button::make('print'),
                    //    Button::make('reset'),
                    //    Button::make('reload')
                    ]);
                    
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [
            Column::computed('link')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
            Column::make('id'),
            Column::make('radicado'),
            Column::make('estados'),
            Column::make('areas'),
            Column::make('usuario'),
            Column::make('created_at'),
            Column::make('updated_at'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Expedientes_' . date('YmdHis');
    }
}
