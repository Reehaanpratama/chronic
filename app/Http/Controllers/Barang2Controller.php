<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class Barang2Controller extends Controller
{
    public function index()
    {

        $barang = barang::all();

        return response()->json([
            'succes' => true,
            'message' => 'List Data Barang',
            'data' => $barang,
        ], 200);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|unique:barangs',
            'id_supplier' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'warna' => 'required',
            'ukuran' => 'required',
            'cover' => 'required|image|max:2048',
        ]);

        $barang = new barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->id_supplier = $request->id_supplier;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->warna = $request->warna;
        $barang->ukuran = $request->ukuran;

//upload image / foto
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/barang/', $name);
            $barang->cover = $name;
        }
        $barang->save();

        return response()->json([
            'succes' => true,
            'message' => 'List Data Barang',
            'data' => $barang,
        ], 200);

    }

    public function show($id)
    {
        $barang = barang::find($id);

        return response()->json([
            'succes' => true,
            'message' => 'List Data Barang',
            'data' => $barang,
        ], 200);
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

        $barang = barang::findOrFail($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->id_supplier = $request->id_supplier;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->warna = $request->warna;
        $barang->ukuran = $request->ukuran;

//upload image / foto
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/barang/', $name);
            $barang->cover = $name;
        }
        $barang->save();

        return response()->json([
            'succes' => true,
            'message' => 'List Data Barang',
            'data' => $barang,
        ], 200);
    }
}
