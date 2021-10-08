function vMasterRole() {
    // Change Breadcrumb
    let breadcrumbString = '';
    let breadcrumbList = [
        '<li class="breadcrumb-item"><a href="#">Beranda</a></li>',
        '<li class="breadcrumb-item"><a href="#">Master Role</a></li>',
    ];
    for (let i = 0; i < breadcrumbList.length; i++) {
        breadcrumbString = breadcrumbString + breadcrumbList[i];
    }
    $('#breadcrumb').html(breadcrumbString);

    // Change Heading
    $('#page-heading').html('Master Role');

    // Change Content
    $(function () {
        $("#master-role").css("display", "block");
        $('#table_master_role').DataTable({
            "columns": [{
                    "width": "10%"
                },
                {
                    "width": "40%"
                },
                {
                    "width": "10%"
                },
                null,
                null,
                null,
                null,
            ]
        });
    });
}