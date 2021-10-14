<?php

namespace Igniter\Api\ApiResources\Transformers;

use Admin\Models\Menu_item_options_model;
use League\Fractal\TransformerAbstract;

class MenuItemOptionArrayTransformer extends MenuItemOptionTransformer
{
    
    public function transform(array $menuItemOption)
    {
        return array_merge($menuItemOption, [
            'id' => $menuItemOption->menu_option_id,
            'option' => $menuItemOption->option,
        ]);
    }

}
