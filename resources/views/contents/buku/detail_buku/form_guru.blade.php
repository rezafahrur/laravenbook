<div class="modal fade" id="modal-guru">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Data Guru</h4>
        </div>
        <div class="modal-body">
         <form action="kepegawaian" method="post" class="form-horizontal">
           @csrf
           <input type="hidden" name="jenisForm" value="guru">
          <div class="form-group">
            <label for="inputNIKGuru" class="col-sm-2 control-label">NIK</label>
            <div class="col-sm-10">
              <input type="text" name="nikGuru" class="form-control" id="inputNIKGuru" placeholder="Nomor Induk Guru">
            </div>
          </div>
          <div class="form-group">
            <label for="inputKTPGuru" class="col-sm-2 control-label">KTP</label>
            <div class="col-sm-10">
              <input type="text" name="ktpGuru" class="form-control" id="inputKTPGuru" placeholder="Nomor KTP Guru">
            </div>
          </div>
          <div class="form-group">
            <label for="inputNamaGuru" class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" name="namaGuru" class="form-control" id="inputNamaGuru" placeholder="Nama Guru">
            </div>
          </div>
          <div class="form-group">
            <label for="inputGelarGuru" class="col-sm-2 control-label">Gelar</label>
            <div class="col-sm-10">
              <input type="text" name="gelarGuru" class="form-control" id="inputGelarGuru" placeholder="Gelar Guru (Contoh: S.Pd)">
            </div>
          </div>
          <div class="form-group">
            <label for="inputTempatLahirGuru" class="col-sm-2 control-label">Tempat Lahir</label>
            <div class="col-sm-10">
              <input type="text" name="tempatLahirGuru" class="form-control" id="inputTempatLahirGuru" placeholder="Tempat Lahir Guru">
            </div>
          </div>
          <div class="form-group">
            <label for="inputTglLahirGuru" class="col-sm-2 control-label">Tanggal Lahir</label>
            <div class="col-sm-10">
              <input type="text" name="tanggalLahirGuru" class="form-control" id="inputTanggalLahirGuru" placeholder="tgl lahir">
            </div>
          </div>
          <div class="form-group">
            <label for="inputJKGuru" class="col-sm-2 control-label">Jenis Kelamin</label>
            <div class="col-sm-8">
              <select class="form-control" name="jkGuru">
                  <option value="NULL" selected>Pilih Jenis Kelamin</option>
                <option value="L">L</option>
                <option value="P">P</option>
              </select>
            </div>
          </div>
          <div class="form-group">
              <label for="inputAgamaGuru" class="col-sm-2 control-label">Agama</label>
              <div class="col-sm-8">
                <select class="form-control" name="agamaGuru">
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
            <label for="inputPendidikanGuru" class="col-sm-2 control-label">Pendidikan</label>
            <div class="col-sm-10">
              <input type="text" name="pendidikanGuru" class="form-control" id="inputPendidikanGuru" placeholder="Pendidikan (Contoh: S1 Kependidikan Universitas ....)">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAlamatGuru" class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text" name="alamatGuru" class="form-control" id="inputAlamatGuru" placeholder="Alamat Guru">
            </div>
          </div>
          <div class="form-group">
            <label for="inputNoTelpGuru" class="col-sm-2 control-label">No. Telepon</label>
            <div class="col-sm-10">
              <input type="text" name="noTelpGuru" class="form-control" id="inputNoTelpGuru" placeholder="Nomor Telepon Guru">
            </div>
          </div>
          <div class="form-group">
            <label for="inputNoTelpDaruratGuru" class="col-sm-2 control-label">No. Telepon Darurat</label>
            <div class="col-sm-10">
              <input type="text" name="noTelpDaruratGuru" class="form-control" id="inputNoTelpDaruratGuru" placeholder="Nomor Telepon Darurat Guru">
            </div>
          </div>
          <div class="form-group">
              <label for="inputStatusGuru" class="col-sm-2 control-label">Status Guru</label>
              <div class="col-sm-8">
                <select class="form-control" name="statusGuru">
                    <option value="NULL" selected>Pilih Status Guru</option>
                  <option value="PNS">PNS</option>
                  <option value="NON-PNS">NON-PNS</option>
                </select>
              </div>
            </div>
          <div class="form-group">
            <label for="inputPasswordGuru" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" name="passwordGuru" class="form-control" id="inputPasswordGuru" placeholder="Password">
            </div>
          </div>
        </div> <!--- /.modal body -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah Data Guru</button>
        </div>
      </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->