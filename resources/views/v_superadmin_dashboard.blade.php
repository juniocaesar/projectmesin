@extends('layouts.v_superadmin')

@section('main-content')

@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('status'))
<div class="alert alert-success border-left-success" role="alert">
    {{ session('status') }}
</div>
@endif

<!-- Page Breadcrumb -->
<div class="row">
    <div class="col">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" id="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            </ol>
        </nav>
    </div>
</div>

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800" id="page-heading">Beranda Super Admin</h1>

<!-- Dynamic Main Content -->
<div class="main-content" id="main-content">
    <div class="master-role" id="master-role" style="display: none">
        <div class="row">
            <div class="col-xl-12 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <table id="table_master_role" class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Deskripsi</th>
                                    <th>Status Data</th>
                                    <th>Dibuat Oleh</th>
                                    <th>Tanggal Buat</th>
                                    <th>Diupdate Oleh</th>
                                    <th>Tanggal Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                <tr>
                                    <td>{{ $d->mr_id }}</td>
                                    <td>{{ $d->mr_desc }}</td>
                                    <td>{{ $d->mr_status }}</td>
                                    <td>{{ $d->mr_create_user }}</td>
                                    <td>{{ $d->mr_create_date }}</td>
                                    <td>{{ $d->mr_update_user }}</td>
                                    <td>{{ $d->mr_update_date }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script>
    $(document).ready(function() {
    });
</script>

@endsection