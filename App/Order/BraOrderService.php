<?php

namespace App\Order;

class BraOrderService implements OrderBra
{
    public function orderBra($cup)
    {
        return 'ご注文は:' . $cup . 'カップのブラです';
    }
}