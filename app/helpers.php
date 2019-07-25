<?php

use Domain\Users\Models\User;
use Illuminate\Support\Facades\Auth;

function current_user(): ?User
{
    return Auth::user();
}
