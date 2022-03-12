<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = supplier::all();
        return view('supplier.index', compact('supplier'));

        // return response()->json([
        //     'succes' => true,
        //     'message' => 'List Data Supplier',
        //     'data' => $supplier
        // ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi data
        $validated = $request->validate([
            'nama_supplier' => 'required',
        ]);

        $supplier = new supplier;
        $supplier->nama_supplier = $request->nama_supplier;
        $supplier->save();
        return redirect()->route('supplier.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supplier = supplier::findOrFail($id);
        return view('supplier.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = supplier::findOrFail($id);
        return view('supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_supplier' => 'required',
        ]);

        $supplier = supplier::findOrFail($id);
        $supplier->nama_supplier = $request->nama_supplier;
        $supplier->save();

        Alert::success('Success', 'Data updated successfully');

        return redirect()->route('supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $supplier = supplier::findOrFail($id);
        // $supplier->delete();
        if (!supplier::destroy($id)) {

            return redirect()->back();

        }

        Alert::success('Success', 'Data deleted successfully');

        return redirect()->route('supplier.index');
    }
}
