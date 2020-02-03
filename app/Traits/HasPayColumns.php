<?php

namespace App\Traits;

use App\User;

trait HasPayColumns {
    public function getPayColumns()
    {
        return [
            [
                // run a function on the CRUD model and show its return value
                'name' => "user_info",
                'label' => trans('custom.user'), // Table column heading
                'type' => "model_function",
                'function_name' => 'userInfo', // the method in your Model
                'limit' => 1000, // Limit the number of characters shown
            ],
            [
                'name' => 'amount',
                'label' => trans('custom.amount'),
                'type' => 'string',
                'prefix' => '$'
            ],
            [
                'name' => 'payment_method', // The db column name
                'label' => trans('custom.payment_method'), // Table column heading
                'type' => 'text',
            ],
            [
                'name' => 'payment_details', // The db column name
                'label' => trans('custom.payment_details'), // Table column heading
                'type' => 'text',
            ],
            [
                'name' => 'status', // The db column name
                'label' => trans('custom.status'), // Table column heading
                'type' => 'select_from_array',
                'options' => [trans('custom.waiting'), trans('custom.success')],
            ],

        ];
    }

    public function getPayFields()
    {
        return [
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
                'attributes' => ["step" => "0.01"], // allow decimals
            ],
            [
                'name' => 'payment_method', // The db column name
                'label' => trans('custom.payment_method'), // Table column heading
                'type' => 'select_from_array',
                'options' => ['Visa/MasterCard'=>'Visa/MasterCard', 'Qiwi' => 'Qiwi', 'YandexMoney'=>'YandexMoney'],
            ],
            [
                'name' => 'payment_details', // The db column name
                'label' => trans('custom.payment_details'), // Table column heading
                'type' => 'text',
            ],
            [
                'name' => 'status', // The db column name
                'label' => trans('custom.status'), // Table column heading
                'type' => 'select_from_array',
                'options' => [trans('custom.waiting'), trans('custom.success')],
            ],
        ];
    }
}
