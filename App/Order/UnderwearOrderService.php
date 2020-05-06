<?php

namespace App\Order;

class UnderwearOrderService implements OrderUnderWear
{
    public function orderUnderwear($color)
    {
        return 'ご注文は:' . $color . '色のパンティです';
    }
}