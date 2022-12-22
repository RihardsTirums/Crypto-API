<?php

namespace App\Services\ShortSell;

use App\Repositories\Crypto\CryptoRepository;
use App\Repositories\Transactions\TransactionsRepository;
use App\Repositories\UserCrypto\UserCryptoRepository;
use App\Repositories\Users\UserRepository;
use App\Models\Transaction;
use App\Models\TransactionType;

class CloseShortService
{
    private UserRepository $userRepository;
    private CryptoRepository $cryptoRepository;
    private UserCryptoRepository $userCryptoRepository;
    private TransactionsRepository $transactionsRepository;

    public function __construct(UserRepository         $userRepository,
                                CryptoRepository       $cryptoRepository,
                                UserCryptoRepository   $userCryptoRepository,
                                TransactionsRepository $transactionsRepository)
    {
        $this->userRepository = $userRepository;
        $this->cryptoRepository = $cryptoRepository;
        $this->userCryptoRepository = $userCryptoRepository;
        $this->transactionsRepository = $transactionsRepository;
    }

    public function execute(ShortSellCryptoServiceRequest $request): void
    {
        $user = $this->userRepository->getById($request->getUserId());
        $coin = $this->cryptoRepository->getCoin($request->getCoinId());

        // Retrieve the price at which the short position was opened
        $openPrice = $request->getAmount() * $coin->getPrice();

        // Calculate the difference between the current price and the open price
        $priceDifference = $request->getAmount() * ($openPrice - $coin->getPrice());


        // If the current price is lower than the open price, add the difference to the user's balance.
        // If the current price is higher, subtract the difference.
        if ($coin->getPrice() > $openPrice) {
            $user->deductMoney($priceDifference * $request->getAmount());
        } else {
            $user->addMoney($priceDifference * $request->getAmount());
        }

        // Save the updated user balance
        $this->userRepository->save($user);

        $userCoin = $this->userCryptoRepository->get($request->getUserId(), $request->getCoinId());
        $userCoin->subtractAmount($request->getAmount());
        $this->userCryptoRepository->save($userCoin);

        if ($userCoin->getAmount() == 0) {
            $this->userCryptoRepository->delete($userCoin->getId());
        }

        $this->transactionsRepository->create(
            new Transaction(
                $user->getId(),
                $coin->getId(),
                TransactionType::CLOSE_SHORT(),
                $coin->getName(),
                $coin->getPrice(),
                $request->getAmount()
            )
        );
    }
}
