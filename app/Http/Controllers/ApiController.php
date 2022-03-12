<?php

namespace App\Http\Controllers;

use App\Models\supplier;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){

        $supplier = supplier::all();

        return response()->json([
            'succes' => true,
            'message' => 'List Data Supplier',
            'data' => $supplier
        ], 200);
    }

    public function create(){

    }

    public function store(Request $request){
        $validated = $request->validate([
            'nama_supplier' => 'required',
        ]);

        $supplier = new supplier;
        $supplier->nama_supplier = $request->nama_supplier;
        $supplier->save();

        return response()->json([
            'succes' => true,
            'message' => 'List Data Supplier',
            'data' => $supplier
        ], 200);

    }

    public function show($id){
        $supplier = supplier::find($id);

        return response()->json([
            'succes' => true,
            'message' => 'List Data Supplier',
            'data' => $supplier
        ], 200);
    }

    public function edit($id){

    }

    public function update(Request $request, $id){

        $supplier = supplier::findOrFail($id);
        $supplier->nama_supplier = $request->nama_supplier;
        $supplier->save();

        return response()->json([
            'succes' => true,
            'message' => 'List Data Supplier',
            'data' => $supplier
        ], 200);
    }
}
