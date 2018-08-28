<div class="modal fade" id="modal-buku-edit">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Ubah Data Guru {{$editGuru->nama_guru}} </h4>
        </div>
        <div class="modal-body">
        <form action="kepegawaian/{{$editGuru->id}}" method="post" class="form-horizontal">
           @csrf
           <input type="hidden" name="jenisForm" value="guru">
          <div class="form-group">
            <label for="editNIKGuru" class="col-sm-2 control-label">NIK</label>
            <div class="col-sm-10">
            <input type="text" name="nikGuru" class="form-control" id="editNIKGuru" value="{{$editGuru->nik_guru}}">
            </div>
          </div>
          <div class="form-group">
            <label for="editKTPGuru" class="col-sm-2 control-label">KTP</label>
            <div class="col-sm-10">
            <input type="text" name="ktpGuru" class="form-control" id="editKTPGuru" value="{{$editGuru->ktp_guru}}">
            </div>
          </div>
          <div class="form-group">
            <label for="editNamaGuru" class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
            <input type="text" name="namaGuru" class="form-control" id="editNamaGuru" value="{{$editGuru->nama_guru}}">
            </div>
          </div>
          <div class="form-group">
            <label for="editGelarGuru" class="col-sm-2 control-label">Gelar</label>
            <div class="col-sm-10">
            <input type="text" name="gelarGuru" class="form-control" id="editGelarGuru" value="{{$editGuru->gelar_guru}}" >
            </div>
          </div>
          <div class="form-group">
            <label for="editTempatLahirGuru" class="col-sm-2 control-label">Tempat Lahir</label>
            <div class="col-sm-10">
            <input type="text" name="tempatLahirGuru" class="form-control" id="editempatLahirGuru" value="{{$editGuru->tempat_lahir}}">
            </div>
          </div>
          <div class="form-group">
            <label for="editTglLahirGuru" class="col-sm-2 control-label">Tanggal Lahir</label>
            <div class="col-sm-10">
            <input type="text" name="tanggalLahirGuru" class="form-control" id="editTanggalLahirGuru" value="{{$editGuru->tanggal_lahir}}">
            </div>
          </div>
          <div class="form-group">
            <label for="editJKGuru" class="col-sm-2 control-label">Jenis Kelamin</label>
            <div class="col-sm-8">
              <select class="form-control" name="jkGurushow" disabled>
              <option value="{{$editGuru->jenis_kelamin}}" selected>{{$editGuru->jenis_kelamin}}</option>
              </select>
            <input id="editJKGuru" type="hidden" name="jkGuru" value="{{$editGuru->jenis_kelamin}}">
            </div>
          </div>
          <div class="form-group">
              <label for="editAgamaGuru" class="col-sm-2 control-label">Agama</label>
              <div class="col-sm-8">
                <select class="form-control" name="agamaGuru">
                <option value="{{$editGuru->agama}}" selected>
                  {{$editGuru->agama}}</option>       
                  <option value="NULL">Pilih Agama Lain Di bawah</option>
                  <option value="Islam">Islam</option>
                  <option value="Katolik">Katolik</option>
                  <option value="Protestan">Protestan</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                  <option value="Konghucu">Konghucu</option>
                </select>
              </div>
            </div>
          <div class="form-group">
            <label for="editPendidikanGuru" class="col-sm-2 control-label">Pendidikan</label>
            <div class="col-sm-10">
            <input type="text" name="pendidikanGuru" class="form-control" id="editPendidikanGuru" value="{{$editGuru->pendidikan}}">
            </div>
          </div>
          <div class="form-group">
            <label for="editAlamatGuru" class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-10">
            <input type="text" name="alamatGuru" class="form-control" id="editAlamatGuru" value="{{$editGuru->alamat}}">
            </div>
          </div>
          <div class="form-group">
            <label for="editNoTelpGuru" class="col-sm-2 control-label">No. Telepon</label>
            <div class="col-sm-10">
            <input type="text" name="noTelpGuru" class="form-control" id="editNoTelpGuru" value="{{$editGuru->no_telp}}">
            </div>
          </div>
          <div class="form-group">
            <label for="editNoTelpDaruratGuru" class="col-sm-2 control-label">No. Telepon Darurat</label>
            <div class="col-sm-10">
              <input type="text" name="noTelpDaruratGuru" class="form-control" id="editNoTelpDaruratGuru" value="{{$editGuru->no_telp_darurat}}">
            </div>
          </div>
          <div class="form-group">
              <label for="editStatusGuru" class="col-sm-2 control-label">Status Guru</label>
              <div class="col-sm-8">
                <select class="form-control" name="statusGuru">
                  <option value="{{$editGuru->status_guru}}" selected>{{$editGuru->status_guru}}</option>
                  <option value="NULL">Pilih Status Guru Di bawah</option>
                  <option value="PNS">PNS</option>
                  <option value="NON-PNS">NON-PNS</option>
                </select>
              </div>
            </div>
            <div class="form-group">
                <label for="editStatusGuru" class="col-sm-2 control-label">Status Mengajar</label>
                <div class="col-sm-8">
                  <select class="form-control" name="statusMengajar">
                    <option value="{{$editGuru->status_mengajar}}" selected>{{$editGuru->status_mengajar}}</option>
                    <option value="NULL">Pilih Status Mengajar Di bawah</option>
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                    <option value="Pensiun">Pensiun</option>
                  </select>
                </div>
              </div>
            <input type="hidden" name="_method" value="PUT">
          <!--
          <div class="form-group">
            <label for="inputPasswordGuru" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" name="passwordGuru" class="form-control" id="inputPasswordGuru" placeholder="Password">
            </div>
          </div> -->
        </div> <!--- /.modal body -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Ubah Data Guru</button>
        </div>
      </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->