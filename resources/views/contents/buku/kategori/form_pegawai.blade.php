<div class="modal fade" id="modal-pegawai">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Data Pegawai</h4>
        </div>
        <div class="modal-body">
            <form action="kepegawaian" method="post" class="form-horizontal">
                @csrf
                <input type="hidden" name="jenisForm" value="pegawai">
               <div class="form-group">
                 <label for="inputNIKPegawai" class="col-sm-2 control-label">NIK</label>
                 <div class="col-sm-10">
                   <input type="text" name="nikPegawai" class="form-control" id="inputNIPPegawai" placeholder="Nomor Induk Pegawai">
                 </div>
               </div>
               <div class="form-group">
                 <label for="inputKTPPegawai" class="col-sm-2 control-label">KTP</label>
                 <div class="col-sm-10">
                   <input type="text" name="ktpPegawai" class="form-control" id="inputKTPPegawai" placeholder="Nomor KTP Pegawai">
                 </div>
               </div>
               <div class="form-group">
                 <label for="inputNamaPegawai" class="col-sm-2 control-label">Nama</label>
                 <div class="col-sm-10">
                   <input type="text" name="namaPegawai" class="form-control" id="inputNamaPegawai" placeholder="Nama Pegawai">
                 </div>
               </div>
               <div class="form-group">
                 <label for="inputGelarPegawai" class="col-sm-2 control-label">Gelar</label>
                 <div class="col-sm-10">
                   <input type="text" name="gelarPegawai" class="form-control" id="inputGelarPegawai" placeholder="Gelar Pegawai (Contoh: S.Pd, Kosongkan bila tidak ada)">
                 </div>
               </div>
               <div class="form-group">
                 <label for="inputTempatLahirPegawai" class="col-sm-2 control-label">Tempat Lahir</label>
                 <div class="col-sm-10">
                   <input type="text" name="tempatLahirPegawai" class="form-control" id="inputTempatLahirPegawai" placeholder="Tempat Lahir Pegawai">
                 </div>
               </div>
               <div class="form-group">
                 <label for="inputTglLahirPegawai" class="col-sm-2 control-label">Tanggal Lahir</label>
                 <div class="col-sm-10">
                   <input type="text" name="tanggalLahirPegawai" class="form-control" id="inputTanggalLahirPegawai" placeholder="tgl lahir">
                 </div>
               </div>
               <div class="form-group">
                 <label for="inputJKPegawai" class="col-sm-2 control-label">Jenis Kelamin</label>
                 <div class="col-sm-8">
                   <select class="form-control" name="jkPegawai">
                      <option value="NULL" selected>Pilih Jenis Kelamin</option>
                     <option value="L">L</option>
                     <option value="P">P</option>
                   </select>
                 </div>
               </div>
               <div class="form-group">
                  <label for="inputAgamaPegawai" class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-8">
                    <select class="form-control" name="agamaPegawai">
                        <option value="NULL" selected>Pilih Agama</option>
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
                 <label for="inputPendidikanPegawai" class="col-sm-2 control-label">Pendidikan</label>
                 <div class="col-sm-10">
                   <input type="text" name="pendidikanPegawai" class="form-control" id="inputPendidikanPegawai" placeholder="Pendidikan (Contoh: S1 Kependidikan Universitas ....)">
                 </div>
               </div>
               <div class="form-group">
                 <label for="inputAlamatPegawai" class="col-sm-2 control-label">Alamat</label>
                 <div class="col-sm-10">
                   <input type="text" name="alamatPegawai" class="form-control" id="inputAlamatPegawai" placeholder="Alamat Pegawai">
                 </div>
               </div>
               <div class="form-group">
                 <label for="inputNoTelpPegawai" class="col-sm-2 control-label">No. Telepon</label>
                 <div class="col-sm-10">
                   <input type="text" name="noTelpPegawai" class="form-control" id="inputNoTelpPegawai" placeholder="Nomor Telepon Pegawai">
                 </div>
               </div>
               <div class="form-group">
                 <label for="inputNoTelpDaruratPegawai" class="col-sm-2 control-label">No. Telepon Darurat</label>
                 <div class="col-sm-10">
                   <input type="text" name="noTelpDaruratPegawai" class="form-control" id="inputNoTelpDaruratPegawai" placeholder="Nomor Telepon Darurat Pegawai">
                 </div>
               </div>
               <div class="form-group">
                 <label for="inputJabatanPegawai" class="col-sm-2 control-label">Jabatan</label>
                 <div class="col-sm-10">
                   <input type="text" name="jabatanPegawai" class="form-control" id="inputJabatanPegawai" placeholder="Jabatan Pegawai">
                 </div>
               </div>
             </div> <!--- /.modal body -->
             <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
               <button type="submit" class="btn btn-warning">Tambah Data Pegawai</button>
             </div>
           </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->