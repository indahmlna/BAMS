@extends('layout.index')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0">Daftar User</h2>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"></h3>
                        <a class="btn btn-default" href="{{url('tambahuser')}}">Tambah User</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="tableuser" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIP</th>
                                    <th>Username</th>
                                    <th>Nama</th>
                                    <th>Role</th>
                                    <th>Unit Kerja</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#detailuser">Detail</button>
                                        <button class="btn btn-danger" onclick="hapususer()">Hapus</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">

    </div>
    <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>

@include('user.modaltambahuser')
@include('user.modaldetailuser')
@include('user.modalcariuser')
@endsection

@section('script')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function hapususer() {
        Swal.fire({
            title: 'Are you sure?',
            // text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    // 'Your file has been deleted.',
                    'success'
                )
            }
        })
    }

    $(function() {
        $("#tablelistuser").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false
        });
        $("#tableuser").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false
        });
    });
</script>

@endsection