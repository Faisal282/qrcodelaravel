<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Storage;

class indexController extends Controller
{
    public function index()
    {
        \Storage::disk('public/barcode')->put('telek.png', base64_decode(DNS2D::getBarcodePNGPath("4445645656", "PDF417")));
    }
}
