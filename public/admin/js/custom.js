$(document).ready(function() {

    $('#news_tbl').DataTable({
        order: [[0, 'asc']], 
        searching: true,     
        paging: true,        
        "lengthMenu": [[5], [1,2,3,4,5, "All"]],
    });

    $('#albm_tbl').DataTable({
        order: [[0, 'asc']], 
        searching: true,     
        paging: true,       
        "lengthMenu": [[5], [1,2,3,4,5, "All"]],
    });

    $('#msg_tbl').DataTable({
        order: [[0, 'asc']], 
        searching: true,     
        paging: true,        
        "lengthMenu": [[5], [1,2,3,4,5, "All"]],
    });
    $('#std_tbl').DataTable({
        order: [[0, 'asc']], 
        searching: true,     
        paging: true,        
        "lengthMenu": [[5], [1,2,3,4,5, "All"]],
    });
    $('#admin_tbl').DataTable({
        order: [[1, 'desc']], 
        searching: true,     
        paging: true,        
        "lengthMenu": [[5], [1,2,3,4,5, "All"]],
    });
    
});
