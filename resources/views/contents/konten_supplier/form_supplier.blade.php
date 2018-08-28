<div class="modal fade" id="modal-supplier">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Data Supplier</h4>
      </div>
      <div class="modal-body">
       <form action="supplier" method="post" class="form-horizontal">
         @csrf
        <div class="form-group">
          <label for="inputNamaSupplier" class="col-sm-2 control-label">Nama Supplier</label>
          <div class="col-sm-10">
            <input type="text" name="namaSupplier" class="form-control" id="inputNamaSupplier" placeholder="Nama Supplier">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAlamatSupplier" class="col-sm-2 control-label">Alamat Supplier</label>
          <div class="col-sm-10">
            <input type="text" name="alamatSupplier" class="form-control" id="inputAlamatSupplier" placeholder="Alamat Supplier">
          </div>
        </div>
        <div class="form-group">
          <label for="inputNoTelpSupplier" class="col-sm-2 control-label">No. Telepon</label>
          <div class="col-sm-10">
            <input type="text" name="noTelpSupplier" class="form-control" id="inputNoTelpSupplier" placeholder="Nomor Telepon Supplier">
          </div>
        </div>
      </div> <!--- /.modal body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah Data Supplier</button>
      </div>
    </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->