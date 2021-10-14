<?php

namespace Igniter\Api\ApiResources\Repositories;

use Admin\Models\Locations_model;
use Igniter\Api\Classes\AbstractRepository;

class LocationRepository extends AbstractRepository
{
    protected $modelClass = Locations_model::class;

    protected $hidden = ['location_thumb'];

    protected $fillable = ['location_name','location_email','location_telephone','thumb','location_status','location_address_1','location_address_2','location_city','location_state','location_postcode','location_country_id','location_lat','location_lng','options','description'];

    protected $guarded = [];

    public function getOptionsAttribute($value)
    {
        return array_except($value, ['hours']);
    }

    protected function extendQuery($query)
    {
        $query->select('*');
    }
}
