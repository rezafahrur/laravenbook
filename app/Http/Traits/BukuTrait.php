<?php 
namespace App\Http\Traits;

use App\Models\Buku;


trait BukuTrait {

  public function tampilDataBukuTrait() {
    $buku = Buku::orderBy('id','desc')->get();
    return $buku;
  }

  public function tampilDetailBukuTrait($id){
    $buku = Buku::find($id);
    return $buku;
  }

  public function tambahDataBukuTrait($request) {
    $buku = new Buku;
    $buku->kode_buku = $request->kodeBuku;
    $buku->judul = $request->judulBuku;
    $buku->pengarang = $request->pengarang;
    $buku->tahun_terbit = $request->tahunTerbit;
    $buku->id_kategori = $request->idKategori;
    $buku->id_supplier = $request->idSupplier;
    $buku->harga = $request->harga;
    $buku->quantity = $request->quantity;

    $buku->save();
  }

  public function updateDataBukuTrait($request, $id) {
    $buku = Buku::find($id);
    $buku->kode_buku = $request->kodeBuku;
    $buku->judul = $request->judulBuku;
    $buku->pengarang = $request->pengarang;
    $buku->tahun_terbit = $request->tahunTerbit;
    $buku->id_kategori = $request->idKategori;
    $buku->id_supplier = $request->idSupplier;
    $buku->harga = $request->harga;
    $buku->quantity = $request->quantity;

    $buku->save();
  }

}
?>