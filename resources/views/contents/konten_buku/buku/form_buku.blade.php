<div class="modal fade" id="modal-buku">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Data Buku</h4>
        </div>
        <div class="modal-body">
         <form action="buku" method="post" class="form-horizontal">
           @csrf
           <input type="hidden" name="jenisForm" value="buku">
          <div class="form-group">
            <label for="inputKodeBuku" class="col-sm-2 control-label">Kode Buku</label>
            <div class="col-sm-10">
              <input type="text" name="kodeBuku" class="form-control" id="inputKodeBuku" placeholder="Kode Buku">
            </div>
          </div>
          <div class="form-group">
            <label for="inputJudulBuku" class="col-sm-2 control-label">Judul Buku</label>
            <div class="col-sm-10">
              <input type="text" name="judulBuku" class="form-control" id="inputJudulBuku" placeholder="Judul Buku">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPengarang" class="col-sm-2 control-label">Pengarang</label>
            <div class="col-sm-10">
              <input type="text" name="pengarang" class="form-control" id="inputPengarang" placeholder="Nama Pengarang Buku">
            </div>
          </div>
          <div class="form-group">
            <label for="inputTahunTerbit" class="col-sm-2 control-label">Tahun Terbit</label>
            <div class="col-sm-10">
              <input type="text" name="tahunTerbit" class="form-control" id="inputTahunTerbit" placeholder="Tahun Terbit Buku">
            </div>
          </div>
          <div class="form-group">
            <label for="inputQuantity" class="col-sm-2 control-label">Jumlah Buku (satuan)</label>
            <div class="col-sm-10">
              <input type="text" name="quantity" class="form-control" id="inputQuantity" placeholder="Jumlah Buku per Satuan">
            </div>
          </div>
          <div class="form-group">
            <label for="inputHarga" class="col-sm-2 control-label">Harga Buku</label>
            <div class="col-sm-10">
              <input type="text" name="harga" class="form-control" id="inputHarga" placeholder="Harga Buku per Satuan">
            </div>
          </div>
          <div class="form-group">
            <label for="inputSupplier" class="col-sm-2 control-label">Supplier</label>
            <div class="col-sm-8">
              <select class="form-control" name="supplier">
                  <option value="NULL" selected>Pilih Supplier Buku</option>
                <option value="L">L</option>
                <option value="P">P</option>
              </select>
            </div>
          </div>
          <div class="form-group">
              <label for="inputKategori" class="col-sm-2 control-label">Kategori</label>
              <div class="col-sm-8">
                <select class="form-control" name="kategori">
                    <option value="NULL" selected>Pilih Kategori Buku</option>
                  <option value="Islam">Islam</option>
                  <option value="Katolik">Katolik</option>
                  <option value="Protestan">Protestan</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                  <option value="Konghucu">Konghucu</option>
                </select>
              </div>
            </div>
        </div> <!--- /.modal body -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah Data Buku</button>
        </div>
      </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->