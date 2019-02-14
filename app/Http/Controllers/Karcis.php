<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Karcis extends Controller
{
    public function index()
    {
        $x = 'AB900';
        for($i = 0; $i < 130; $i++) {
            echo $x++,'<br />';
        }
        // $x = '000AY';
        // for($i = 0; $i < 10; $i++) {
        //     echo $x++,'<br />';
        // }
    }
}
