
    <!-- Data buku -->
    <div id="dataTabelBuku" class="col-md-6">
      <div class="box box-primary box-solid collapsed-box">
          <div class="box-header with-border">
              <h3 class="box-title">Data Semua Buku</h3>
            
            <div class="box-tools pull-right">
                <button id="maxBuku" type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
                <button id="closeBuku" type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
            <table id="buku" class="table table-bordered table-hover table-striped display nowrap" style="width:100%">
              <thead>
              <tr>
                <th>No.</th>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Jumlah(Satuan)</th>
                <th>Harga(Satuan)</th>
                <th>Pilihan</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($dataBukus as $dataBuku)
              <tr>
                  <td> {{$noBuku++}} </td>
                  <td> {{$dataBuku->kode_buku}} </td>
                  <td> {{$dataBuku->judul}} </td>
                  <td> {{$dataBuku->pengarang}} </td>
                  <td> {{$dataBuku->tahun_terbit}} </td>
                  <td> {{$dataBuku->quantity}} </td>
                <td> {{$dataBuku->harga}} </td>
                  <td>  
                    <a href="buku/{{$dataBuku->id}}">
                      <button type="button" class="btn btn-info">Detail</button>
                      </a>
                    
                   
                    
                    <a href="buku/{{ $detail = "buku" }}/{{$dataBuku->id}}/edit">
                        <button type="button" class="btn btn-primary">Edit</button>
                      </a>
                      <a href="buku/{{ $detail = "buku" }}/{{$dataBuku->id}}/konfirmasi">
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
            <button type="button" class="btn btn-primary addForm" data-toggle="modal" data-target="#modal-buku">Tambah Data Buku?</button>
          </div>
        </div>
        <!-- /.box -->
    </div>

    <div class="modal fade" id="modal-hapus-buku">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Hapus Data Buku</h4>
          </div>
          <div class="modal-body">
           <h5>Apakah Anda Yakin Ingin menghapus {{$dataBuku->judul}} ?</h5>
          </div> <!--- /.modal body -->
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
            <button type="submit" class="btn btn-danger">Ya, Hapus</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->