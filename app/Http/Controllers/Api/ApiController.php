<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //

    public function suma($num1, $num2){
        $suma = $num1 + $num2;
        return response()->json(['suma' => $suma]);
    }

    public function multiplicacion
    ($num1, $num2){
        $multiplicacion = $num1 * $num2;
        return response()->json(['multiplicacion' => $multiplicacion]);
    }
   
}
