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

      <!-- /.col-md-kanan -->
      <div class="col-lg-7">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">{{date ('d-F-Y')}}</h3>
            <h3 class="card-title float-right">{{date ('H:i:s')}}</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <div class="card-body">
            <div class="form-group">
              @foreach ( $parameter as $data)

                {{-- start table --}}
                <table class="table">
                  <tbody>
                    <tr>
                      <td>Barcode</td>
                      <td> : </td>
                      <td>{{ $data ->trans_barcode }}</td>
                    </tr>
                    <tr>
                      <td>Plat Nomor</td>
                      <td> : </td>
                      <td>{{ $data ->trans_nopol }}</td>
                    </tr>
                    <tr>
                      <td>Lama Parkir</td>
                      <td> : </td>
                      <td>-</td>
                    </tr>
                    <tr>
                      <td>Biaya</td>
                      <td> : </td>
                      <td><b>Rp 0,-</b></td>
                    </tr>
                    <tr>
                      <td>Dibayarkan</td>
                      <td> : </td>
                      <td>
                        <input type="text" name="bayar" class="form-control" id="exampleInputText">
                      </td>
                    </tr>
                  </tbody>
                </table>
                {{-- end table --}}

              @endforeach
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-block btn-primary float-right btn-lg">Checkout</button>
          </div>
          {{-- /.footer --}}

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
