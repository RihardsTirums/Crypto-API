<?php

namespace App\Services\Crypto;

use App\Repositories\Crypto\CryptoRepository;

class SearchCryptoService
{
    private CryptoRepository $repository;

    public function __construct(CryptoRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute(string $query): ?int
    {
        try {
            return $this->repository->searchCoin($query);
        } catch (\Exception $e) {
            return null;
        }
    }
}