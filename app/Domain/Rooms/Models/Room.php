<?php

namespace App\Domain\Rooms\Models;

use DateTime;
use Spatie\EloquentSortable\Sortable;
use App\Domain\Listings\Models\Listing;
use App\Domain\Bookings\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\SortableTrait;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Room extends Model implements Sortable
{
    use SortableTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rooms';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    public $sortable = [
        'order_column_name'  => 'order_column',
        'sort_when_creating' => true,
    ];

    /**
     * Get the listing for this room.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function listing(): BelongsTo
    {
        return $this->belongsTo(Listing::class);
    }

    /**
     * Get the bookings of the room.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    /**
     * Determine if the room is available for the given period.
     *
     * @param  \DateTime  $startDate
     * @param  \DateTime  $endDate
     * @return bool
     */
    public function isAvailableForPeriod(DateTime $startDate, DateTime $endDate)
    {
        return $this->bookings()->overlapsPeriod($startDate, $endDate)->count() === 0;
    }

    /**
     * Determine if the room is available on the given date.
     *
     * @param  \DateTime  $date
     * @return bool
     */
    public function isAvailableForDate(DateTime $date)
    {
        return $this->bookings()->overlapsDate($date)->count() === 0;
    }
}
