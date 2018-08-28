<div class="modal fade" id="modal-supplier-edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Ubah Data Supplier {{$editSupplier->nama_supplier}} </h4>
      </div>
      <div class="modal-body">
      <form action="supplier/{{$editSupplier->id}}" method="post" class="form-horizontal">
         @csrf
        <div class="form-group">
          <label for="editNamaSupplier" class="col-sm-2 control-label">Nama Supplier</label>
          <div class="col-sm-10">
          <input type="text" name="namaSupplier" class="form-control" id="editNamaSupplier" value="{{$editSupplier->nama_supplier}}">
          </div>
        </div>
        <div class="form-group">
          <label for="editAlamatSupplier" class="col-sm-2 control-label">Alamat Supplier</label>
          <div class="col-sm-10">
          <input type="text" name="alamatSupplier" class="form-control" id="editAlamatSupplier" value="{{$editSupplier->alamat}}">
          </div>
        </div>
        <div class="form-group">
          <label for="editNoTelpSupplier" class="col-sm-2 control-label">No. Telepon</label>
          <div class="col-sm-10">
          <input type="text" name="noTelpSupplier" class="form-control" id="editNoTelpSupplier" value="{{$editSupplier->no_telp}}">
          </div>
        </div>
          <input type="hidden" name="_method" value="PUT">
        <!--
        <div class="form-group">
          <label for="inputPasswordSupplier" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <input type="password" name="passwordSupplier" class="form-control" id="inputPasswordSupplier" placeholder="Password">
          </div>
        </div> -->
      </div> <!--- /.modal body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Ubah Data Supplier</button>
      </div>
    </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->