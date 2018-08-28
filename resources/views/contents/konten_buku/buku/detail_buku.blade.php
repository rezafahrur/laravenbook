<div class="modal fade" id="modal-buku-detail">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Data Guru {{$detailGuru->nama_guru}}</h4>
        </div>
        <div class="modal-body">
<div class="box box-primary">
    <div class="box-body box-profile">
      <img class="profile-user-img img-responsive img-circle" src="{{ asset("img/user2-160x160.jpg")}}" alt="User profile picture">

      <h3 class="profile-username text-center"> {{$detailGuru->nama_guru}}, {{$detailGuru->gelar_guru}} </h3>

      <p class="text-muted text-center">Guru {{$detailGuru->status_guru}} - {{$detailGuru->status_mengajar}} </p>

      <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
              <b>Tempat & Tanggal Lahir</b> <a class="pull-right"> {{$detailGuru->tempat_lahir}}, {{$detailGuru->tanggal_lahir}} </a>
            </li>
            <li class="list-group-item">
                <b>Jenis Kelamin</b> 
                <a class="pull-right">
                @if ($detailGuru->jenis_kelamin == "L")
                    Laki-Laki
                @else
                    Perempuan
                @endif  
                  </a>
              </li>
            <li class="list-group-item">
                <b>Agama</b> <a class="pull-right"> {{$detailGuru->agama}}</a>
              </li>
        <li class="list-group-item">
          <b>Alamat</b> <a class="pull-right"> {{$detailGuru->alamat}} </a>
        </li>
        <li class="list-group-item">
            <b>Pendidikan</b> <a class="pull-right"> {{$detailGuru->pendidikan}} </a>
          </li>
        <li class="list-group-item">
            <b>Nomor Telepon</b> <a class="pull-right"> {{$detailGuru->no_telp}} </a>
          </li>
          <li class="list-group-item">
              <b>Nomor Telepon Darurat</b> <a class="pull-right"> {{$detailGuru->no_telp_darurat}} </a>
            </li>
        <li class="list-group-item">
          <b>Ditetapkan Tanggal</b> <a class="pull-right"> 
              @if ($detailGuru->created_at->format('m') == '01')
              {{$detailGuru->created_at->format('d')}} Januari {{$detailGuru->created_at->format('Y')}} Pukul {{$detailGuru->created_at->format('H:i:s')}}
              @endif
              @if ($detailGuru->created_at->format('m') == '02')
              {{$detailGuru->created_at->format('d')}} Februari {{$detailGuru->created_at->format('Y')}} Pukul {{$detailGuru->created_at->format('H:i:s')}}
              @endif
              @if ($detailGuru->created_at->format('m') == '03')
              {{$detailGuru->created_at->format('d')}} Maret {{$detailGuru->created_at->format('Y')}} Pukul {{$detailGuru->created_at->format('H:i:s')}}
              @endif
              @if ($detailGuru->created_at->format('m') == '04')
              {{$detailGuru->created_at->format('d')}} April {{$detailGuru->created_at->format('Y')}} Pukul {{$detailGuru->created_at->format('H:i:s')}}
              @endif
              @if ($detailGuru->created_at->format('m') == '05')
              {{$detailGuru->created_at->format('d')}} Mei {{$detailGuru->created_at->format('Y')}} Pukul {{$detailGuru->created_at->format('H:i:s')}}
              @endif
              @if ($detailGuru->created_at->format('m') == '06')
              {{$detailGuru->created_at->format('d')}} Juni {{$detailGuru->created_at->format('Y')}} Pukul {{$detailGuru->created_at->format('H:i:s')}}
              @endif
              @if ($detailGuru->created_at->format('m') == '07')
              {{$detailGuru->created_at->format('d')}} Juli {{$detailGuru->created_at->format('Y')}} Pukul {{$detailGuru->created_at->format('H:i:s')}}
              @endif
            @if ($detailGuru->created_at->format('m') == '08')
            {{$detailGuru->created_at->format('d')}} Agustus {{$detailGuru->created_at->format('Y')}} Pukul {{$detailGuru->created_at->format('H:i:s')}}
            @endif
            @if ($detailGuru->created_at->format('m') == '09')
            {{$detailGuru->created_at->format('d')}} September {{$detailGuru->created_at->format('Y')}} Pukul {{$detailGuru->created_at->format('H:i:s')}}
            @endif
            @if ($detailGuru->created_at->format('m') == '10')
            {{$detailGuru->created_at->format('d')}} Oktober {{$detailGuru->created_at->format('Y')}} Pukul {{$detailGuru->created_at->format('H:i:s')}}
            @endif
            @if ($detailGuru->created_at->format('m') == '11')
            {{$detailGuru->created_at->format('d')}} November {{$detailGuru->created_at->format('Y')}} Pukul {{$detailGuru->created_at->format('H:i:s')}}
            @endif
            @if ($detailGuru->created_at->format('m') == '12')
            {{$detailGuru->created_at->format('d')}} Desember {{$detailGuru->created_at->format('Y')}} Pukul {{$detailGuru->created_at->format('H:i:s')}}
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