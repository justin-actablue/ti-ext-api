<?php

namespace Igniter\Api\ApiResources;

use Igniter\Api\Classes\ApiController;

/**
 * TaxClasses API Controller
 */
class TaxClasses extends ApiController
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
        'request' => Requests\TaxClasses::class,
        'repository' => Repositories\TaxClassesRepository::class,
        'transformer' => Transformers\TaxClassesTransformer::class,
    ];

    protected $requiredAbilities = ['taxes:*'];
}
