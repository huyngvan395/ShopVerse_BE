<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getName(){
        $name = "Huy";
        return response()->json(["name"=>$name]);
    }
}
