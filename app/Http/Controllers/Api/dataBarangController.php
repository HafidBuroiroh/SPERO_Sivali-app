<?php

namespace App\Http\Controllers\Api;

use App\Models\barang;
use Illuminate\Http\Request;
use App\Models\kategoriBarang;
use App\Http\Controllers\Controller;
use App\Http\Resources\barangResource;
use App\Http\Resources\kategoriBarangResource;

class dataBarangController extends Controller
{
    public function index_barang(){
        $barang = barang::latest()->get();
            return response()->json([
                'data' => barangResource::collection($barang),
                'message' => 'Berhasil',
                'success' => true,  
            ]);
            // return view("backEnd.Barang.",compact('barang'));
    }
    public function index_kategori_barang(){
        $kategoriBarang = kategoriBarang::latest()->get();
            return response()->json([
                'data' => kategoriBarangResource::collection($kategoriBarang),
                'message' => 'Berhasil',
                'success' => true,  
            ]);
            // return view("backEnd.Barang.",compact('barang'));
    }
}