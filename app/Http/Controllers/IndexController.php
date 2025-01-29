<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        return view('index');
    }
    public function produk() {
        return view('produk',[
            'produks' => Produk::get()
        ]);
    }
    public function produk_detail($id) {
        return view('produk_detail',[
            'produk' => Produk::findOrFail($id),
        ]);
    }
}

