<?php

namespace App\Http\Controllers;

use App\Models\barang;

class FrontendController extends Controller
{
    public function index()
    {
        $barang = barang::all();
        return view('layouts.frontend', compact('barang'));
    }
}
