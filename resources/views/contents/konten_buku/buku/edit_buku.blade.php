<div class="modal fade" id="modal-buku-edit">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Ubah Data Buku {{$editBuku->judul}} </h4>
        </div>
        <div class="modal-body">
        <form action="buku/{{$editBuku->id}}" method="post" class="form-horizontal">
           @csrf
           <input type="hidden" name="jenisForm" value="buku">
          <div class="form-group">
            <label for="editJudulBuku" class="col-sm-2 control-label">Kode Buku</label>
            <div class="col-sm-10">
            <input type="text" name="kodeBuku" class="form-control" id="editKodeBuku" value="{{$editBuku->kode_buku}}">
            </div>
          </div>
          <div class="form-group">
            <label for="editJudulBuku" class="col-sm-2 control-label">Judul Buku</label>
            <div class="col-sm-10">
            <input type="text" name="judulBuku" class="form-control" id="editJudulBuku" value="{{$editBuku->judul}}">
            </div>
          </div>
          <div class="form-group">
            <label for="editPengarang" class="col-sm-2 control-label">Pengarang</label>
            <div class="col-sm-10">
            <input type="text" name="pengarang" class="form-control" id="editPengarang" value="{{$editBuku->pengarang}}">
            </div>
          </div>
          <div class="form-group">
            <label for="editTahunTerbit" class="col-sm-2 control-label">Tahun Terbit</label>
            <div class="col-sm-10">
            <input type="text" name="tahunTerbit" class="form-control" id="editTahunTerbit" value="{{$editBuku->tahun_terbit}}" >
            </div>
          </div>
          <div class="form-group">
            <label for="editQuantity" class="col-sm-2 control-label">Jumlah Buku(Satuan)</label>
            <div class="col-sm-10">
            <input type="text" name="quantity" class="form-control" id="editQuantity" value="{{$editBuku->quantity}}">
            </div>
          </div>
          <div class="form-group">
            <label for="editHarga" class="col-sm-2 control-label">Harga Buku</label>
            <div class="col-sm-10">
            <input type="text" name="harga" class="form-control" id="editHarga" value="{{$editBuku->harga}}">
            </div>
          </div>
          <div class="form-group">
            <label for="editSupplier" class="col-sm-2 control-label">Supplier</label>
            <div class="col-sm-8">
              <select class="form-control" name="idSupplier">
              <option value="{{$editBuku->id_supplier}}" selected>{{$editBuku->namaSupplier}}</option>
              @foreach ($dataSuppliers as $dataSupplier)
              <option value="{{$dataSupplier->id}}">{{$dataSupplier->nama_supplier}}</option>
              @endforeach
              </select>
            </div>
          </div>
          <div class="form-group">
              <label for="editKategori" class="col-sm-2 control-label">Kategori</label>
              <div class="col-sm-8">
                <select class="form-control" name="idKategori">
                  <option value="{{$editBuku->id_kategori}}" selected>{{$editBuku->namaKategori}}</option>
                  @foreach ($dataKategoris as $dataKategori)
                  <option value="{{$dataKategori->id}}">{{$dataKategori->nama_kategori}}</option>
                  @endforeach
                  </select>
              </div>
            </div>
          
            <input type="hidden" name="_method" value="PUT">
        </div> <!--- /.modal body -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Ubah Data Buku</button>
        </div>
      </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->