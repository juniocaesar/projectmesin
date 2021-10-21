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
            "scrollX": true,
            "columns": [
                {
                    "width": "10%"
                },
                {
                    "width": "30%"
                },
                {
                    "width": "10%"
                },
                {
                    "width": "10%"
                },
                {
                    "width": "10%"
                },
                {
                    "width": "10%"
                },
                {
                    "width": "10%"
                },
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
            "scrollX": true,
            "columns": [
                {
                    "width": "10%"
                },
                {
                    "width": "25%"
                },
                {
                    "width": "10%"
                },
                {
                    "width": "10%"
                },
                {
                    "width": "10%"
                },
                {
                    "width": "10%"
                },
                {
                    "width": "10%"
                },
                {
                    "width": "5%"
                },
            ],
            columnDefs: [
                {
                    targets: 7,
                    render: function (data, type, row, meta) {
                        let actionBtn = '<center><div class="btn-group" role="group" aria-label="Basic mixed styles example"><button type="button" class="btn btn-primary" id="editBtn"><i class="fas fa-edit"></i></button><button type="button" class="btn btn-danger" id="deleteBtn"><i class="fas fa-trash-alt"></i></button></div></center>'
                        return actionBtn;
                    }

                }
            ]
        });
    });

    $('#table-master-region tbody').on('click', '#editBtn', function () {
        var name = $(this).closest('tr').find('#deskripsi-region').text();
        console.log(name);
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