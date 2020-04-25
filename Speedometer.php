<?php


class Speedometer
{
    const distance = 0.621;

    public static function convertKmtoMiles( int $km) : float
    {
        return round($km  * self::distance,2);
    }

    public static function convertMilestoKm(int $miles) : float
    {
        return round($miles / self::distance,2);
    }
}