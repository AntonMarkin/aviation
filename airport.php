<?php


class airport
{
    public $capacityOfAirport = 100;
    public $freePlaces = 100;

    public function takeAPlane(Plane $plane)
    {
        if ($plane->inSky) {
            if ($this->freePlaces > 0) {
                $plane->landing();
                echo $plane->name . ' is landing';
                $this->planeWentToTheParking($plane);
            } else {
                echo 'there are no free places';
            }
        } else {
            echo $plane->name . ' on  ground';
        }
    }

    public function planeClearSpaceAndTakeOf(Plane $plane)
    {
        if (!$plane->inSky) {
            if ($this->planeIsReadyToTakeOf($plane)) {
                $this->freePlaces++;
                $plane->takeOf();
                echo $plane->name . ' is take of';
                $plane->inSky = true;
            } else {
                echo $plane->name . 'not ready to take of';
            }
        } else {
            echo $plane->name . 'in sky';
        }
    }

    public function planeWentToTheParking(Plane $plane)
    {
        $this->freePlaces--;
        $plane->inSky = false;
        return $plane;
    }

    public function planeIsReadyToTakeOf(Plane $plane)
    {
        if (!$plane->inSky) {

            return true;
        } else {
            return false;
        }
    }

    public function startBoardingToThePlane(Plane $plane)
    {
        
    }

    public function endBoardingToThePlane()
    {

    }
}