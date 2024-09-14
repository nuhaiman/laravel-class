<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    function getData(){
        return [
            "name"=>"nuha",

"roll no"=>"6211"
    ];
    }
}