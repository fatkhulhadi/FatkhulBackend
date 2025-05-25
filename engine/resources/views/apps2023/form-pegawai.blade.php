@extends('apps2023.master')

@section('title')
    AdminLTE 3 | Dashboard 2
@endsection

@section('konten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form enctype="multipart/form-data" id="quickForm" novalidate="novalidate" method="POST"  action="{{ route('pegawai.store') }}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama" REQUIRED>
                    <label for="exampleInputEmail1">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" placeholder="" REQUIRED>
                    <label for="exampleInputEmail1">Jenis Pegawai</label>
                    <select class="form-control" id="jenispegawai" name="jenispegawai" placeholder="Enter Jenis Pegawai" REQUIRED">
                        <option value="">Pilih opsi</option>        
                        @foreach($jenispegawai as $jenispegawai)
                        <option value="{{ $jenispegawai->id }}">{{ $jenispegawai->nama_jenispegawai }}</option>
                        @endforeach
                    </select>
                    <label for="exampleInputEmail1">Status Pegawai</label>
                    <select class="form-control" id="statuspegawai" name="statuspegawai" placeholder="Enter Status Pegawai" REQUIRED">
                        <option value="">Pilih opsi</option>        
                        @foreach($statuspegawai as $statuspegawai)
                        <option value="{{ $statuspegawai->id }}">{{ $statuspegawai->nama_statuspegawai }}</option>
                        @endforeach
                    </select>
                    <label for="exampleInputEmail1">Unit</label>
                    <input type="text" class="form-control" id="unit" name="unit" placeholder="" REQUIRED>
                    <label for="exampleInputEmail1">Sub Unit</label>
                    <input type="text" class="form-control" id="sub_unit" name="sub_unit" placeholder="" REQUIRED>
                    <label for="exampleInputEmail1">Pendidikan</label>
                    <select class="form-control" id="pendidikan" name="pendidikan" placeholder="Enter Pendidikan Pegawai" REQUIRED">
                        <option value="">Pilih opsi</option>        
                        @foreach($pendidikan as $pendidikan)
                        <option value="{{ $pendidikan->id }}">{{ $pendidikan->nama_pendidikan }}</option>
                        @endforeach
                    </select>
                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="" REQUIRED>
                    <label for="exampleInputEmail1">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir" placeholder="" REQUIRED>
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                    <select class="form-control" id="jeniskelamin" name="jeniskelamin" placeholder="Enter Jenis Kelamin" REQUIRED">
                        <option value="">Pilih opsi</option>        
                        @foreach($jeniskelamin as $jeniskelamin)
                        <option value="{{ $jeniskelamin->id }}">{{ $jeniskelamin->nama_jeniskelamin }}</option>
                        @endforeach
                    </select>
                    <label for="exampleInputEmail1">Agama</label>
                    <select class="form-control" id="agama" name="agama" placeholder="" REQUIRED">
                        <option value="">Pilih opsi</option>        
                        @foreach($agama as $agama)
                        <option value="{{ $agama->id }}">{{ $agama->nama_agama }}</option>
                        @endforeach
                    </select>
                    <div class="form-group">
                      <label for="gambar">Upload KTP</label>
                      <input type="file" class="form-control" id="gambar" name="gambar">
                      @error('gambar')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>
                    
                    

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@push('additional-css')
 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
@endpush

@push('additional-js')
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
@endpush