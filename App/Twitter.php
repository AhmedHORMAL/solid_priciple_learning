<?php

namespace App;

class Twitter
{
    private $comment;

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }
}