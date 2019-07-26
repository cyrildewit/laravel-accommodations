<?php

namespace Domain\Listing\Models;

use Domain\Room\Models\Room;
use Domain\User\Models\User;
use BenSampo\Enum\Traits\CastsEnums;
use Domain\Location\Models\Location;
use Domain\Listing\Enums\ListingType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Listing extends Model
{
    use CastsEnums;

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
     * The attributes that should be casted to an enum instance.
     *
     * @var array
     */
    protected $enumCasts = [
        'type' => ListingType::class,
    ];

    /**
     * Get the owner of this listing.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the rooms of this listing.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    /**
     * Get the attached location of the listing.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function location(): MorphOne
    {
        return $this->morphOne(Location::class, 'locatable');
    }
}
