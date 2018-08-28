<div class="row">
  <!-- Tabel Supplier -->
  @include('contents.supplier.tabel_supplier')
</div>

<!-- modal Form Supplier -->
@include('contents.supplier.form_supplier')

<!-- Detail Supplier -->
@if ($detailSupplier = Session::get('detailSupplier'))
@include('contents.supplier.detail_supplier')
@endif
<!-- Edit Supplier -->
@if ($editSupplier = Session::get('editSupplier'))
@include('contents.supplier.edit_supplier')
@endif

