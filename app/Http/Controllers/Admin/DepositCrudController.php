<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\Settings\app\Models\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Deposit;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class DepositCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation {
        store as traitStore;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation {
        update as traitUpdate;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        $this->crud->setModel(Deposit::class);
        $this->crud->setEntityNameStrings(trans_choice('custom.deposit',1), trans_choice('custom.deposit',2));
        $this->crud->setEntityNameStrings(trans_choice('custom.deposit',1), trans_choice('custom.deposit',2));
        $this->crud->setRoute(backpack_url('deposit'));
//        $this->crud->denyAccess('delete');
        $this->crud->allowAccess('show');
    }

    public function setupListOperation()
    {
        $this->crud->setColumns([
            [
                // run a function on the CRUD model and show its return value
                'name' => "user_info",
                'label' => trans('custom.user'), // Table column heading
                'type' => "model_function",
                'function_name' => 'userInfo', // the method in your Model
                'limit' => 1000, // Limit the number of characters shown
            ],
            [
                'name' => 'start_amount',
                'label' => trans('custom.start_amount'),
                'type' => 'string',
                'prefix' => '$'
            ],
            [
                'name' => 'amount',
                'label' => trans('custom.amount'),
                'type' => 'string',
                'prefix' => '$'
            ],
            [
                'name' => 'earned_amount',
                'label' => trans('custom.earned_amount'),
                'type' => 'string',
                'prefix' => '$'
            ],
            [
                'name' => 'profit',
                'label' => trans('custom.profit'),
                'type' => 'string',
                'suffix' => '%'
            ],
            [
                'name' => 'capitalization',
                'label' => trans('custom.capitalization'),
                'type' => 'boolean',
                'prefix' => '$',
                'options' => [0 => 'No', 1 => 'Yes']
            ],
            [
                'name' => 'status', // The db column name
                'label' => trans('custom.status'), // Table column heading
                'type' => 'select_from_array',
                'options' => [
                    trans('custom.waiting'),//0
                    trans('custom.processing'),//1
                    trans('custom.rejected'),//2
                    trans('custom.finished')],//3
            ],
            [
                'name' => 'starts_at',
                'label' => trans('custom.starts_at'),
                'type' => 'date',
            ],
            [
                'name' => 'finish_at',
                'label' => trans('custom.finish_at'),
                'type' => 'date',
            ],
        ]);
    }

    public function setupShowOperation()
    {
        $this->setupListOperation();
    }

    public function setupCreateOperation()
    {
        $this->addDepositFields();
        //$this->crud->setValidation(StoreRequest::class);
    }

    public function setupUpdateOperation()
    {
        $this->addUpdateDepositFields();
        //$this->crud->setValidation(UpdateRequest::class);
    }

    public function store()
    {
        $this->crud->request = $this->handleDeposit($this->crud->request);
        $this->crud->request = $this->crud->validateRequest();
        $this->crud->unsetValidation(); // validation has already been run
        return $this->traitStore();
    }

    public function update()
    {
        $this->crud->request = $this->crud->validateRequest();
        $this->crud->request = $this->handleUpdateDeposit($this->crud->request, $this->crud->getCurrentEntry());
        $this->crud->unsetValidation(); // validation has already been run

        return $this->traitUpdate();
    }

    protected function addDepositFields()
    {
        $this->crud->addFields([
            [
                // 1-n relationship
                'label'     => trans('custom.user'), // Table column heading
                'type'      => 'select2',
                'name'      => 'user_id', // the column that contains the ID of that connected entity;
                'entity'    => 'user', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'model'     => User::class, // foreign key model
            ],
            [
                'name' => 'amount',
                'label' => trans('custom.amount'),
                'type' => 'number',
                'prefix' => '$',
                'attributes' => ["step" => "0.1"], // allow decimals
            ],
            [
                'name' => 'start_amount',
                'type' => 'hidden',
                'value' => 0
            ],
            [
                'name' => 'profit',
                'type' => 'hidden',
                'value' => 0
            ],
            [   // Date
                'name'  => 'starts_at',
                'label' => trans('custom.starts_at'),
                'type'  => 'date_picker',
                // optional:
                'date_picker_options' => [
                    'todayBtn' => true,
                    'format'   => 'dd-mm-yyyy',
                    'language' => 'en',
                ],
                // 'wrapperAttributes' => ['class' => 'col-md-6'],
            ],
            [
                'name' => 'len', // The db column name
                'label' => trans('custom.deposit_len'), // Table column heading
                'type' => 'select_from_array',
                'options' => [
                    1 => 1 .' '.trans_choice('custom.months',1),
                    3 => 3 .' '.trans_choice('custom.months',3),
                    6 => 6 .' '.trans_choice('custom.months', 6),
                ],
            ],
            [
                'name' => 'finish_at',
                'type' => 'hidden',
                'value' => 0
            ],
            [   // Checkbox
                'name' => 'capitalization',
                'label' => trans('custom.capitalization'),
                'type' => 'checkbox'
            ],
            [
                'name' => 'status', // The db column name
                'label' => trans('custom.status'), // Table column heading
                'type' => 'select_from_array',
                'options' => [
                    trans('custom.waiting'),//0
                    trans('custom.processing'),//1
                    trans('custom.rejected'),//2
                    trans('custom.finished')],//3
            ],
        ]);
    }
protected function addUpdateDepositFields()
    {
        $this->crud->addFields([
            [
                'name' => 'status', // The db column name
                'label' => trans('custom.status'), // Table column heading
                'type' => 'select_from_array',
                'options' => [
                    trans('custom.waiting'),//0
                    trans('custom.processing'),//1
                    trans('custom.rejected'),//2
                    trans('custom.finished')],//3
            ],
        ]);
    }

    public function handleDeposit($request)
    {
        $len = $request->post('len');
        $request->request->set('start_amount', $request->post('amount'));
        $startDate = Carbon::createFromFormat('Y-m-d',$request->post('starts_at'));
        $end_date = $startDate->addMonths($len)->toDateString();
        $request->request->remove('len');
        $validator = Validator::make($request->all(), ['starts_at' => 'required', 'amount' => 'required']);

        $validator->after(function ($validator, $len) {
            if (!in_array($len, [1,3,6])) {
                $validator->errors()->add('len', '1, 3 или 6 месяцев!');
                return redirect()->back(400)->withErrors($validator);
            }
        });

        $request->request->set('profit', Setting::get('deposit_'.$len));
//        $request->requset->set('finish_at', $end_date);
        $request->merge(['finish_at' => $end_date]);
        return $request;
    }

    public function handleUpdateDeposit($request, $deposit)
    {
        if ($deposit) {
            if ($request->post('status') != $deposit->status) {
                if ($request->post('status') == 2) { //REJECTED
                    $user = $deposit->user;
                    $user->balance += $deposit->amount;
                    $user->save();
                    //TODO: notify user
                } elseif ($request->post('status') == 1) {//PROCESSING(ACCEPTED)
                    $deposit->starts_at = Carbon::now();
                    switch ($deposit->profit) {
                        case Setting::get('deposit_3') :
                            $duration = 3;
                            break;
                        case Setting::get('deposit_6') :
                            $duration = 6;
                            break;
                        default :
                            $duration = 1;
                    }
                    $deposit->finish_at = Carbon::now()->addDays(31 * $duration);
                    $deposit->save();
                }
            }
        }
        return $request;

    }
}
