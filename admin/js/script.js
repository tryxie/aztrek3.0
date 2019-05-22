$(function () {

    $("select").select2();
    tinymce.init({
        selector: 'textarea'
    });
    $('table').DataTable();

    $('table .btn.btn-danger').click(function (event) {
        let response = confirm("Etes-vous certain de vouloir supprimer ?");
        if (!response) {
            event.preventDefault();
        }
    });

});
