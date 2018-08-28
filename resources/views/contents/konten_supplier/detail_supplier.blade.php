<div class="modal fade" id="modal-supplier-detail">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Data Supplier {{$detailSupplier->nama_supplier}}</h4>
      </div>
      <div class="modal-body">
<div class="box box-primary">
  <div class="box-body box-profile">
    <img class="profile-user-img img-responsive img-circle" src="{{ asset("img/user2-160x160.jpg")}}" alt="User profile picture">

    <h3 class="profile-username text-center"> {{$detailSupplier->nama_supplier}}</h3>

    <p class="text-muted text-center">Supplier</p>

    <ul class="list-group list-group-unbordered">
      <li class="list-group-item">
        <b>Alamat</b> <a class="pull-right"> {{$detailSupplier->alamat}} </a>
      </li>
      <li class="list-group-item">
          <b>Nomor Telepon</b> <a class="pull-right"> {{$detailSupplier->no_telp}} </a>
        </li>
      <li class="list-group-item">
        <b>Supplier Sejak</b> <a class="pull-right"> 
            @if ($detailSupplier->created_at->format('m') == '01')
            {{$detailSupplier->created_at->format('d')}} Januari {{$detailSupplier->created_at->format('Y')}} Pukul {{$detailSupplier->created_at->format('H:i:s')}}
            @endif
            @if ($detailSupplier->created_at->format('m') == '02')
            {{$detailSupplier->created_at->format('d')}} Februari {{$detailSupplier->created_at->format('Y')}} Pukul {{$detailSupplier->created_at->format('H:i:s')}}
            @endif
            @if ($detailSupplier->created_at->format('m') == '03')
            {{$detailSupplier->created_at->format('d')}} Maret {{$detailSupplier->created_at->format('Y')}} Pukul {{$detailSupplier->created_at->format('H:i:s')}}
            @endif
            @if ($detailSupplier->created_at->format('m') == '04')
            {{$detailSupplier->created_at->format('d')}} April {{$detailSupplier->created_at->format('Y')}} Pukul {{$detailSupplier->created_at->format('H:i:s')}}
            @endif
            @if ($detailSupplier->created_at->format('m') == '05')
            {{$detailSupplier->created_at->format('d')}} Mei {{$detailSupplier->created_at->format('Y')}} Pukul {{$detailSupplier->created_at->format('H:i:s')}}
            @endif
            @if ($detailSupplier->created_at->format('m') == '06')
            {{$detailSupplier->created_at->format('d')}} Juni {{$detailSupplier->created_at->format('Y')}} Pukul {{$detailSupplier->created_at->format('H:i:s')}}
            @endif
            @if ($detailSupplier->created_at->format('m') == '07')
            {{$detailSupplier->created_at->format('d')}} Juli {{$detailSupplier->created_at->format('Y')}} Pukul {{$detailSupplier->created_at->format('H:i:s')}}
            @endif
          @if ($detailSupplier->created_at->format('m') == '08')
          {{$detailSupplier->created_at->format('d')}} Agustus {{$detailSupplier->created_at->format('Y')}} Pukul {{$detailSupplier->created_at->format('H:i:s')}}
          @endif
          @if ($detailSupplier->created_at->format('m') == '09')
          {{$detailSupplier->created_at->format('d')}} September {{$detailSupplier->created_at->format('Y')}} Pukul {{$detailSupplier->created_at->format('H:i:s')}}
          @endif
          @if ($detailSupplier->created_at->format('m') == '10')
          {{$detailSupplier->created_at->format('d')}} Oktober {{$detailSupplier->created_at->format('Y')}} Pukul {{$detailSupplier->created_at->format('H:i:s')}}
          @endif
          @if ($detailSupplier->created_at->format('m') == '11')
          {{$detailSupplier->created_at->format('d')}} November {{$detailSupplier->created_at->format('Y')}} Pukul {{$detailSupplier->created_at->format('H:i:s')}}
          @endif
          @if ($detailSupplier->created_at->format('m') == '12')
          {{$detailSupplier->created_at->format('d')}} Desember {{$detailSupplier->created_at->format('Y')}} Pukul {{$detailSupplier->created_at->format('H:i:s')}}
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
          <a href="supplier/{{$detailSupplier->id}}/edit">
            <button type="button" class="btn btn-primary">Ubah</button>
          </a>
        </div>
       
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->