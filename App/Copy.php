<?php

namespace App;

class Copy
{
    private $data;

    public function read(KeyboardReaderInterface $reader): void
    {
        $this->data = $reader->read();
    }

    public function output(ConsoleOutputInterface $console)
    {
        $console->output($this->data);
    }
}