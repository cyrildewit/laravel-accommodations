<?php

namespace Domain\Location\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /**
     * Get the locatable model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function locatable(): MorphTo
    {
        return $this->morphTo();
    }
}
