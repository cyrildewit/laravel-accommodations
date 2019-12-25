<?php

namespace Domain\Destination\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'destinations';

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
        // 'type' => ListingType::class,
    ];
}
