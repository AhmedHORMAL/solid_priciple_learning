<?php

namespace App;

class UserA extends Runner
{
    public function work($time)
    {
        return $time . '時間働いたよ';
    }
}