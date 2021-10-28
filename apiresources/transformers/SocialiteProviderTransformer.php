<?php

namespace Igniter\Api\ApiResources\Transformers;

use Igniter\Socialite\Models\Provider;
use League\Fractal\TransformerAbstract;

class SocialiteProviderTransformer extends TransformerAbstract
{

    public function transform(Provider $socialiteProviders)
    {
        return $socialiteProviders->toArray();
    }
}