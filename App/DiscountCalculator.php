<?php

namespace App;

class DiscountCalculator
{
    /**
     * @param ItemInterface $itemType
     * @param int           $itemPrice
     * @param int           $unitTotal
     * @return float
     */
    public function calculate(ItemInterface $itemType, int $itemPrice, int $unitTotal): float
    {
        return ($itemPrice * $unitTotal) * $itemType->getDiscountValue();
    }
}