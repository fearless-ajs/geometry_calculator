<?php

namespace App\Http\Controllers;

use App\Traits\GeometryServiceProvider;
use Illuminate\Http\Request;

class GeometryController extends Controller
{
    use GeometryServiceProvider;

    public function triangle($side_a, $side_b, $side_c): \Illuminate\Http\JsonResponse
    {
        if (!is_numeric($side_a)  || $side_a <= 0){
            return $this->errorResponse([
                'errorCode' => "INVALID_INPUT",
                'message'   => 'First entry must be numeric'
            ], 422);
        }

        if (!is_numeric($side_b) || $side_b <= 0){
            return $this->errorResponse([
                'errorCode' => "INVALID_INPUT",
                'message'   => 'Second entry must be numeric'
            ], 422);
        }

        if (!is_numeric($side_c) || $side_c <= 0){
            return $this->errorResponse([
                'errorCode' => "INVALID_INPUT",
                'message'   => 'Base must be numeric'
            ], 422);
        }

        // Check if side a + side b is less than side c
        if ($side_c > ($side_a + $side_b) ){
            return $this->errorResponse([
                'errorCode' => "INVALID_INPUT",
                'message'   => 'Make sure first entry + second entry > base'
            ], 422);
        }

        $circumference = $this->calculateCircumferenceOfTriangle($side_a, $side_b, $side_c);
        $surface = $this->calculateSurfaceOfTriangle($circumference);

        return $this->showOne([
            'type'              => 'Triangle',
            'side_a'            => $side_a,
            'side_b'            => $side_b,
            'side_c'            => $side_c,
            "surface"           => $surface,
            "circumference"     => $circumference
        ]);

    }

    public function circle($radius){
        if (!is_numeric($radius) || $radius <= 0){
            return $this->errorResponse([
                'errorCode' => "INVALID_INPUT",
                'message'   => 'Radius must be numeric'
            ], 422);
        }

        $surface = $this->calculateAreaOfCircle($radius);
        $circumference = $this->calculateCircumferenceOfCircle($radius);

        return $this->showOne([
            'type'              => 'Circle',
            'radius'            => $radius,
            "surface"           => $surface,
            "circumference"     => $circumference
        ]);
    }


}
