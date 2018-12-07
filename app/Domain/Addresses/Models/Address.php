<?php

namespace App\Domain\Addresses\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * Get the addressible model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function addressable(): MorphTo
    {
        return $this->morphTo();
    }
}
