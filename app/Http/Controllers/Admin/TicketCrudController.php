<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\PaymentRequest as StoreRequest;
use App\Http\Requests\PaymentRequest as UpdateRequest;
use App\Ticket;

class TicketCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation {
        store as traitStore;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation {
        update as traitUpdate;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel(Ticket::class);
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin') . '/ticket');
        $this->crud->setEntityNameStrings('Запрос', 'Запросам');
        $this->crud->denyAccess(['update', 'create', 'clone']);
        $this->crud->allowAccess('show');
    }

    public function setupListOperation()
    {
        $this->crud->setColumns([
            [
                'name' => 'name',
                'label' => 'Имя',
                'type' => 'text',
            ],
            [
                'name' => 'email',
                'label' => trans('backpack::permissionmanager.email'),
                'type' => 'email',
            ],
            [
                'name' => 'phone',
                'label' => 'Номер телефона',
                'type' => 'text',
            ],
            [
                'name' => 'text',
                'label' => 'Сообщение',
                'type' => 'text',
            ],
            [
                'name' => 'created_at',
                'label' => "Дата заявки",
                'type' => 'datetime',
            ],
        ]);
    }

    public function setupShowOperation()
    {
        $this->setupListOperation();
    }
//
//    public function setupCreateOperation()
//    {
//        $this->addWithdrawalFields();
//        $this->crud->setValidation(StoreRequest::class);
//    }
//
//    public function setupUpdateOperation()
//    {
//        $this->addWithdrawalFields();
//        $this->crud->setValidation(UpdateRequest::class);
//    }

    /**
     * Store a newly created resource in the database.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
//        $this->crud->request = $this->crud->validateRequest();
//        $this->crud->unsetValidation(); // validation has already been run
//
//        return $this->traitStore();
    }

    /**
     * Update the specified resource in the database.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update()
    {
//        $this->crud->request = $this->crud->validateRequest();
//        $this->crud->unsetValidation(); // validation has already been run
//
//        return $this->traitUpdate();
    }

}

