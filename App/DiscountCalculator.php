<?php

namespace App;

class DiscountCalculator
{
    /**
     * @param object $itemType
     * @param int    $itemPrice
     * @param int    $unitTotal
     * @return float
     */
    public function calculate(object $itemType, int $itemPrice, int $unitTotal): float
    {
        $discount = 0;

        if ($itemType instanceof UnderWear) {
            $discount = $this->getDiscountPrice(0.5, $itemPrice, $unitTotal);
        } elseif ($itemType instanceof Bra) {
            $discount = $this->getDiscountPrice(0.2, $itemPrice, $unitTotal);
        }

        return $discount;
    }

    private function getDiscountPrice(float $discount, int $itemPrice, int $unitTotal)
    {
        return ($itemPrice * $unitTotal) * $discount;
    }
}