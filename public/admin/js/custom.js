$(document).ready(function() {
    // Initialize the DataTable
    $('#news_tbl').DataTable({
        order: [[0, 'asc']], // Sort the first column in ascending order by default
        searching: true,     // Enable searching/filtering
        paging: true,        // Enable pagination
        "lengthMenu": [[10, 25, 50, -1], [1, "All"]],

        // If you want to change the language of the DataTable, you can use the "language" option:
        // "language": {
        //     "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/German.json" // Example: German language file
        // },
    });
});
