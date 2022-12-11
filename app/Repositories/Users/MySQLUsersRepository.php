<?php

namespace App\Repositories\Users;

use App\Database;
use App\Services\RegisterServiceRequest;

class MySQLUsersRepository implements UserRepository
{
    public function add(RegisterServiceRequest $request): void
    {
        $queryBuilder = Database::getConnection()->createQueryBuilder();
        $queryBuilder->insert('users')
            ->values([
                'name' => '?',
                'email' => '?',
                'password' => '?'
            ])
            ->setParameter(0, $request->getName())
            ->setParameter(1, $request->getEmail())
            ->setParameter(2, password_hash($request->getPassword(), PASSWORD_DEFAULT))
            ->executeQuery();
    }
}