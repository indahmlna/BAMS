@extends('layout.index')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <!-- <h2 class="m-0">Daftar User</h2> -->
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
                        <h2 class="card-title" style="font-weight: 1000;">Tambah User</h2>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="box-body form-element">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIP</label>
                                <div class="col-sm-6">
                                    <input type="" class="form-control" id="" placeholder="" disabled>
                                </div>
                                <div class="col-sm-2">
                                    <button class="btn btn-default" data-toggle="modal" data-target="#cariuser"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-6">
                                    <input type="" class="form-control" id="" placeholder="" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-6">
                                    <input type="" class="form-control" id="" placeholder="" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Role</label>
                                <div class="col-sm-6">
                                    <select class="form-control">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Divisi</label>
                                <div class="col-sm-6">
                                    <select class="form-control">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Unit Kerja</label>
                                <div class="col-sm-6">
                                    <input type="" class="form-control" id="" placeholder="" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Posisi</label>
                                <div class="col-sm-6">
                                    <input type="" class="form-control" id="" placeholder="" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Upload Tanda Tangan Digital</label>
                                <div class="col-sm-6">
                                    <input type="file" class="form-control" id="" placeholder="">
                                    <p class="text-danger">*format PDF max 1mb</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a type="button" class="btn btn-warning" data-dismiss="modal" style="color: white;">Cancel</a>
                        <a type="button" class="btn btn-success" data-dismiss="modal">Submit</a>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

@include('user.modalcariuser')
@endsection

@section('script')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(function() {
        $("#tablelistuser").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false
        });

    });
</script>

@endsection