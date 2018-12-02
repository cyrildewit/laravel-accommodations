<?php

namespace App\Domain\Listings\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }
}
