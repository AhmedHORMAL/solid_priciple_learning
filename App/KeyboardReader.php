<?php

namespace App;

class KeyboardReader implements KeyboardReaderInterface
{
    public $data;

    public function read()
    {
        return $this->data;
    }
}