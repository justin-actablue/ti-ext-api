<?php

namespace Igniter\Api\ApiResources\Transformers;

use Admin\Models\Menu_options_model;
use League\Fractal\TransformerAbstract;

class MenuOptionTransformer extends TransformerAbstract
{

    protected $availableIncludes = [
        'locations',
        'option_values',
    ];

    public function transform(Menu_options_model $menuOption)
    {
        return array_merge($menuOption->toArray(), [
            'id' => $menuOption->option_id,
        ]);
    }

    public function includeOptionValues(Menu_options_model $menuOption)
    {
        //When Post/Patch and inside body comes with an json array option_values the deserialized object is a collection of array
        if (is_array($menuOption->option_values)){
            return $this->collection(
                $menuOption->option_values,
                new MenuOptionValueArrayTransformer,
                'option_values'
            );
        }

        return $this->collection(
            $menuOption->option_values,
            new MenuOptionValueTransformer,
            'option_values'
        );
    }

    public function includeLocations(Menu_options_model $menuOption)
    {
        return $this->collection(
            $menuOption->locations,
            new LocationTransformer,
            'locations'
        );
    }
}
