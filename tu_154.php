<?php


class tu_154 extends plane
{
    public $name = 'ТУ-154';
    public $maxSpeed = '950 км/ч';

    public function landing()
    {
        $this->inSky = true;
    }
    public function takeOf()
    {

    }
    public function boarding()
    {

    }


}