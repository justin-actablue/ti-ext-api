<?php

namespace Igniter\Api\ApiResources\Repositories;

use Admin\Models\Payments_model;
use Igniter\Api\Classes\AbstractRepository;

class PaymentRepository extends AbstractRepository
{
    protected $modelClass = Payments_model::class;
}
