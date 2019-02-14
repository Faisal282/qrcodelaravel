<?php

namespace App\Http\Controllers;

use App\Models\Produk;
// use Barryvdh\DomPDF\Facade as PDF;
use Milon\Barcode\Facades\DNS1DFacade as DNS1D;
use Milon\Barcode\Facades\DNS2DFacade as DNS2D;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $url = "localhost:8000/scan/index/VIP001/1";
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        unset($url[0]);
        unset($url[1]);
        unset($url[2]);
        var_dump($url);die;
    }

    public function printBarcode(){ 
        \Storage::disk('public')->put('test.png',base64_decode(DNS1D::getBarcodePNG("VIP002, 2", "C93")));
        
        // $produk =  Produk::limit(12)->get(); 
        // $no = 1; 
        // $pdf = PDF::loadView('produk. barcode'  ,  compact('produk', 'no')); 
        // $pdf->setPaper('a4',  'potrait'); 
        // return $pdf->stream(); 
    }
}
