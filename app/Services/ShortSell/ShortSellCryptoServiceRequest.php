<?php

namespace App\Services\ShortSell;

class ShortSellCryptoServiceRequest
{
    private int $userId;
    private int $coinId;
    private float $amount;
    private float $openPrice;

    public function __construct(int $userId, int $coinId, float $amount, float $openPrice)
    {
        $this->userId = $userId;
        $this->coinId = $coinId;
        $this->amount = $amount;
        $this->openPrice = $openPrice;
    }


    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getCoinId(): int
    {
        return $this->coinId;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return float
     */
    public function getOpenPrice(): float
    {
        return $this->openPrice;
    }
}