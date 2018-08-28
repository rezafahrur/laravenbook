<div class="row">
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

