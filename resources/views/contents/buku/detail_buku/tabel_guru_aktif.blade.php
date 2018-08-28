<!-- Guru Aktif -->
    <!-- Data Guru yang masih aktif -->
    <div id="dataTabelGuruAktif" class="col-md-4">
        <div class="box box-success box-solid collapsed-box">
            <div class="box-header with-border">
                <h3 class="box-title">Data Guru Yang Masih Mengajar</h3>
              
              <div class="box-tools pull-right">
                  <button id="maxGuruAktif" type="button" class="btn btn-box-tool minMax" data-widget="collapse"><i class="fa fa-plus"></i>
                  </button>
                  <button id="closeGuruAktif" type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="guruAktif" class="table table-bordered table-hover table-striped display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Guru Aktif</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No. Telepon</th>
                        <th>No. Telepon Darurat</th>
                        <th>Pilihan</th>
                      </tr>
                </thead>
                <tbody>
                  @foreach ($dataGurus as $dataGuru)
                  @if ($dataGuru->status_mengajar == "Aktif")
                  <tr>
                     <td> {{$noGuruAktif++}} </td>
                     <td> {{$dataGuru->nama_guru}} </td>
                     <td> {{$dataGuru->jenis_kelamin}} </td>
                     <td> {{$dataGuru->alamat}} </td>
                     <td> {{$dataGuru->no_telp}} </td>
                     <td> {{$dataGuru->no_telp_darurat}} </td>
                     <td>  
                        <a href="kepegawaian/{{ $detail = "guru" }}/{{$dataGuru->id}}">
                          <button type="button" class="btn btn-info">Detail</button>
                          </a>
                          <a href="kepegawaian/{{ $detail = "guru" }}/{{$dataGuru->id}}/edit">
                            <button type="button" class="btn btn-primary">Edit</button>
                          </a>
                     </td>
                   </tr>
                  @endif   
                  @endforeach 
                </tbody>
              </table>
            </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <button id="addForm" type="button" class="btn btn-success addForm" data-toggle="modal" data-target="#modal-guru">Tambah Data Guru?</button>
            </div>
          </div>
          <!-- /.box -->
      
      </div>