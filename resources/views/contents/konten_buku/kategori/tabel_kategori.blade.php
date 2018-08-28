<!-- Data Pegawai -->
      <div id="dataTabelKategori" class="col-md-6">
          <div class="box box-warning box-solid collapsed-box">
              <div class="box-header with-border">
                  <h3 class="box-title">Data Kategori Buku</h3>
                
                <div class="box-tools pull-right">
                    <button id="maxKategori" type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                    </button>
                    <button id="closeBuku" type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                  <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="table-responsive">
                <table id="kategori" class="table table-bordered table-hover table-striped display nowrap" style="width:100%">
                  <thead>
                      <tr>
                          <th>No.</th>
                          <th>Nama Kategori</th>
                          <th>Pilihan</th>
                        </tr>
                  </thead>
                  <tbody>
                      @foreach ($dataKategoris as $dataKategori)
                      <tr>
                          <td> {{$noKategori++}} </td>
                          <td> {{$dataKategori->nama_kategori}} </td>
                          <td> 
                              <div class="col-md-2">
                              <a href="buku/{{ $detail = "kategori" }}/{{$dataKategori->id}}/edit">
                                  <button type="button" class="btn btn-warning">Ubah</button>
                                </a>
                            </div>
                            <div class="col-md-2">
                            <form action="buku/kategori/{{ $dataKategori->id }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>
                                <input type="hidden" name="_method" value="DELETE">
                            </form>
                        </div>
                          </td>
                        </tr>
                        @endforeach   
                  </tbody>
                </table>
              </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
                  <button type="button" class="btn btn-warning addForm" data-toggle="modal" data-target="#modal-kategori">Tambah Kategori?</button>
              </div>
            </div>
            <!-- /.box -->
        
        </div>