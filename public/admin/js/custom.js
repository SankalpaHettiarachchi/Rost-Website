$(document).ready(function() {
    // Initialize the DataTable
    $('#news_tbl').DataTable({
        order: [[0, 'asc']], // Sort the first column in ascending order by default
        searching: true,     // Enable searching/filtering
        paging: true,        // Enable pagination
        "lengthMenu": [[10, 25, 50, -1], [1, "All"]],
    });

    $('#albm_tbl').DataTable({
        order: [[0, 'asc']], // Sort the first column in ascending order by default
        searching: true,     // Enable searching/filtering
        paging: true,        // Enable pagination
        "lengthMenu": [[10, 25, 50, -1], [1, "All"]],
    });

    $('#msg_tbl').DataTable({
        order: [[0, 'asc']], // Sort the first column in ascending order by default
        searching: true,     // Enable searching/filtering
        paging: true,        // Enable pagination
        "lengthMenu": [[1, -1], [1, "All"]],
    });
    $('#std_tbl').DataTable({
        order: [[0, 'asc']], // Sort the first column in ascending order by default
        searching: true,     // Enable searching/filtering
        paging: true,        // Enable pagination
        "lengthMenu": [[1, -1], [1, "All"]],
    });
    $('#admin_tbl').DataTable({
        order: [[0, 'asc']], // Sort the first column in ascending order by default
        searching: true,     // Enable searching/filtering
        paging: true,        // Enable pagination
        "lengthMenu": [[5], [1,2,3,4,5, "All"]],
    });
    
});
