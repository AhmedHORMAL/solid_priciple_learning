<?php

namespace App;

class Amount
{
    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getAmountWorkingHours($time, $break_time)
    {
        $working_hour = $this->user->work($time);
        return $working_hour + $break_time;
    }
}