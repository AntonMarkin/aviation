<?php


class Airport
{
    public $freePlaces;
    public function __construct($freePlaces)
    {
        $this->freePlaces = $freePlaces;
    }
    public function takeAPlane(Plane $plane)
    {
        if ($plane->inSky) {
            if ($this->freePlaces > 0) {
                $plane->landing();
                $this->planeWentToTheParking($plane);
            } else {
                echo 'there are no free places<br>';
            }
        } else {
            echo $plane->name . ' on  ground <br>';
        }
    }

    public function planeClearSpaceAndTakeOf(Plane $plane)
    {
        if (!$plane->inSky) {
            if ($this->planeIsReadyToTakeOf($plane)) {
                $this->freePlaces++;
                $plane->takeOf();
                $plane->inSky = true;
            } else {
                echo $plane->name . 'not ready to take of<br>';
            }
        } else {
            echo $plane->name . 'in sky<br>';
        }
    }

    public function planeWentToTheParking(Plane $plane)
    {
        if ($plane->isBoarded) {
            $this->unboardingToThePlane($plane);
        }
        $this->freePlaces--;
        $plane->inSky = false;
    }

    public function planeIsReadyToTakeOf(Plane $plane)
    {
        if (!$plane->isBoarded) {
            $this->boardingToThePlane($plane);
        }
        return true;
    }

    public function boardingToThePlane(Plane $plane)
    {
        $plane->isBoarded = true;
        echo 'boarding on ' . $plane->name . '<br>';
    }

    public function unboardingToThePlane(Plane $plane)
    {
        $plane->isBoarded = false;
        echo 'unboarding on '. $plane->name.'<br>';
    }
}