<?php

namespace App\Services;

use App\Repositories\Users\MySQLUsersRepository;
use App\Repositories\Users\UserRepository;

class RegisterService
{
    private UserRepository $userRepository;

    public function __construct()
    {
        $this->userRepository = new MySQLUsersRepository();
    }

    public function execute(RegisterServiceRequest $request): void
    {
        $this->userRepository->add($request);
    }
}