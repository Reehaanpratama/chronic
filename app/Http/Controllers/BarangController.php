<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\barang;
use App\Models\supplier;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = barang::with('supplier')->get();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supplier = supplier::all();
        return view('barang.create', compact('supplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        Alert::success('Good Job', 'Data saved successfully');
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = barang::findOrFail($id);
        $supplier = supplier::all();
        return view('barang.show', compact('barang', 'supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = barang::findOrFail($id);
        $supplier = supplier::all();
        return view('barang.edit', compact('barang', 'supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'id_supplier' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'warna' => 'required',
            'ukuran' => 'required',
            'cover' => 'required|image|max:2048',
        ]);

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
        Alert::success('Good Job', 'Data saved successfully');
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = barang::findOrFail($id);
        $barang->deleteImage();
        $barang->delete();
        Alert::success('Success', 'Data deleted successfully');

        return redirect()->route('barang.index');
    }

}
