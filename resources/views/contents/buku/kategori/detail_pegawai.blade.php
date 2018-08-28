<div class="modal fade" id="modal-pegawai-detail">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Data Pegawai {{$detailPegawai->nama_pegawai}}</h4>
        </div>
        <div class="modal-body">
<div class="box box-warning">
    <div class="box-body box-profile">
      <img class="profile-user-img img-responsive img-circle" src="{{ asset("img/user2-160x160.jpg")}}" alt="User profile picture">

      <h3 class="profile-username text-center"> {{$detailPegawai->nama_pegawai}}
        @if ($detailPegawai->gelar_pegawai != NULL)
        , {{$detailPegawai->gelar_pegawai}}     
        @endif
        </h3>

      <p class="text-muted text-center">{{$detailPegawai->jabatan_pegawai}} </p>

      <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
              <b>Tempat & Tanggal Lahir</b> <a class="pull-right"> {{$detailPegawai->tempat_lahir}}, {{$detailPegawai->tanggal_lahir}} </a>
            </li>
            <li class="list-group-item">
                <b>Jenis Kelamin</b> 
                <a class="pull-right">
                @if ($detailPegawai->jenis_kelamin == "L")
                    Laki-Laki
                @else
                    Perempuan
                @endif  
                  </a>
              </li>
            <li class="list-group-item">
                <b>Agama</b> <a class="pull-right"> {{$detailPegawai->agama}}</a>
              </li>
        <li class="list-group-item">
          <b>Alamat</b> <a class="pull-right"> {{$detailPegawai->alamat}} </a>
        </li>
        <li class="list-group-item">
            <b>Pendidikan</b> <a class="pull-right"> {{$detailPegawai->pendidikan}} </a>
          </li>
        <li class="list-group-item">
            <b>Nomor Telepon</b> <a class="pull-right"> {{$detailPegawai->no_telp}} </a>
          </li>
          <li class="list-group-item">
              <b>Nomor Telepon Darurat</b> <a class="pull-right"> {{$detailPegawai->no_telp_darurat}} </a>
            </li>
        <li class="list-group-item">
          <b>Ditetapkan Tanggal</b> <a class="pull-right"> 
              @if ($detailPegawai->created_at->format('m') == '01')
              {{$detailPegawai->created_at->format('d')}} Januari {{$detailPegawai->created_at->format('Y')}} Pukul {{$detailPegawai->created_at->format('H:i:s')}}
              @endif
              @if ($detailPegawai->created_at->format('m') == '02')
              {{$detailPegawai->created_at->format('d')}} Februari {{$detailPegawai->created_at->format('Y')}} Pukul {{$detailPegawai->created_at->format('H:i:s')}}
              @endif
              @if ($detailPegawai->created_at->format('m') == '03')
              {{$detailPegawai->created_at->format('d')}} Maret {{$detailPegawai->created_at->format('Y')}} Pukul {{$detailPegawai->created_at->format('H:i:s')}}
              @endif
              @if ($detailPegawai->created_at->format('m') == '04')
              {{$detailPegawai->created_at->format('d')}} April {{$detailPegawai->created_at->format('Y')}} Pukul {{$detailPegawai->created_at->format('H:i:s')}}
              @endif
              @if ($detailPegawai->created_at->format('m') == '05')
              {{$detailPegawai->created_at->format('d')}} Mei {{$detailPegawai->created_at->format('Y')}} Pukul {{$detailPegawai->created_at->format('H:i:s')}}
              @endif
              @if ($detailPegawai->created_at->format('m') == '06')
              {{$detailPegawai->created_at->format('d')}} Juni {{$detailPegawai->created_at->format('Y')}} Pukul {{$detailPegawai->created_at->format('H:i:s')}}
              @endif
              @if ($detailPegawai->created_at->format('m') == '07')
              {{$detailPegawai->created_at->format('d')}} Juli {{$detailPegawai->created_at->format('Y')}} Pukul {{$detailPegawai->created_at->format('H:i:s')}}
              @endif
            @if ($detailPegawai->created_at->format('m') == '08')
            {{$detailPegawai->created_at->format('d')}} Agustus {{$detailPegawai->created_at->format('Y')}} Pukul {{$detailPegawai->created_at->format('H:i:s')}}
            @endif
            @if ($detailPegawai->created_at->format('m') == '09')
            {{$detailPegawai->created_at->format('d')}} September {{$detailPegawai->created_at->format('Y')}} Pukul {{$detailPegawai->created_at->format('H:i:s')}}
            @endif
            @if ($detailPegawai->created_at->format('m') == '10')
            {{$detailPegawai->created_at->format('d')}} Oktober {{$detailPegawai->created_at->format('Y')}} Pukul {{$detailPegawai->created_at->format('H:i:s')}}
            @endif
            @if ($detailPegawai->created_at->format('m') == '11')
            {{$detailPegawai->created_at->format('d')}} November {{$detailPegawai->created_at->format('Y')}} Pukul {{$detailPegawai->created_at->format('H:i:s')}}
            @endif
            @if ($detailPegawai->created_at->format('m') == '12')
            {{$detailPegawai->created_at->format('d')}} Desember {{$detailPegawai->created_at->format('Y')}} Pukul {{$detailPegawai->created_at->format('H:i:s')}}
            @endif
             </a>
        </li>
      </ul>
    </div>
    <!-- /.box-body -->
  </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Edit</button>
          </div>
         
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->