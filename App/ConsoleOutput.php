<?php

namespace App;

class ConsoleOutput implements ConsoleOutputInterface
{
    public function output($data)
    {
        return $data;
    }
}