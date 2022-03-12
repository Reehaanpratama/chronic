<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\barang;
use App\Models\transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksis = transaksi::with('barang')->get();
        return view('transaksi.index', compact('transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = barang::all();
        return view('transaksi.create', compact('barang'));
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
            // 'title' => 'required|unique:bukus',
            // 'jenis' => 'required',
            // 'jumlah' => 'required',
            // 'total_harga' => 'required',
        ]);

        $transaksi = new Transaksi;
        $transaksi->id_barang = $request->id_barang;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->total_bayar = $transaksi->barang->harga * $transaksi->jumlah;

        barang::findOrFail($request->id_barang);
        $transaksi->barang->stok -= $transaksi->jumlah;
        $transaksi->barang->save();
        $transaksi->save();
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $barang = barang::all();
        return view('transaksi.show', compact('transaksi', 'barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $barang = barang::all();
        return view('transaksi.edit', compact('transaksi', 'barang'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            // 'title' => 'required|unique:bukus',
            // 'jenis' => 'required',
            // 'jumlah' => 'required',
            // 'total_harga' => 'required',
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->id_barang = $request->id_barang;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->total_bayar = $request->total_bayar;
        $transaksi->save();
        Alert::success('Success', 'Data edited successfully');

        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = transaksi::findOrFail($id);
        $transaksi->delete();
        Alert::success('Success', 'Data deleted successfully');

        return redirect()->route('transaksi.index');
    }
}
