const DeleteCountry = {
    init: function() {
        $('.btn-delete').on('click', this.handleClick.bind(this));
    },
    handleClick: function(event) {
        const countryId = $(event.currentTarget).attr('id');
        const deleteUrl = $(event.currentTarget).data('url').replace(':id', countryId);
        $('#delete-form').attr('action', deleteUrl);
        $('#delete-modal').modal('show');
    }
};

$(document).ready(function() {
    DeleteCountry.init();
});
