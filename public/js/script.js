function removeMainViewSuperAdmin() {
    $(function () {
        $("#master-role").css("display", "none");
        $("#master-region").css("display", "none");
        $("#master-user").css("display", "none");
    });
}

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

    $('#page-heading').html('Master Role');

    removeMainViewSuperAdmin();
    $(function () {
        $("#master-role").css("display", "block");
        $('#table_master_role').DataTable({
            "destroy": true,
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

function vMasterRegion() {
    // Change Breadcrumb
    let breadcrumbString = '';
    let breadcrumbList = [
        '<li class="breadcrumb-item"><a href="#">Beranda</a></li>',
        '<li class="breadcrumb-item"><a href="#">Master Region</a></li>',
    ];
    for (let i = 0; i < breadcrumbList.length; i++) {
        breadcrumbString = breadcrumbString + breadcrumbList[i];
    }
    $('#breadcrumb').html(breadcrumbString);

    $('#page-heading').html('Master Region');

    removeMainViewSuperAdmin();
    $(function () {
        $("#master-region").css("display", "block");
        $('#table-master-region').DataTable({
            "destroy": true,
        });
    });
}

function vMasterUser() {
    // Change Breadcrumb
    let breadcrumbString = '';
    let breadcrumbList = [
        '<li class="breadcrumb-item"><a href="#">Beranda</a></li>',
        '<li class="breadcrumb-item"><a href="#">Master User</a></li>',
    ];
    for (let i = 0; i < breadcrumbList.length; i++) {
        breadcrumbString = breadcrumbString + breadcrumbList[i];
    }
    $('#breadcrumb').html(breadcrumbString);
    
    $('#page-heading').html('Master User');
    
    removeMainViewSuperAdmin();
    $(function () {
        $("#master-user").css("display", "block");
        $('#table-master-user').DataTable({
            "destroy": true,
        });
    });

}