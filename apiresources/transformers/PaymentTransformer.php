<?php

namespace Igniter\Api\ApiResources\Transformers;

use Admin\Models\Payments_model;
use League\Fractal\TransformerAbstract;

class PaymentTransformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'locations'
    ];

    public function transform(Payments_model $entity)
    {
        return $entity->toArray();
    }


    public function includeLocations(Payments_model $entity)
    {
        return $this->collection(
            $entity->locations,
            new LocationTransformer,
            'locations'
        );
    }
}
