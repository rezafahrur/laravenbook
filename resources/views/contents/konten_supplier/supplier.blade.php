<div class="row blur">
  <!-- Tabel Supplier -->
  @include('contents.konten_supplier.tabel_supplier')
</div>

<!-- modal Form Supplier -->
@include('contents.konten_supplier.form_supplier')

<!-- Detail Supplier -->
@if ($detailSupplier = Session::get('detailSupplier'))
@include('contents.konten_supplier.detail_supplier')
@endif
<!-- Edit Supplier -->
@if ($editSupplier = Session::get('editSupplier'))
@include('contents.konten_supplier.edit_supplier')
@endif
<!-- modal Form hapus supplier -->
@if ($hapusSupplier = Session::get('hapusSupplier'))
@include('contents.konten_supplier.hapus_supplier')
@endif

