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

    public function isAvailableForPeriod(DateTime $start, DateTime $end)
    {
        $count = $this->bookings()
            ->where(function ($query) use ($start, $end) {
                $query->where('check_in_date', '<=', $start)
                      ->where('check_out_date', '>=', $end);
            })
            ->orWhere(function ($query) use ($start, $end) {
                $query->where('check_in_date', '>=', $start)
                      ->where('check_out_date', '<=', $end);
            })
            ->orWhere(function ($query) use ($start, $end) {
                $query->where('check_in_date', '>=', $start)
                      ->where('check_out_date', '=>', $end)
                      ->where('check_in_date', '<=', $end);
            })
            ->orWhere(function ($query) use ($start, $end) {
                $query->where('check_in_date', '<=', $start)
                      ->where('check_out_date', '<=', $end)
                      ->where('check_out_date', '>=', $start);
            })
            ->count();

        return $count === 0;
    }
}
