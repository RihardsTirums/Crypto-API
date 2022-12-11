<?php

namespace App\Repositories\Coins;

use App\Models\Coin;
use App\Models\Collections\CoinCollection;

interface CoinRepository
{
    public function getCoins(int $limit): CoinCollection;
    public function getCoin(string $id): Coin;
    public function searchCoin(string $query): int;
}