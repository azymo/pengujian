@extends('parking.layouts3.master')

@section('title', 'Gerbang Keluar')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container">
    <h1 class="m-0 text-dark" style="text-align: center;">Gerbang Keluar</h1>
    <div class="row mb-2">
      {{-- <div class="col-sm-6">
      </div> --}}
      <!-- /.col -->

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
      @include('parking.pages.asistbutton')

      <!-- /.col-md-tengah -->
      <div class="col-lg-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">{{date ('d-F-Y')}}</h3>
            <h3 class="card-title float-right">{{date ('H:i:s')}}</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="/parking/keluar/cek" method="post">
            <!-- ini format post data dari laravel -->
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Masukkan Barcode</label>
                <input type="text" name="barcode" class="form-control" id="exampleInputText" required>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-block btn-primary float-right btn-lg">Submit</button>
            </div>
            {{-- /.footer --}}

          </form>
        </div>
        <!-- /.card -->


      </div>
      <!-- /.col-md-6-tengah -->

      <!-- /.col-md-tengah -->
      <div class="col-lg-3">
        {{-- warning card --}}
        <div class="card card-outline card-warning">
          <div class="card-header">
            <h3 class="card-title">Tidak ada Ticket?</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <a href="#" type="button" class="btn btn-block btn-warning btn-xs">STNK</a>
              </div>
              <div class="col-6">
                <a href="#" type="button" class="btn btn-block btn-warning btn-xs">SIM/KTP</a>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        {{-- /warning card --}}
      </div>
      <!-- /.col-md-tengah -->

    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

@endsection
