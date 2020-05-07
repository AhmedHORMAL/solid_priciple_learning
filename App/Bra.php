<?php

namespace App;

class Bra implements ItemInterface
{
    private $discountValue;

    public function setDiscountValue($discountValue)
    {
        $this->discountValue = $discountValue;
    }

    public function getDiscountValue()
    {
        return $this->discountValue;
    }
}