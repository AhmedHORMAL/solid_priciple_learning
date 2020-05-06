<?php

namespace App;

class AreaCalculator
{
    /**
     * @param $rectangles
     * @return float|int
     */
    public function getArea($rectangles)
    {
        $area = [];

        foreach ($rectangles as $rectangle) {
            $area[] = $rectangle->width * $rectangle->height;
        }

        return array_sum($area);
    }
}