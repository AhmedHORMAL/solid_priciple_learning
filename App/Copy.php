<?php

namespace App;

class Copy
{
    private $data;

    public function read(): void
    {
        $reader = new KeyboardReader();
        $this->data = $reader->read();
    }

    public function output()
    {
        $console = new ConsoleOutput();
        $console->output($this->data);
    }
}