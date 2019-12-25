<?php

namespace Domain\City\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Domain\Listing\Models\Listing;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cities';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Get the listings of this city.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function listings(): HasMany
    {
        return $this->hasMany(Listing::class);
    }
}
