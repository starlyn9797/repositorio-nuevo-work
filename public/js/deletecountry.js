const DeleteCountry = {
    init: function() {
        $('.btn-delete').on('click', this.handleClick.bind(this));
    },
    handleClick: function(event) {
        const countryId = $(event.currentTarget).attr('id');
        const deleteUrl = `/countries/${countryId}`;
        $('#delete-form').attr('action', deleteUrl);
        $('#delete-modal').modal('show');
    }
};

$(document).ready(function() {
    DeleteCountry.init();
});
