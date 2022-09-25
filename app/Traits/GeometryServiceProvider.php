<?php


namespace App\Traits;


trait GeometryServiceProvider
{
    public function calculateCircumferenceOfTriangle($side_a, $side_b,$side_c){
        return $side_a + $side_b + $side_c;
    }

    public function calculateSurfaceOfTriangle($circumference): float|int
    {
        return $circumference / 2;
    }

    function calculateAreaOfCircle($radius): float|int
    {
        return pi() * $radius * $radius;
    }

    public function calculateCircumferenceOfCircle($radius): float|int
    {
        return 2*pi()*$radius;
    }

    public function calculateDiamtereOfCircle($radius): float|int
    {
        return 2*$radius;
    }
}
