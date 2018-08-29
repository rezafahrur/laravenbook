<?php 
namespace App\Http\Traits;

use Illuminate\Support\Facades\DB;
use App\Models\Buku;
use App\Models\Supplier;


trait BukuTrait {

  public function tampilDataBukuTrait() {
    $buku = Buku::orderBy('id','desc')->get();
    return $buku;
  }

  public function tampilDataSupplierTrait(){
    $supplier = Supplier::orderBy('id','desc')->get();
    return $supplier;
  }

  public function tampilDetailBukuTrait($id){
    $buku = Buku::find($id);
    $kategoris = DB::table('kategoris')
                    ->join('bukus', 'kategoris.id', '=', 'bukus.id_kategori')
                    ->select('bukus.id_kategori','kategoris.nama_kategori')
                    ->get();
            foreach($kategoris as $kategori) 
            {
                if($buku->id_kategori == $kategori->id_kategori){
                  $namaKategori = $kategori->nama_kategori;
                }
            }
            $buku->namaKategori = $namaKategori;
     $suppliers = DB::table('suppliers')
                      ->join('bukus', 'suppliers.id', '=', 'bukus.id_supplier')
                      ->select('bukus.id_supplier','suppliers.nama_supplier')
                      ->get();
            foreach($suppliers as $supplier) 
            {
              if($buku->id_supplier == $supplier->id_supplier){
                    $namaSupplier = $supplier->nama_supplier;
                  }

            }
            $buku->namaSupplier = $namaSupplier;  
            
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

  public function hapusDataBukuTrait($id){
        $buku = Buku::find($id);
        $buku->delete();
  }

}
?>