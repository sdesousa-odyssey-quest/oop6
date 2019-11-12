<?php

require '../src/Speedometer.php';

$speedKm = 10;
echo Speedometer::convertKmToMiles($speedKm);
echo '<br />';

$speedKm = 14;
echo Speedometer::convertKmToMiles($speedKm);
echo '<br />';

$speedMiles = 26;
echo Speedometer::convertMilesToKm($speedMiles);
echo '<br />';
