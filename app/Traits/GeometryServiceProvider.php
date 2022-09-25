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
        $area = pi() * $radius * $radius;
        return $area;
    }

    public function calculateCircumferenceOfCircle($radius): float|int
    {
        $cir = 2*pi()*$radius;
        return $cir;
    }
}
