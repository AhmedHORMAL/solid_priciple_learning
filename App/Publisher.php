<?php

namespace App;

class Publisher
{
    private $twitter;

    /**
     * Publisher constructor.
     *
     * @param Twitter $twitter
     */
    public function __construct(Twitter $twitter)
    {
        $this->twitter = $twitter;
    }

    /**
     * @return string
     */
    public function publish()
    {
        return $this->twitter->getComment();
    }
}