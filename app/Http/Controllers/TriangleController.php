<?php

namespace App\Http\Controllers;

use App\Classes\Triangle;
use Exception;

class TriangleController extends Controller
{

    /**
     * Calculate surface of triangle
     *
     * @param integer $a
     * @param integer $b
     * @param integer $c
     * @return Response json
     */
    public function calculate_surface(int $a, int $b, int $c)
    {

        if( !is_int($a) || !is_int($b) || !is_int($c)) {
            throw new Exception('One of the parameters is not integer');
        }

        $surface = Triangle::calculate_area($a, $b, $c);

        $circumference = Triangle::calculate_circumference($a, $b, $c);

        return response()->json([

            'a' => $a,
            'b' => $b,
            'c' => $c,
            'surface' => $surface,
            'circumference' => $circumference

        ], 200);
    }
}
