@extends('layout.index')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0">Daftar Rekening</h2>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card card-default">
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal">
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama Bank</label>
                        <div class="col-sm-6">
                        <select class="form-control">
                                <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Provinsi</label>
                        <div class="col-sm-6">
                        <select class="form-control">
                                <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kabupaten</label>
                        <div class="col-sm-6">
                            <select class="form-control">
                                <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kecamatan</label>
                        <div class="col-sm-6">
                            <select class="form-control">
                                <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama Cabang</label>
                        <div class="col-sm-6">
                            <input type="" class="form-control" id="" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Alamat Bank</label>
                        <div class="col-sm-6">
                            <textarea type="" class="form-control" id="" placeholder="" disabled> </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kode Pos</label>
                        <div class="col-sm-6">
                            <input type="" class="form-control" id="" placeholder="" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Telp</label>
                        <div class="col-sm-6">
                            <input type="" class="form-control" id="" placeholder="" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">FAX</label>
                        <div class="col-sm-6">
                            <input type="" class="form-control" id="" placeholder="" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama Pemilik Rekening</label>
                        <div class="col-sm-6">
                            <input type="" class="form-control" id="" placeholder="" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nomor Rekening</label>
                        <div class="col-sm-6">
                            <input type="" class="form-control" id="" placeholder="" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Alamat Pemilik Rekening</label>
                        <div class="col-sm-6">
                            <textarea type="" class="form-control" id="" placeholder=""></textarea>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-success float-right">Submit</button>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">

    </div>
    <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>

@endsection