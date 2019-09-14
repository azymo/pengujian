@extends('layouts2.master')

@section('title', 'Komplingan')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Partisipan</h1>
      </div><!-- /.col -->

      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
        </ol>
      </div><!-- /.col -->

    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container">
    <div class="row">

      <!-- /.col-md-kiri -->
      <div class="col-lg-7">
        <!-- /.card -->
        <div class="card">
          <div class="card-body">
            <h5><b>Tempat gambar</b></h5>
          </div>
        </div>
      </div>

      <!-- /.col-md-kanan -->
      <div class="col-lg-5">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title m-0">Tentang Kami</h5>
          </div>
          <div class="card-body">
            <p>
              Berikut nama-nama yang sudah mendaftarkan diri untuk berpartisipasi.
            </p>
            @foreach($parameter as $userx)
              <li>{{ $userx ->username }}</li>
            @endforeach
            <a href="#" class="btn btn-primary">Daftar</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-6 -->

    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

@endsection
