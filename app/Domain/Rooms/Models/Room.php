<?php

namespace App\Domain\Rooms\Models;

use DateTime;
use Spatie\EloquentSortable\Sortable;
use App\Domain\Bookings\Models\Booking;
use App\Domain\Listings\Models\Listing;
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
        return $this->availableForPeriod($startDate, $endDate)->count() === 0;
    }

    /**
     * Determine if the room is available on the given date.
     *
     * @param  \DateTime  $date
     * @return bool
     */
    public function isAvailableForDate(DateTime $date)
    {
        return $this->availableForDate($date)->count() === 0;
    }

    /**
     * Scope a query to only include rooms which are available for the given period.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param  \DateTime  $startDate
     * @param  \DateTime  $endDate
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAvailableForPeriod($query, DateTime $startDate, DateTime $endDate)
    {
        return $this->leftJoin('bookings', 'rooms.id', '=', 'bookings.room_id')
            ->where(function ($query) use ($startDate, $endDate) {
                $query->where('bookings.check_in_date', '<=', $startDate)
                      ->where('bookings.check_out_date', '>=', $endDate);
            })
            ->orWhere(function ($query) use ($startDate, $endDate) {
                $query->where('bookings.check_in_date', '>=', $startDate)
                      ->where('bookings.check_out_date', '<=', $endDate);
            })
            ->orWhere(function ($query) use ($startDate, $endDate) {
                $query->where('bookings.check_in_date', '>=', $startDate)
                      ->where('bookings.check_out_date', '=>', $endDate)
                      ->where('bookings.check_in_date', '<=', $endDate);
            })
            ->orWhere(function ($query) use ($startDate, $endDate) {
                $query->where('bookings.check_in_date', '<=', $startDate)
                      ->where('bookings.check_out_date', '<=', $endDate)
                      ->where('bookings.check_out_date', '>=', $startDate);
            });
    }

    /**
     * Scope a query to only include bookings which overlaps the given date.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param  \DateTime  $date
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAvailableForDate($query, DateTime $date)
    {
        return $this->leftJoin('bookings', 'rooms.id', '=', 'bookings.room_id')
            ->where('bookings.check_in_date', '<=', $date)
            ->where('bookings.check_out_date', '>=', $date);
    }
}
