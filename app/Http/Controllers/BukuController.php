<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\BukuTrait;
use App\Http\Traits\KategoriTrait;

class BukuController extends Controller
{
    //use traits
    use BukuTrait;
    use KategoriTrait;

    public function index(){

        $noBuku = 1;
        $noKategori = 1;
        $dataKategoris = $this->tampilDataKategoriTrait();
        $dataSuppliers = $this->tampilDataSupplierTrait();
        $dataBukus = $this->tampilDataBukuTrait();

        return view('buku_master', [
                                    'noBuku' => $noBuku,
                                    'noKategori'=>$noKategori,
                                    'dataKategoris'=>$dataKategoris,
                                    'dataSuppliers' =>$dataSuppliers,
                                    'dataBukus'=>$dataBukus
                                    ]);
    }

    public function store(Request $request){
        if($request->jenisForm == "kategori"){
            $this->tambahDataKategoriTrait($request);
            return redirect()->route('buku')->with('successKategori', 'kategori ditambah');
        }
        if($request->jenisForm == "buku"){
            $this->tambahDataBukuTrait($request);
            return redirect()->route('buku')->with('successBuku', 'buku ditambah');
        }
    }

    public function edit($detail, $id){
        if($detail == "kategori"){
            $editKategori = $this->tampilDetailKategoriTrait($id);
            return redirect()->route('buku')->with('editKategori', $editKategori);
        }
        if($detail == "buku"){
            $editBuku = $this->tampilDetailBukuTrait($id);
            return redirect()->route('buku')->with('editBuku', $editBuku);
        }
    }

    public function update(Request $request, $id){
        if($request->jenisForm == "kategori"){
            $this->updateDataKategoriTrait($request, $id);
            return redirect()->route('buku')->with('successUpdateKategori', 'kategori diubah');
        }
        if($request->jenisForm == "buku"){
            $this->UpdateDataBukuTrait($request, $id);
            return redirect()->route('buku')->with('successUpdateBuku', 'buku diubah');
        }
    }

    public function destroy($detail, $id){
        if($detail == "kategori"){
            $this->hapusDataKategoriTrait($id);
            return redirect()->route('buku')->with('successDeleteKategori', 'kategori dihapus');
        }
        if($detail == "buku"){
            $this->hapusDataBukuTrait($id);
            return redirect()->route('buku')->with('successDeleteBuku', 'buku dihapus');
        }
    }

    public function show($id){
        $detailBuku = $this->tampilDetailBukuTrait($id);
        return redirect()->route('buku')->with('detailBuku', $detailBuku);

    }
    
}
