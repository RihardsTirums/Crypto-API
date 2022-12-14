<?php

namespace App\Repositories\Users;

use App\Models\Collections\UsersCollection;
use App\Models\User;
use App\Services\RegisterServiceRequest;

interface UserRepository
{
    public function getAll(): UsersCollection;

    public function add(RegisterServiceRequest $request): void;

    public function getById(int $id): ?User;

    public function getByEmail(string $email): ?User;

    public function save(User $user): void;
}