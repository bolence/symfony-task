<?php

namespace App\Http\Controllers;

use Exception;
use App\Classes\Circle;

class CircleController extends Controller
{

    /**
     * Calculate radius of circle
     *
     * @param integer $radius
     * @return Response json
     */
    public function calculate_radius( int $radius )
    {
        if(!is_int($radius))
        {
            throw new Exception('It is not integer');
        }

        $surface = Circle::calculate_surface($radius);

        $circumference = Circle::calculate_circumference($radius);

        return response()->json([

            'type' => 'cirlce',
            'radius' => $radius,
            'surface' => $surface,
            'circumference' => $circumference

        ], 200);
    }

}
