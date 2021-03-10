<?php

namespace App\DataTables;

use App\Model\Tablet;
use Yajra\DataTables\Services\DataTable;

class TabletDatatables extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
            ->addColumn('checkbox', 'admin.tablet.btn.checkbox')
            ->addColumn('edit', 'admin.tablet.btn.edit')
            ->addColumn('delete', 'admin.tablet.btn.delete')
            ->addColumn('tablet_image', function($query){
                $url = asset('storage/'.$query->tablet_image);
                return '<img src='.$url.' width="40px" height="40px">';
            })
            ->rawColumns([
                'checkbox',
                'edit',
                'delete',
                'tablet_image',
            ]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */

    public static function lang(){
        $langJson = [
            'sProcessing' => trans('admin.sProcessing'),
            "sLengthMenu" =>trans('admin.sLengthMenu'),
            "sZeroRecords"=> trans('admin.sZeroRecords'),
            "sEmptyTable"=>trans('admin.sEmptyTable'),
            "sInfoFiltered"=> "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix"=> "",
            "sSearch"=> trans('admin.sSearch'),
            "sUrl"=> "",
            "sInfoThousands"=> ",",
            "sLoadingRecords"=> "Cargando...",
            "oPaginate" =>[
                "sFirst"=> "Primero",
                "sLast"=> "Último",
                "sNext"=> trans('admin.sNext'),
                "sPrevious"=> trans('admin.sPrevious')
            ],
            "oAria" =>[
                "sSortAscending"=> ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending"=> ": Activar para ordenar la columna de manera descendente"
            ],
    ];
    return $langJson;
     }


    public function query()
    {
        return Tablet::query();
    }

  

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
        ->columns($this->getColumns())
        ->minifiedAjax()
        //->addAction(['width' => '80px'])
        //->parameters($this->getBuilderParameters());
        ->parameters([
            'dom' => 'Blfrtip',
            'lengthMenu' => [[10, 25, 50, 100, -1], [10, 25, 50, 'All Record']],
            'buttons' => [
                [
                    'text' => '<i class="fa fa-plus"> </i> ' . trans('admin.add'),
                    'className' => 'btn btn-info block',
                    'action' => "function(){
                        window.location.href = '".\URL::current()."/create';  
                    }"
                ],
                ['extend' => 'print', 'className' => 'btn btn-primary block', 'text' => '<i class="fa fa-print"> print page</i>'],
                ['extend' => 'csv', 'className' => 'btn btn-success block', 'text' => '<i class="fa fa-file"> CSV Export </i>'],
                [
                    'text' => '<i class="fa fa-trash"></i> ' .trans('admin.delete_all'),
                    'className' => 'btn btn-danger delBtn block'
                ],
                ['extend' => 'reload', 'className' => 'btn btn-default block reload', 'text' => '<i class="fa fa-refresh"> </i>'],
                ['text' => '<hr>']
                  
            ],
            'initComplete' => "function () {
                this.api().columns([1,2]).every(function () {
                    var column = this;
                    var input = document.createElement(\"input\");
                    $(input).appendTo($(column.footer()).empty())
                    .on('keyup', function () {
                        column.search($(this).val(), false, false, true).draw();
                    });
                });
            }",
            
            'language' => self::lang(),
        ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            [
                'name'  => 'checkbox',
                'data'  => 'checkbox',
                'title' => '<input type="checkbox" class="check_all" onclick="check_all()">',
                'exportable'=>false,
                'printable'=>false,
                'orderable'=>false,
                'searchable'=>false,
            ],[
            'name'      => 'id',
            'data'      => 'id',
            'title'     => 'ID',
           ],[
            'name' => 'name',
            'data' => 'name',
            'title' => trans('admin.name_protect'),
           ],[
            'name' => 'tablet_image',
            'data' => 'tablet_image',
            'title' => trans('admin.tablet_image'),
           ],[
            'name'  => 'edit',
            'data'  => 'edit',
            'title' => trans('admin.edit'),
            'exportable' => false,
            'printable'  => false,
            'orderable'  => false,
            'searchable' => false,
        ],[
            'name'  => 'delete',
            'data'  => 'delete',
            'title' => trans('admin.delete'),
            'exportable' => false,
            'printable'  => false,
            'orderable'  => false,
            'searchable' => false,
        ]

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'TabletDatatables.php_' . date('YmdHis');
    }
}
