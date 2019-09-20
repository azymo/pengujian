<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Parking Ticket</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{url('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('adminlte/dist/css/adminlte.min.css')}}">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body onload="window.print();">
  <div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-3 invoice-col">
          <div style="text-align: center;">
          @foreach($parameter as $data)
            <br>
            <h3>
              <i class="fas fa-car"></i> My Parking
            </h3>
            <hr>
            PARKING TICKET
            <strong><h3>{{date('H:i', strtotime( $data ->trans_entrance_time ))}}</h3></strong>
            {{date('d M Y', strtotime( $data ->trans_entrance_time ))}}<br>
            <a href="/parking/masuk">
              <img src="https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl=
                {{ $data ->trans_barcode }}
              &choe=UTF-8"/>
            </a><br>
            {{ $data ->trans_barcode }}
            <hr>
            DO NOT MISS THIS TICKET!!!
          @endforeach
          </div>
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- ./wrapper -->
</body>
</html>
