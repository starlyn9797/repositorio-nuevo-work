$(document).ready(function() {
    $('.btn-delete').on('click', function() {
        const countryId = $(this).attr('id');
        const deleteUrl = `/countries/${countryId}`;
        $('#delete-form').attr('action', deleteUrl);
        $('#delete-modal').modal('show');
    });
});