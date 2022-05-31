@extends('layout.index')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0">Daftar Penjabat</h2>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">KRM (Kepala Regional)</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button> -->
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Nama</label>
                  <input class="form-control" type="text" id="" disabled>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Alamat sesuai KTP</label>
                  <textarea class="form-control"></textarea>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>NIK</label>
                  <input class="form-control" type="text" id="" disabled>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Upload KTP</label>
                  <input class="form-control" type="file" id="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>NIK KTP</label>
                  <input class="form-control" type="text" id="">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>KTP</label>
                  <br>
                  <a type="button" class="btn btn-warning">Lihat KTP</a>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">KA (Kepala Area)</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button> -->
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Nama</label>
                  <input class="form-control" type="text" id="" disabled>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Alamat sesuai KTP</label>
                  <textarea class="form-control"></textarea>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>NIK</label>
                  <input class="form-control" type="text" id="" disabled>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Upload KTP</label>
                  <input class="form-control" type="file" id="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>NIK KTP</label>
                  <input class="form-control" type="text" id="">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>KTP</label>
                  <br>
                  <a type="button" class="btn btn-warning">Lihat KTP</a>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">KC (Kepala Cabang)</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button> -->
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Nama</label>
                  <input class="form-control" type="text" id="" disabled>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Alamat sesuai KTP</label>
                  <textarea class="form-control"></textarea>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>NIK</label>
                  <input class="form-control" type="text" id="" disabled>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Upload KTP</label>
                  <input class="form-control" type="file" id="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>NIK KTP</label>
                  <input class="form-control" type="text" id="">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>KTP</label>
                  <br>
                  <a type="button" class="btn btn-warning">Lihat KTP</a>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">FAO (Finance Administration Officer)</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button> -->
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Nama</label>
                  <input class="form-control" type="text" id="" disabled>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Alamat sesuai KTP</label>
                  <textarea class="form-control"></textarea>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>NIK</label>
                  <input class="form-control" type="text" id="" disabled>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Upload KTP</label>
                  <input class="form-control" type="file" id="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>NIK KTP</label>
                  <input class="form-control" type="text" id="">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>KTP</label>
                  <br>
                  <a type="button" class="btn btn-warning">Lihat KTP</a>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <br>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Nama</label>
                  <input class="form-control" type="text" id="" disabled>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Alamat sesuai KTP</label>
                  <textarea class="form-control"></textarea>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>NIK</label>
                  <input class="form-control" type="text" id="" disabled>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Upload KTP</label>
                  <input class="form-control" type="file" id="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>NIK KTP</label>
                  <input class="form-control" type="text" id="">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>KTP</label>
                  <br>
                  <a type="button" class="btn btn-warning">Lihat KTP</a>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">

    </div>
    <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>

@endsection