<?php

namespace App\Domain\Listings\Models;

use Illuminate\Database\Eloquent\Model;
use App\Domain\Addresses\Models\Address;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Listing extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'listings';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that should be casted.
     *
     * @var array
     */
    protected $casts = [
        // 'meta' => 'array',
    ];

    /**
     * Get the rooms for the listing.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    /**
     * Get the attached address of the listing.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function address(): MorphOne
    {
        return $this->morphOne(Address::class, 'addressable');
    }
}
