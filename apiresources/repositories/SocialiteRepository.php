<?php

namespace Igniter\Api\ApiResources\Repositories;

use Igniter\Socialite\Models\Provider;
use Igniter\Api\Classes\AbstractRepository;

class SocialiteRepository extends AbstractRepository
{
    protected $modelClass = Provider::class;
}
