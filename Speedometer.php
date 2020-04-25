<?php


class Speedometer
{

    public static function convertKmtoMiles( int $km) : float
    {
        return $km  * 0.621;
    }

    public static function convertMilestoKm(int $miles) : float
    {
        return $miles * 1.61;
    }
}