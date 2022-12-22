<?php

namespace App\Models;

use MyCLabs\Enum\Enum;

/**
 * @method static TransactionType BUY()
 * @method static TransactionType SELL()
 * @method static TransactionType TRANSFER()
 * @method static TransactionType RECEIVED()
 * @method static TransactionType OPEN_SHORT()
 * @method static TransactionType CLOSE_SHORT()
 */
final class TransactionType extends Enum
{
    private const BUY = 'buy';
    private const SELL = 'sell';
    private const TRANSFER = 'transfer';
    private const RECEIVED = 'received';

    //TODO: ADDED SHORT SELLING
    private const OPEN_SHORT = 'open_short';
    private const CLOSE_SHORT = 'close_short';
}