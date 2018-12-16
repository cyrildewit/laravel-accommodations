<?php

namespace App\Domain\Owners\Models;

use Spatie\Permission\Traits\HasRoles;
use App\Domain\Listings\Models\Listing;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Owner extends Authenticatable
{
    use HasRoles,
        Notifiable,
        SoftDeletes;

    protected $guard_name = 'portal';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the listings of the owner.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function listings()
    {
        return $this->hasMany(Listing::class, 'owner_id');
    }
}
