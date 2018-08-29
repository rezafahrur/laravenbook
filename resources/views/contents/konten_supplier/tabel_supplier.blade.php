<!-- Data Supplier -->
    <div id="dataTabelSupplier" class="col-md-12 return">
      <div class="box box-primary box-solid">
          <div class="box-header with-border">
              <h3 class="box-title">Data Semua Supplier</h3>
            
            <div class="box-tools pull-right">
                <button id="minSupplier" type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button id="closeSupplier" type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
            <table id="supplier" class="table table-bordered table-hover table-striped display nowrap" style="width:100%">
              <thead>
              <tr>
                <th>No.</th>
                <th>Nama Supplier</th>
                <th>Alamat</th>
                <th>No. Telepon</th>
                <th>Pilihan</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($dataSuppliers as $dataSupplier)
              <tr>
                  <td> {{$noSupplier++}} </td>
                  <td> {{$dataSupplier->nama_supplier}} </td>
                  <td> {{$dataSupplier->alamat}} </td>
                  <td> {{$dataSupplier->no_telp}} </td>
                  <td>  
                   
                      <a href="supplier/{{$dataSupplier->id}}">
                      <button type="button" class="btn btn-info">Detail</button>
                      </a>  
                    <a href="supplier/{{$dataSupplier->id}}/edit">
                        <button type="button" class="btn btn-primary">Ubah</button>
                      </a>
                      <a href="supplier/{{$dataSupplier->id}}/konfirmasi">
                        <button type="button" class="btn btn-danger">Hapus</button>
                      </a>
                  
                  </td>
                @endforeach
                </tr>
              </tbody>
            </table>
          </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix">
            <button type="button" class="btn btn-primary addForm" data-toggle="modal" data-target="#modal-supplier">Tambah Data Supplier?</button>
          </div>
        </div>
        <!-- /.box -->
    </div>