<div class="row">
      <!-- Tabel Guru -->
      @include('contents.kepegawaian.guru.tabel_guru')
      <!-- Tabel Guru Aktif-->
      @include('contents.kepegawaian.guru.tabel_guru_aktif')
      <!-- Tabel Pegawai -->
      @include('contents.kepegawaian.pegawai.tabel_pegawai')
</div>

<!-- modal Form guru -->
    @include('contents.kepegawaian.guru.form_guru')
<!-- modal Form Pegawai -->
@include('contents.kepegawaian.pegawai.form_pegawai')
<!-- Detail Guru -->
  @if ($detailGuru = Session::get('detailGuru'))
    @include('contents.kepegawaian.guru.detail_guru')
  @endif
<!-- Detail Pegawai -->
  @if ($detailPegawai = Session::get('detailPegawai'))
    @include('contents.kepegawaian.pegawai.detail_pegawai')
  @endif
  <!-- Edit Guru -->
  @if ($editGuru = Session::get('editGuru'))
    @include('contents.kepegawaian.guru.edit_guru')
  @endif
<!-- Edit Pegawai -->
  @if ($editPegawai = Session::get('editPegawai'))
    @include('contents.kepegawaian.pegawai.edit_pegawai')
  @endif
  
