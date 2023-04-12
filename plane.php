<?php

abstract class plane
{
    public function __construct($inSky, $isBoarded)
    {
        $this->inSky = $inSky;
        $this->isBoarded = $isBoarded;
    }

    public function takeOf()
    {
        $this->inSky = true;
        echo $this->name.' is take of<br>';
    }
    public function landing()
    {
        $this->inSky = false;
        echo $this->name.' is landing<br>';
    }
    public $isBoarded;
    public $inSky;
    public $name;
    public $maxSpeed;


}