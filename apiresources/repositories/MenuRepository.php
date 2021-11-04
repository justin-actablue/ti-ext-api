<?php

namespace Igniter\Api\ApiResources\Repositories;

use Admin\Models\Menus_model;
use Igniter\Api\Classes\AbstractRepository;

class MenuRepository extends AbstractRepository
{
    protected $modelClass = Menus_model::class;

    protected $fillable = ['menu_name', 'menu_description', 'menu_price', 'stock_qty', 
        'minimum_qty', 'subtract_stock', 'menu_status', 'menu_priority', 
        'order_restriction', 'menu_options', 'categories', 'locations', 
        'media', 'tax_class_id'];

    protected function extendQuery($query)
    {
        $query->with(['menu_options.menu_option_values']);
    }
}
