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

    <!-- Master Role Menu -->
    <div class="master-role" id="master-role" style="display: none">
        <div class="row">
            <div class="col-xl-12 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <table id="table_master_role" class="table">
                            <thead>
                                <tr>
                                    <th>Role Id</th>
                                    <th>Deskripsi</th>
                                    <th>Status Data</th>
                                    <th>Dibuat Oleh</th>
                                    <th>Tanggal Buat</th>
                                    <th>Diupdate Oleh</th>
                                    <th>Tanggal Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mr_data as $mr_item)
                                <tr>
                                    <td>{{ $mr_item->mr_id }}</td>
                                    <td>{{ $mr_item->mr_desc }}</td>
                                    <td>{{ $mr_item->mr_status }}</td>
                                    <td>{{ $mr_item->mr_create_user }}</td>
                                    <td>{{ $mr_item->mr_create_date }}</td>
                                    <td>{{ $mr_item->mr_update_user }}</td>
                                    <td>{{ $mr_item->mr_update_date }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Master Region Menu -->
    <div class="master-region" id="master-region" style="display: none">
        <div class="row">
            <div class="col-xl-12 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-header">
                        <b>Tabel Master Region</b>
                    </div>
                    <div class="card-body">
                        <table id="table-master-region" class="table">
                            <thead>
                                <tr>
                                    <th>Region Id</th>
                                    <th>Deskripsi</th>
                                    <th>Status Data</th>
                                    <th>Dibuat Oleh</th>
                                    <th>Tanggal Buat</th>
                                    <th>Diupdate Oleh</th>
                                    <th>Tanggal Update</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mre_data as $mre_item)
                                <tr>
                                    <td>{{ $mre_item->mre_id }}</td>
                                    <td id="deskripsi-region">{{ $mre_item->mre_desc }}</td>
                                    <td>{{ $mre_item->mre_status }}</td>
                                    <td>{{ $mre_item->mre_create_user }}</td>
                                    <td>{{ $mre_item->mre_create_date }}</td>
                                    <td>{{ $mre_item->mre_update_user }}</td>
                                    <td>{{ $mre_item->mre_update_date }}</td>
                                    <td>Aksi</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-md btn-success" type="button" data-toggle="modal" data-target="#insertRegionModal"><i class="fas fa-plus"></i> <b>Tambah Region</b></button>
                        </div>
                    </div>
                    <!-- Insert Modal -->
                    <div class="modal" id="insertRegionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Region</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ url('insert_region') }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="mb-3">
                                            <label for="regionDesc" class="form-label">Nama Region</label>
                                            <input type="text" class="form-control" name="regionDesc" id="regionDesc" placeholder="Masukkan nama region" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="regionStatusData" class="form-label">Status Data</label>
                                            <select class="custom-select" name="regionStatusData" id="regionStatusData" required>
                                                <option value="1">Aktif</option>
                                                <option value="0">Tidak Aktif</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Batal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Master User -->

</div>

<!-- Scripts -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</script>

@endsection