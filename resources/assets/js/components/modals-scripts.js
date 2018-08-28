$('#modal-guru').on('show.bs.modal', function () {
    $('.modal .modal-dialog').attr('class', 'modal-dialog zoomIn animated');
});
$('#modal-guru').on('hide.bs.modal', function () {
    $('.modal .modal-dialog').attr('class', 'modal-dialog zoomOutUp animated');
});
$('#modal-guru-detail').on('show.bs.modal', function () {
    $('.modal .modal-dialog').attr('class', 'modal-dialog zoomIn animated');
});
$('#modal-guru-detail').on('hide.bs.modal', function () {
    $('.modal .modal-dialog').attr('class', 'modal-dialog zoomOutUp animated');
    $(this).removeData();
});
$('#modal-pegawai').on('show.bs.modal', function () {
    $('.modal .modal-dialog').attr('class', 'modal-dialog zoomIn animated');
});
$('#modal-pegawai').on('hide.bs.modal', function () {
    $('.modal .modal-dialog').attr('class', 'modal-dialog zoomOutUp animated');
});
$('#modal-pegawai-detail').on('show.bs.modal', function () {
    $('.modal .modal-dialog').attr('class', 'modal-dialog zoomIn animated');
});
$('#modal-pegawai-detail').on('hide.bs.modal', function () {
    $('.modal .modal-dialog').attr('class', 'modal-dialog zoomOutUp animated');
    $(this).removeData();
});
$('#modal-guru-edit').on('show.bs.modal', function () {
    $('.modal .modal-dialog').attr('class', 'modal-dialog zoomIn animated');
});
$('#modal-guru-edit').on('hide.bs.modal', function () {
    $('.modal .modal-dialog').attr('class', 'modal-dialog zoomOutUp animated');
    $(this).removeData();
});
$('#modal-pegawai-edit').on('show.bs.modal', function () {
    $('.modal .modal-dialog').attr('class', 'modal-dialog zoomIn animated');
});
$('#modal-pegawai-edit').on('hide.bs.modal', function () {
    $('.modal .modal-dialog').attr('class', 'modal-dialog zoomOutUp animated');
    $(this).removeData();
});
