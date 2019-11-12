<?php


class Speedometer
{
    const KM_TO_MILES = 0.621371;

    public static function convertKmToMiles(float $speed): float
    {
        return self::KM_TO_MILES*$speed;
    }

    public static function convertMilesToKm(float $speed): float
    {
        return $speed/self::KM_TO_MILES;
    }
}