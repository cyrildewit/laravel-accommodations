<?php

namespace App\Domain\Listings\Models;

use Illuminate\Database\Eloquent\Model;
use App\Domain\Addresses\Models\Address;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Listing extends Model
{
    /**
     * Get attached address of model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function address(): MorphOne
    {
        return $this->morphOne(Address::class, 'addressable');
    }
}
