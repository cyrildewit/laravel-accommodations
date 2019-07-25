<?php

use Domain\User\Models\User;
use Illuminate\Support\Facades\Auth;

function current_user(): ?User
{
    return Auth::guard('secure')->user();
}

function current_owner(): ?Owner
{
    return Auth::guard('portal')->user();
}

function current_employee(): ?Employee
{
    return Auth::guard('management')->user();
}
