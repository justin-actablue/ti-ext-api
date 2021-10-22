<?php

namespace Igniter\Api\ApiResources;

use Igniter\Api\Classes\ApiController;

/**
 * Payments API Controller
 */
class Payments extends ApiController
{
    public $implement = ['Igniter.Api.Actions.RestController'];

    public $restConfig = [
        'actions' => [
            'index' => [
                'pageLimit' => 20,
            ],
            'store' => [],
            'show' => [],
            'update' => [],
            'destroy' => [],
        ],
        'request' => Requests\PaymentRequest::class,
        'repository' => Repositories\PaymentRepository::class,
        'transformer' => Transformers\PaymentTransformer::class,
    ];

    protected $requiredAbilities = ['payments:*'];
}
