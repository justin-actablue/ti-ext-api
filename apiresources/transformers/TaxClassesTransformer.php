<?php

namespace Igniter\Api\ApiResources\Transformers;

use CupNoodles\TaxClasses\Models\TaxClasses;
use League\Fractal\TransformerAbstract;

class TaxClassesTransformer extends TransformerAbstract
{

    public function transform(TaxClasses $taxClasses)
    {
        return array_merge($taxClasses->toArray(), [
            'id' => $taxClasses->tax_class_id,
        ]);
    }
}
