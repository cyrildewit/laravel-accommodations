<?php

namespace App\Domain\Bookings\Models;

use App\Domain\Rooms\Models\Room;
use App\Domain\Users\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    /**
     * Get the room.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    /**
     * Get the user who booked this booking.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope a query to only include bookings that overlaps the given period.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param  \DateTime  $startDate
     * @param  \DateTime  $endDate
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOperlapsPeriod($query, DateTime $startDate, DateTime $endDate)
    {
        return $query->where(function ($query) use ($startDate, $endDate) {
                $query->where('check_in_date', '<=', $startDate)
                      ->where('check_out_date', '>=', $endDate);
            })
            ->orWhere(function ($query) use ($startDate, $endDate) {
                $query->where('check_in_date', '>=', $startDate)
                      ->where('check_out_date', '<=', $endDate);
            })
            ->orWhere(function ($query) use ($startDate, $endDate) {
                $query->where('check_in_date', '>=', $startDate)
                      ->where('check_out_date', '=>', $endDate)
                      ->where('check_in_date', '<=', $endDate);
            })
            ->orWhere(function ($query) use ($startDate, $endDate) {
                $query->where('check_in_date', '<=', $start)
                      ->where('check_out_date', '<=', $endDate)
                      ->where('check_out_date', '>=', $start);
            });
    }

    public function scopeOperlapsDate($query)
    {
        return $query; // todo
    }
}
