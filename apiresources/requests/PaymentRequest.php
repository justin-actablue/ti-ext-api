<?php

namespace Igniter\Api\ApiResources\Requests;

use System\Classes\FormRequest;

class PaymentRequest extends FormRequest
{
    public function rules()
    {
        return [
            ['name', 'lang:admin::lang.label_name', 'required|min:2|max:32'],
            ['code', 'lang:admin::lang.payments.label_code', 'required|min:2|max:32'],
            ['class_name', 'lang:admin::lang:admin::lang.payments.label_code', 'required'],
            ['description', 'lang:admin::lang:admin::lang.payments.label_code', 'string'],
            ['data', 'lang:admin::lang.payments.label_code', 'array'],
            ['priority', 'lang:admin::lang:admin::lang.payments.label_priority', 'integer'],
            ['locations.*', 'lang:admin::lang.label_location', 'integer'],
            ['api_pass', 'lang:admin::lang.label_location', 'string'],
        ];
    }
}