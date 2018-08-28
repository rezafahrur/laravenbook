 <!-- Pegawai -->
      <!-- Data Pegawai -->
      <div id="dataTabelPegawai" class="col-md-4">
          <div class="box box-warning box-solid collapsed-box">
              <div class="box-header with-border">
                  <h3 class="box-title">Data Pegawai Sekolah</h3>
                
                <div class="box-tools pull-right">
                    <button id="maxPegawai" type="button" class="btn btn-box-tool minMax" data-widget="collapse"><i class="fa fa-plus"></i>
                    </button>
                    <button id="closePegawai" type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                  <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="table-responsive">
                <table id="pegawai" class="table table-bordered table-hover table-striped display nowrap" style="width:100%">
                  <thead>
                      <tr>
                          <th>No.</th>
                          <th>Nama Pegawai</th>
                          <th>Jenis Kelamin</th>
                          <th>Alamat</th>
                          <th>No. Telepon</th>
                          <th>Pilihan</th>
                        </tr>
                  </thead>
                  <tbody>
                      @foreach ($dataPegawais as $dataPegawai)
                      <tr>
                          <td> {{$noPegawai++}} </td>
                          <td> {{$dataPegawai->nama_pegawai}} </td>
                          <td> {{$dataPegawai->jenis_kelamin}} </td>
                          <td> {{$dataPegawai->alamat}} </td>
                          <td> {{$dataPegawai->no_telp}} </td>
                          <td> 
                              <a href="kepegawaian/{{ $detail = "pegawai" }}/{{$dataPegawai->id}}">
                                <button type="button" class="btn btn-info">Detail</button>
                                </a>
                              <a href="kepegawaian/{{ $detail = "pegawai" }}/{{$dataPegawai->id}}/edit">
                                  <button type="button" class="btn btn-warning">Edit</button>
                                </a>
                          </td>
                        </tr>
                        @endforeach   
                  </tbody>
                </table>
              </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
                  <button type="button" class="btn btn-warning addForm" data-toggle="modal" data-target="#modal-pegawai">Tambah Data Pegawai?</button>
              </div>
            </div>
            <!-- /.box -->
        
        </div>