<?php

namespace App\Http\Controllers;

use App\Models\barang;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id)
    {
        $barang = barang::where('id', $id)->first();

        return view('pesan.index', compact('barang'));
    }

}
