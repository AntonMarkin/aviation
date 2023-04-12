<?php

include_once('plane.php');
class MIG extends plane
{

    public $name = 'МИГ';
    public $maxSpeed = '3400 км/ч';

    public function attack()
    {
        if($this->inSky) {
            $tu = new TU_154(true, true);
            echo $tu->name . ' on attack by ' . $this->name . '<br>';
        }
    }

}