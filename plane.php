<?php

abstract class plane
{
    abstract public function takeOf();
    abstract public function landing();
    abstract public function boarding();
    public $boarded;
    public $inSky;
    public $name;
    public $maxSpeed;


}