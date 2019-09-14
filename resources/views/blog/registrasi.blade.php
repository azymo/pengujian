@extends('layouts.master')

@section('title', 'Partisipan')

@section('content')
  <h2>Pendaftaran</h2>

  <p>
    Silakan isi data diri anda.
  </p>

  <form class="" action="/registrasi/save" method="post">

    <!-- ini format post data dari laravel -->
    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <div class="">
      <h5>Nama : </h5>
      <input type="text" name="nama" required>
    </div>
    <div class="">
      <h5>Email : </h5>
      <input type="email" name="email" required>
    </div>
    <div class="">
      <h5>Telepon : </h5>
      <input type="text" name="tlp" required>
    </div>
    <div class="">
      <button type="submit">Daftar</button>
    </div>
    
  </form>

@endsection
