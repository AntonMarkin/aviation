<?php

include_once('airport.php');
include_once('mig.php');
include_once('tu_154.php');


$airport = new Airport(10);
$militaryAirport = new Airport(30);
$tu = new TU_154(true, true);
$mig = new MIG(true, false);


$militaryAirport->takeAPlane($mig);
$airport->takeAPlane($tu);
$airport->planeClearSpaceAndTakeOf($tu);
$militaryAirport->planeClearSpaceAndTakeOf($mig);
$mig->attack();