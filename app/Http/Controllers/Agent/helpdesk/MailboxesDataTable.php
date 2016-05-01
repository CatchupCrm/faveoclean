<?php

namespace App\DataTables;

use App\Models\MailBoxes;
use Form;
use Yajra\Datatables\Services\DataTable;

class MailBoxesDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('actions', function ($data) {
                            return '
                            ' . Form::open(['route' => ['mailBoxes.destroy', $data->id], 'method' => 'delete']) . '
                            <div class=\'btn-group\'>
                                <a href="' . route('mailBoxes.show', [$data->id]) . '" class=\'btn btn-default btn-xs\'><i class="glyphicon glyphicon-eye-open"></i></a>
                                <a href="' . route('mailBoxes.edit', [$data->id]) . '" class=\'btn btn-default btn-xs\'><i class="glyphicon glyphicon-edit"></i></a>
                                ' . Form::button('<i class="glyphicon glyphicon-trash"></i>', [
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'onclick' => "return confirm('Are you sure?')"
                            ]) . '
                            </div>
                            ' . Form::close() . '
                            ';
                        })
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $mailBoxes = MailBoxes::query();

        return $this->applyScopes($mailBoxes);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns(array_merge(
                $this->getColumns(),
                [
                    'actions' => [
                        'orderable' => false,
                        'searchable' => false,
                        'printable' => false,
                        'exportable' => false
                    ]
                ]
            ))
            ->parameters([
                'dom' => 'Bfrtip',
                'scrollX' => true,
                'buttons' => [
                    'csv',
                    'excel',
                    'pdf',
                    'print',
                    'reset',
                    'reload'
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'bedrijfsid' => ['name' => 'bedrijfsid', 'data' => 'bedrijfsid'],
            'personeelslid' => ['name' => 'personeelslid', 'data' => 'personeelslid'],
            'isstandaard' => ['name' => 'isstandaard', 'data' => 'isstandaard'],
            'type' => ['name' => 'type', 'data' => 'type'],
            'emailnaam' => ['name' => 'emailnaam', 'data' => 'emailnaam'],
            'email' => ['name' => 'email', 'data' => 'email'],
            'gebruikersnaam' => ['name' => 'gebruikersnaam', 'data' => 'gebruikersnaam'],
            'wachtwoord' => ['name' => 'wachtwoord', 'data' => 'wachtwoord'],
            'actie' => ['name' => 'actie', 'data' => 'actie'],
            'tasksync' => ['name' => 'tasksync', 'data' => 'tasksync'],
            'pop' => ['name' => 'pop', 'data' => 'pop'],
            'smtp' => ['name' => 'smtp', 'data' => 'smtp'],
            'host' => ['name' => 'host', 'data' => 'host'],
            'leavemessageonserver' => ['name' => 'leavemessageonserver', 'data' => 'leavemessageonserver'],
            'hoeveeldagen' => ['name' => 'hoeveeldagen', 'data' => 'hoeveeldagen'],
            'handtekening' => ['name' => 'handtekening', 'data' => 'handtekening'],
            'syncstate' => ['name' => 'syncstate', 'data' => 'syncstate'],
            'beschikbaar' => ['name' => 'beschikbaar', 'data' => 'beschikbaar'],
            'agendasyncstate' => ['name' => 'agendasyncstate', 'data' => 'agendasyncstate'],
            'contactensyncstate' => ['name' => 'contactensyncstate', 'data' => 'contactensyncstate'],
            'contactenfolder' => ['name' => 'contactenfolder', 'data' => 'contactenfolder'],
            'contactpersonenfolder' => ['name' => 'contactpersonenfolder', 'data' => 'contactpersonenfolder'],
            'contactpersonensyncstate' => ['name' => 'contactpersonensyncstate', 'data' => 'contactpersonensyncstate'],
            'mailleden' => ['name' => 'mailleden', 'data' => 'mailleden'],
            'portpop' => ['name' => 'portpop', 'data' => 'portpop'],
            'portsmtp' => ['name' => 'portsmtp', 'data' => 'portsmtp'],
            'exchangedownloadenvanaf' => ['name' => 'exchangedownloadenvanaf', 'data' => 'exchangedownloadenvanaf'],
            'exchngbeveiliging' => ['name' => 'exchngbeveiliging', 'data' => 'exchngbeveiliging'],
            'autosync' => ['name' => 'autosync', 'data' => 'autosync']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'mailBoxes';
    }
}
