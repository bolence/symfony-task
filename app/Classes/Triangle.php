<?php namespace App\Classes;


class Triangle {


    /**
     * Calculate circumference of area
     *
     * @param integer $a
     * @param integer $b
     * @param integer $c
     * @return void
     */
    public static function calculate_area(int $a, int $b, int $c)
    {
        return ($a + $b + $c) / 2;
    }

    /**
     * Calculate circumference of triangle
     *
     * @param integer $a
     * @param integer $b
     * @param integer $c
     * @return void
     */
    public static function calculate_circumference(int $a, int $b, int $c)
    {
        return  $a + $b + $c;
    }

}
