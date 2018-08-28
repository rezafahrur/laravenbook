
    <!-- Data guru -->
    <div id="dataTabelGuru" class="col-md-4 return">
      <div class="box box-primary box-solid collapsed-box">
          <div class="box-header with-border">
              <h3 class="box-title">Data Semua Guru</h3>
            
            <div class="box-tools pull-right">
                <button id="maxGuru" type="button" class="btn btn-box-tool minMax" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
                <button id="closeGuru" type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
            <table id="guru" class="table table-bordered table-hover table-striped display nowrap" style="width:100%">
              <thead>
              <tr>
                <th>No.</th>
                <th>Nama Guru</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No. Telepon</th>
                <th>Status Guru</th>
                <th>Status Mengajar</th>
                <th>Pilihan</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($dataGurus as $dataGuru)
              <tr>
                  <td> {{$noGuru++}} </td>
                  <td> {{$dataGuru->nama_guru}} </td>
                  <td> {{$dataGuru->jenis_kelamin}} </td>
                  <td> {{$dataGuru->alamat}} </td>
                  <td> {{$dataGuru->no_telp}} </td>
                  <td>
                    @if ($dataGuru->status_guru == "PNS")
                      <span class="label label-success"> {{$dataGuru->status_guru}} </span>
                    @else
                      <span class="label label-warning"> {{$dataGuru->status_guru}} </span>
                    @endif
                </td>
                <td>
                  @if ($dataGuru->status_mengajar == "Aktif")
                   <span class="label label-success">{{$dataGuru->status_mengajar}}</span>
                   @endif
                   @if ($dataGuru->status_mengajar == "Tidak Aktif")
                   <span class="label label-warning">{{$dataGuru->status_mengajar}}</span>     
                   @endif
                   @if ($dataGuru->status_mengajar == "Pensiun")
                   <span class="label label-danger">{{$dataGuru->status_mengajar}}</span>
                   @endif 
                </td>
                  <td>  
                      <a href="kepegawaian/{{ $detail = "guru" }}/{{$dataGuru->id}}">
                      <button type="button" class="btn btn-info">Detail</button>
                      </a>
                    <a href="kepegawaian/{{ $detail = "guru" }}/{{$dataGuru->id}}/edit">
                        <button type="button" class="btn btn-primary">Edit</button>
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
            <button type="button" class="btn btn-primary addForm" data-toggle="modal" data-target="#modal-guru">Tambah Data Guru?</button>
          </div>
        </div>
        <!-- /.box -->
    </div>