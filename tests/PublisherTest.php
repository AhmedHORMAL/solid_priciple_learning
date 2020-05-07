<?php

use App\Publisher;
use App\Twitter;

class PublisherTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Publisher
     */
    protected $object;

    protected function setUp()
    {
        $twitter = new Twitter();
        $twitter->setComment('ツイッターのテスト');
        $this->object = new Publisher($twitter);
    }

    public function testPublish()
    {
        $expect = 'ツイッターのテスト';
        $this->assertSame($expect, $this->object->publish());
    }
}
