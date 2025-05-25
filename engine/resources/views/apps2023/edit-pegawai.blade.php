@extends('apps2023.master')

@section('title')
    AdminLTE | Dashboard
@endsection

@method('GET')

@section('konten')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Pegawai</h1>
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
                <h3 class="card-title">Edit Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form enctype="multipart/form-data" action="{{ route('pegawai.update', $pegawai->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $pegawai->nama }}" placeholder="" required>
                    <label for="exampleInputEmail1">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" value="{{ $pegawai->nik }}" placeholder="" required>
                    
                    <label for="jenis_pegawai">Jenis Pegawai</label>
                    <select class="form-control" id="jenispegawai" name="jenispegawai" required>
                        <option value="">Pilih opsi</option>
                        @foreach($jenispegawais as $jenispegawai)
                            <option value="{{ $jenispegawai->id }}" {{ $jenispegawai->id == $pegawai->jenispegawai ? 'selected' : '' }}>
                                {{ $jenispegawai->nama_jenispegawai }}
                            </option>
                        @endforeach
                    </select>

                    <label for="exampleInputEmail1">Status Pegawai</label>
                    <select class="form-control" id="statuspegawai" name="statuspegawai" required>
                        <option value="">Pilih opsi</option>
                        @foreach($statuspegawais as $statuspegawai)
                            <option value="{{ $statuspegawai->id }}" {{ $statuspegawai->id == $pegawai->statuspegawai ? 'selected' : '' }}>
                                {{ $statuspegawai->nama_statuspegawai }}
                            </option>
                        @endforeach
                    </select>
                    <label for="exampleInputEmail1">Unit</label>
                    <input type="text" class="form-control" id="unit" name="unit" value="{{ $pegawai->unit }}" placeholder="" required>
                    <label for="exampleInputEmail1">Sub Unit</label>
                    <input type="text" class="form-control" id="sub_unit" name="sub_unit" value="{{ $pegawai->sub_unit }}" placeholder="" required>
                    <label for="exampleInputEmail1">Pendidikan</label>
                    <select class="form-control" id="pendidikan" name="pendidikan" required>
                        <option value="">Pilih opsi</option>
                        @foreach($pendidikans as $pendidikan)
                            <option value="{{ $pendidikan->id }}" {{ $pendidikan->id == $pegawai->pendidikan ? 'selected' : '' }}>
                                {{ $pendidikan->nama_pendidikan }}
                            </option>
                        @endforeach
                    </select>
                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $pegawai->tgl_lahir }}" placeholder="" required>
                    <label for="exampleInputEmail1">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir" value="{{ $pegawai->tmpt_lahir }}" placeholder="" required>
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                    <select class="form-control" id="jeniskelamin" name="jeniskelamin" required>
                        <option value="">Pilih opsi</option>
                        @foreach($jeniskelamins as $jeniskelamin)
                            <option value="{{ $jeniskelamin->id }}" {{ $jeniskelamin->id == $pegawai->jeniskelamin ? 'selected' : '' }}>
                                {{ $jeniskelamin->nama_jeniskelamin }}
                            </option>
                        @endforeach
                    </select>
                    <label for="agama">Agama</label>
                    <select class="form-control" id="agama" name="agama" required>
                        <option value="">Pilih opsi</option>
                        @foreach($agamas as $agama)
                            <option value="{{ $agama->id }}" {{ $agama->id == $pegawai->agama ? 'selected' : '' }}>
                                {{ $agama->nama_agama }}
                            </option>
                        @endforeach
                    </select>
                    <div class="form-group">
                                                            <label for="gambar_sebelum">Gambar Sebelum Diedit</label>
                                                            <img src="{{ url('upload/' . $pegawai->gambar) }}" alt="Gambar Sebelum Diedit" width="100">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="gambar_baru">Gambar Baru</label>
                                                            <input type="file" name="gambar" id="gambar" class="form-control">
                                                        </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
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
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
@endpush

@push('additional-js')
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endpush