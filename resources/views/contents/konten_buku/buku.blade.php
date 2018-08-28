<div class="row blur">
      <!-- Tabel Buku -->
      @include('contents.konten_buku.buku.tabel_buku')
      <!-- Tabel Kategori -->
      @include('contents.konten_buku.kategori.tabel_kategori')
</div>

<!-- modal Form buku -->
    @include('contents.konten_buku.buku.form_buku')
<!-- modal Form kategori -->
@include('contents.konten_buku.kategori.form_kategori')
<!-- Detail Buku -->
  @if ($detailBuku = Session::get('detailBuku'))
    @include('contents.konten_buku.buku.detail_buku')
  @endif
  <!-- Edit Buku -->
  @if ($editBuku = Session::get('editBuku'))
    @include('contents.konten_buku.buku.edit_buku')
  @endif
<!-- Edit Kategori -->
  @if ($editKategori = Session::get('editKategori'))
    @include('contents.konten_buku.kategori.edit_kategori')
  @endif
  
