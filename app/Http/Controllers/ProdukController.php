<?php

namespace App\Http\Controllers;

use App\Models\Produk;
// use Barryvdh\DomPDF\Facade as PDF;
use Milon\Barcode\Facades\DNS1DFacade as DNS1D;
use Milon\Barcode\Facades\DNS2DFacade as DNS2D;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::all();
        return view('barcode', compact('data'));
        // $url = "localhost:8000/scan/index/VIP001/1";
        // $url = filter_var($url, FILTER_SANITIZE_URL);
        // $url = explode('/', $url);
        // unset($url[0]);
        // unset($url[1]);
        // unset($url[2]);
        // var_dump($url);die;
    }

    public function cek()
    {
        return view('cek');
    }

    public function cekStatus(Request $request)
    {
        $data = Produk::where('id_karcis', substr($request->barcode, 0, -1))->first();
        return view('detail', compact(''));
    }

    public function printBarcode(){ 
        $data = Produk::all();
        // \Storage::disk('public/barcode')->put("test".".png", base64_decode(DNS1D::getBarcodePNG($data[0]->id_karcis, "EAN13")));
        // return view('barcode', compact('data'));
        for ($i=0; $i <= $data->count(); $i++) { 
            $dataId = $data[$i]->id_karcis;
            Storage::disk('public')->put($dataId.'.png',base64_decode(DNS1D::getBarcodePNG($dataId, "EAN13")));
        }   
    }

    public function scanFestival(Request $request)
    {
        $data = Produk::where('id_karcis', substr($request->barcode, 0, -1))->first();
        // dd($data);
        if ($data != null) {
            if ($data->status == 0) {
                Produk::where('id_karcis', substr($request->barcode, 0, -1))->update(['status' => 1]);
                return redirect()->route('scan')->with('success', ['data berhasil diverifikasi']);
            } elseif($data->status == 1){
                return redirect()->route('scan')->with('warning', ['data yang anda masukkan telah diverifikasi']);
            } else {
                return redirect()->route('scan')->with('fail', ['data gagal diverifikasi']);
                // return redirect()->route('barcode');
                // dd($data->status);
            }
        } else {
            return redirect()->route('scan')->with('fail', ['data tidak ada di database']);
        }
    }

    public function makePDFfestival()
    {
    // $produk =  Produk::join('kategori', 'kategori.idkategori', '=', 'produk.id kategori')
    // ->orderBy('produk.id produk',  'desc')
    // ->get(); 
    // $no = O; 
    $data = Produk::limit(5000)->offset(0)->get();
    return view('pdf', compact('data'));
    // $pdf = PDF::loadView('pdf', compact('data'));
    // return $pdf->download('invoice.pdf');
    // return $pdf->stream();
    }

    public function makePDFdeluxe()
    {
    // $produk =  Produk::join('kategori', 'kategori.idkategori', '=', 'produk.id kategori')
    // ->orderBy('produk.id produk',  'desc')
    // ->get(); 
    // $no = O; 
    // $pdf =  PDF::loadView('produk.pdf  •,  compact  (  •produk','no');
    // return $pdf->stream();
    // $pdf = PDF::loadView('pdf', $data);
    // return $pdf->download('invoice.pdf');
    $data = Produk::limit(1500)->offset(5000)->get();
    return view('pdf', compact('data'));
    }

    public function makePDFvip()
    {
    // $produk =  Produk::join('kategori', 'kategori.idkategori', '=', 'produk.id kategori')
    // ->orderBy('produk.id produk',  'desc')
    // ->get(); 
    // $no = O; 
    // $pdf =  PDF::loadView('produk.pdf  •,  compact  (  •produk','no');
    // return $pdf->stream();
    // $pdf = PDF::loadView('pdf', $data);
    // return $pdf->download('invoice.pdf');
    $data = Produk::limit(600)->offset(6500)->get();
    return view('pdf', compact('data'));
    }
}
