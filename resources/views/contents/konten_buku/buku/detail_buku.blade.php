<div class="modal fade" id="modal-buku-detail">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Detail Buku {{$detailBuku->judul}}</h4>
        </div>
        <div class="modal-body">
<div class="box box-primary">
    <div class="box-body box-profile">
      <img class="profile-user-img img-responsive img-circle" src="{{ asset("img/user2-160x160.jpg")}}" alt="User profile picture">

      <h3 class="profile-username text-center"> {{$detailBuku->judul}}</h3>

      <p class="text-muted text-center">Karangan - {{$detailBuku->pengarang}} </p>

      <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
              <b>Kode Buku</b> <a class="pull-right"> {{$detailBuku->kode_buku}}</a>
            </li>
            <li class="list-group-item">
                <b>Tahun Terbit</b> 
                <a class="pull-right">
                {{$detailBuku->tahun_terbit}}
                  </a>
              </li>
            <li class="list-group-item">
                <b>Suplier</b> <a class="pull-right">{{$detailBuku->namaSupplier}} </a>
              </li>
        <li class="list-group-item">
        <b>Kategori</b> <a class="pull-right"> {{$detailBuku->namaKategori}}</a>
        </li>
        <li class="list-group-item">
            <b>Harga</b> <a class="pull-right"> {{$detailBuku->harga}} </a>
          </li>
        <li class="list-group-item">
            <b>Jumlah</b> <a class="pull-right"> {{$detailBuku->quantity}} </a>
          </li>
        <li class="list-group-item">
          <b>Tanggal Masuk</b> <a class="pull-right"> 
              @if ($detailBuku->created_at->format('m') == '01')
              {{$detailBuku->created_at->format('d')}} Januari {{$detailBuku->created_at->format('Y')}} Pukul {{$detailBuku->created_at->format('H:i:s')}}
              @endif
              @if ($detailBuku->created_at->format('m') == '02')
              {{$detailBuku->created_at->format('d')}} Februari {{$detailBuku->created_at->format('Y')}} Pukul {{$detailBuku->created_at->format('H:i:s')}}
              @endif
              @if ($detailBuku->created_at->format('m') == '03')
              {{$detailBuku->created_at->format('d')}} Maret {{$detailBuku->created_at->format('Y')}} Pukul {{$detailBuku->created_at->format('H:i:s')}}
              @endif
              @if ($detailBuku->created_at->format('m') == '04')
              {{$detailBuku->created_at->format('d')}} April {{$detailBuku->created_at->format('Y')}} Pukul {{$detailBuku->created_at->format('H:i:s')}}
              @endif
              @if ($detailBuku->created_at->format('m') == '05')
              {{$detailBuku->created_at->format('d')}} Mei {{$detailBuku->created_at->format('Y')}} Pukul {{$detailBuku->created_at->format('H:i:s')}}
              @endif
              @if ($detailBuku->created_at->format('m') == '06')
              {{$detailBuku->created_at->format('d')}} Juni {{$detailBuku->created_at->format('Y')}} Pukul {{$detailBuku->created_at->format('H:i:s')}}
              @endif
              @if ($detailBuku->created_at->format('m') == '07')
              {{$detailBuku->created_at->format('d')}} Juli {{$detailBuku->created_at->format('Y')}} Pukul {{$detailBuku->created_at->format('H:i:s')}}
              @endif
            @if ($detailBuku->created_at->format('m') == '08')
            {{$detailBuku->created_at->format('d')}} Agustus {{$detailBuku->created_at->format('Y')}} Pukul {{$detailBuku->created_at->format('H:i:s')}}
            @endif
            @if ($detailBuku->created_at->format('m') == '09')
            {{$detailBuku->created_at->format('d')}} September {{$detailBuku->created_at->format('Y')}} Pukul {{$detailBuku->created_at->format('H:i:s')}}
            @endif
            @if ($detailBuku->created_at->format('m') == '10')
            {{$detailBuku->created_at->format('d')}} Oktober {{$detailBuku->created_at->format('Y')}} Pukul {{$detailBuku->created_at->format('H:i:s')}}
            @endif
            @if ($detailBuku->created_at->format('m') == '11')
            {{$detailBuku->created_at->format('d')}} November {{$detailBuku->created_at->format('Y')}} Pukul {{$detailBuku->created_at->format('H:i:s')}}
            @endif
            @if ($detailBuku->created_at->format('m') == '12')
            {{$detailBuku->created_at->format('d')}} Desember {{$detailBuku->created_at->format('Y')}} Pukul {{$detailBuku->created_at->format('H:i:s')}}
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