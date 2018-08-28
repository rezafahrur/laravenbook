<div class="modal fade" id="modal-pegawai-edit">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Ubah Data Pegawai {{$editPegawai->nama_pegawai}} </h4>
        </div>
        <div class="modal-body">
        <form action="kepegawaian/{{$editPegawai->id}}" method="post" class="form-horizontal">
                @csrf
                <input type="hidden" name="jenisForm" value="pegawai">
               <div class="form-group">
                 <label for="editNIKPegawai" class="col-sm-2 control-label">NIK</label>
                 <div class="col-sm-10">
                   <input type="text" name="nikPegawai" class="form-control" id="editNIKPegawai" value="{{$editPegawai->nik_pegawai}}">
                 </div>
               </div>
               <div class="form-group">
                 <label for="editKTPPegawai" class="col-sm-2 control-label">KTP</label>
                 <div class="col-sm-10">
                   <input type="text" name="ktpPegawai" class="form-control" id="editKTPPegawai" value="{{$editPegawai->ktp_pegawai}}">
                 </div>
               </div>
               <div class="form-group">
                 <label for="editNamaPegawai" class="col-sm-2 control-label">Nama</label>
                 <div class="col-sm-10">
                   <input type="text" name="namaPegawai" class="form-control" id="editNamaPegawai" value="{{$editPegawai->nama_pegawai}}">
                 </div>
               </div>
               <div class="form-group">
                 <label for="editGelarPegawai" class="col-sm-2 control-label">Gelar</label>
                 <div class="col-sm-10">
                   <input type="text" name="gelarPegawai" class="form-control" id="editGelarPegawai" value="{{$editPegawai->gelar_pegawai}}">
                 </div>
               </div>
               <div class="form-group">
                 <label for="editTempatLahirPegawai" class="col-sm-2 control-label">Tempat Lahir</label>
                 <div class="col-sm-10">
                   <input type="text" name="tempatLahirPegawai" class="form-control" id="editTempatLahirPegawai" value="{{$editPegawai->tempat_lahir}}">
                 </div>
               </div>
               <div class="form-group">
                 <label for="editTglLahirPegawai" class="col-sm-2 control-label">Tanggal Lahir</label>
                 <div class="col-sm-10">
                   <input type="text" name="tanggalLahirPegawai" class="form-control" id="editTanggalLahirPegawai" value="{{$editPegawai->tanggal_lahir}}">
                 </div>
               </div>
               <div class="form-group">
                 <label for="editJKPegawai" class="col-sm-2 control-label">Jenis Kelamin</label>
                 <div class="col-sm-8">
                   <select class="form-control" name="jkPegawaiShow" disabled>
                      <option value="{{$editPegawai->jenis_kelamin}}" selected>{{$editPegawai->jenis_kelamin}}</option>
                   </select>
                  <input id="editJKPegawai" type="hidden" name="jkPegawai" value="{{$editPegawai->jenis_kelamin}}">
                 </div>
               </div>
               <div class="form-group">
                  <label for="editAgamaPegawai" class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-8">
                    <select class="form-control" name="agamaPegawai">
                        <option value="{{$editPegawai->agama}}">{{$editPegawai->agama}}</option>
                        <option value="NULL">Pilih Agama Di Bawah</option>
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
                 <label for="editPendidikanPegawai" class="col-sm-2 control-label">Pendidikan</label>
                 <div class="col-sm-10">
                   <input type="text" name="pendidikanPegawai" class="form-control" id="editPendidikanPegawai" value="{{$editPegawai->pendidikan}}">
                 </div>
               </div>
               <div class="form-group">
                 <label for="editAlamatPegawai" class="col-sm-2 control-label">Alamat</label>
                 <div class="col-sm-10">
                   <input type="text" name="alamatPegawai" class="form-control" id="editAlamatPegawai" value="{{$editPegawai->alamat}}">
                 </div>
               </div>
               <div class="form-group">
                 <label for="editNoTelpPegawai" class="col-sm-2 control-label">No. Telepon</label>
                 <div class="col-sm-10">
                   <input type="text" name="noTelpPegawai" class="form-control" id="editNoTelpPegawai" value="{{$editPegawai->no_telp}}">
                 </div>
               </div>
               <div class="form-group">
                 <label for="editNoTelpDaruratPegawai" class="col-sm-2 control-label">No. Telepon Darurat</label>
                 <div class="col-sm-10">
                   <input type="text" name="noTelpDaruratPegawai" class="form-control" id="editNoTelpDaruratPegawai" value="{{$editPegawai->no_telp_darurat}}">
                 </div>
               </div>
               <div class="form-group">
                 <label for="editJabatanPegawai" class="col-sm-2 control-label">Jabatan</label>
                 <div class="col-sm-10">
                   <input type="text" name="jabatanPegawai" class="form-control" id="editJabatanPegawai" value="{{$editPegawai->jabatan_pegawai}}">
                 </div>
               </div>
             </div> <!--- /.modal body -->
             <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
               <button type="submit" class="btn btn-warning">Ubah Data Pegawai</button>
             </div>
             <input type="hidden" name="_method" value="PUT">
           </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->