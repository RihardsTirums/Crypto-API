<?php

namespace App\Repositories\Users;

use App\Services\RegisterServiceRequest;

interface UserRepository
{
    public function add(RegisterServiceRequest $request): void;
}