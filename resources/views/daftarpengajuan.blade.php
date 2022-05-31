@extends('layout.index')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0">Daftar Pengajuan</h2>
                <br>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Jenis Pengajuan</label>
                    <select class="form-control">
                        <option></option>
                    </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Status Pengajuan</label>
                    <input type="text" class="form-control" id="">
                </div>
                <!-- /.form-group -->
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Tanggal Pengajuan</label>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <!-- <span class="input-group-text">
                                        <i class="far fa-calendar-alt"></i>
                                    </span> -->
                            </div>
                            <input type="text" class="form-control float-right" id="reservation">
                        </div>
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>BANK</label>
                    <select class="form-control">
                        <option></option>
                    </select>
                </div>
                <!-- /.form-group -->
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>PIC</label>
                    <select class="form-control">
                        <option></option>
                    </select>
                </div>
                <!-- /.form-group -->
            </div>
            <br>
        </div>
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                    <button class="btn btn-default">Take</button>
                    <button class="btn btn-default">Buat</button>
                    <button class="btn btn-default">Download</button>
                    <button class="btn btn-default">Upload</button>
                    <button class="btn btn-default">Kirim Memo(KDP & SDM)</button>
                    <button class="btn btn-default">Kirim Resi</button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="tablepengajuan" class="table table-bordered table-striped" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor Pengajuan</th>
                                <th>Nomor Memo</th>
                                <th>Bank</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Nama Cabang</th>
                                <th>Jenis Pengajuan</th>
                                <th>Status Pengajuan</th>
                                <th colspan="3">PIC</th>
                                <th>Status Pengajuan (SDM)</th>
                                <th></th>
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
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <button class="btn btn-default">Detail</button>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                        <label class="form-check-label" for="exampleCheck2"></label>
                                    </div>
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
    <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
@endsection
@section('script')
<!-- DataTables  & Plugins -->

<script>
    $(function() {
        $("#tablepengajuan").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["excel", "pdf"]
        }).buttons().container().appendTo('#tablepengajuan_wrapper .col-md-6:eq(0)');
        
    });
</script>

@endsection