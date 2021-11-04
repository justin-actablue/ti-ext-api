<?php

namespace Igniter\Api\ApiResources\Repositories;

use CupNoodles\TaxClasses\Models\TaxClasses;
use Igniter\Api\Classes\AbstractRepository;

class TaxClassesRepository extends AbstractRepository
{
    protected $fillable = ['rate', 'name', 'apply_for_delivery'];
    protected $modelClass = TaxClasses::class;
}