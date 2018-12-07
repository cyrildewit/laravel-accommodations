<?php

namespace App\Domain\Listings\Models;

use Spatie\Permission\Models\Role as BaseRole;

class Room extends BaseRole
{
    public static function generatePermissionsFor()
    {
        //
    }
}
