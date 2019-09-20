@extends('parking.layouts3.master')

@section('title', 'Gerbang Masuk')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container">
    <h1 class="m-0 text-dark" style="text-align: center;">Gerbang Masuk</h1>
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container">
    <div class="row">

      <!-- /.col-md-kiri -->
      @include('parking.pages.asistbutton')

      <!-- /.col-md-kanan -->
      <div class="col-lg-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">{{date ('d-F-Y')}}</h3>
            <h3 class="card-title float-right">{{date ('H:i:s')}}</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="/parking/masuk/save" method="post">
            <!-- ini format post data dari laravel -->
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Nomor Polisi</label>
                <input type="text" name="nopol" class="form-control" id="exampleInputText" required>
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
      <!-- /.col-md-6 -->

    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

@endsection
