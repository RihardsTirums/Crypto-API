<?php

namespace App\FormRequests;

class ShortSellCryptoFormRequest extends \App\Services\ShortSell\ShortSellCryptoServiceRequest
{
    private int $userId;
    private int $coinId;
    private float $amount;
    private float $openPrice;
    private float $closePrice;

    public function __construct(int $userId, int $coinId, float $amount, float $openPrice, float $closePrice)
    {
        $this->userId = $userId;
        $this->coinId = $coinId;
        $this->amount = $amount;
        $this->openPrice = $openPrice;
        $this->closePrice = $closePrice;
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

    public function getOpenPrice(): float
    {
        return $this->openPrice;
    }

    public function getClosePrice(): float
    {
        return $this->closePrice;
    }
}