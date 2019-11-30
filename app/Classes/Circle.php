<?php namespace App\Classes;


class Circle {


    protected $pi = 3.14; // about this

    /**
     * Return surface of circle
     *
     * @param integer $radius
     * @return float
     */
    public static function calculate_surface(int $radius)
    {
        return self::$pi * ($radius * 2);
    }

    /**
     * Return circumference of circle
     *
     * @param integer $radius
     * @return float
     */
    public static function calculate_circumference(int $radius)
    {
        $d = $radius * 2;
        return self::$pi * $d;
    }



}




