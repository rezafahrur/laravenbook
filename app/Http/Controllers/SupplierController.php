<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    //
    public function index (){
        $noSupplier = 1;
        $dataSuppliers = Supplier::orderBy('id', 'desc')->get();
        return view ('supplier_master', [
                                        'noSupplier'=> $noSupplier,
                                        'dataSuppliers'=> $dataSuppliers
                                        ]);
    }

    public function store(Request $request){
        $supplier = new Supplier;
        $supplier->nama_supplier = $request->namaSupplier;
        $supplier->alamat = $request->alamatSupplier;
        $supplier->no_telp = $request->noTelpSupplier;

        $supplier->save();

        return redirect()->route('supplier')->with('successSupplier','supplier berhasil ditambah');
    }

    public function show($id){
        $detailSupplier = Supplier::find($id);
        return redirect()->back()->with('detailSupplier', $detailSupplier);
    }

    public function edit($id){
        $editSupplier = Supplier::find($id);
        return redirect()->back()->with('editSupplier', $editSupplier);
    }

    public function update(Request $request, $id){

        $updateSupplier = Supplier::find($id);
        $updateSupplier->nama_supplier = $request->namaSupplier;
        $updateSupplier->alamat = $request->alamatSupplier;
        $updateSupplier->no_telp = $request->noTelpSupplier;

        $updateSupplier->save();

        return redirect()->back()->with('successUpdateSupplier', 'supplier berhasil di update');
    }
    public function destroy($id){
        $deleteSupplier = Supplier::find($id);
        $deleteSupplier->delete();

        return redirect()->back()->with('successDeleteSupplier','supplier berhasil di hapus');
    }


    public function konfirmasi($id){
        $hapusSupplier = Supplier::find($id);
        return redirect()->back()->with('hapusSupplier', $hapusSupplier);
    }
}
