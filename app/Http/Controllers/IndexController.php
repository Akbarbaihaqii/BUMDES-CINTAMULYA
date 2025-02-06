<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk; // Import Model Produk

class IndexController extends Controller
{
    public function index()
    {
        // Ambil semua produk dari database
        $produks = Produk::all();
        
        // Kirim data produk ke view index.blade.php
        return view('index', compact('produks'));
    }

    public function produk()
    {
        $produks = Produk::all();
        return view('produk', compact('produks'));
    }

    public function produk_detail($id)
    {
        // Ambil produk berdasarkan ID
        $produk = Produk::findOrFail($id);
        
        return view('produk_detail', compact('produk'));
    }
}
