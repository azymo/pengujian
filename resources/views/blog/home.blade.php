@extends('layouts.master')

@section('title', 'Komplingan')

@section('content')
  <h1>Selamat Datang</h1>

  <p>
    Komunitas kami terdapat beberapa kegiatan
    yang bersifat mengajak masyarakat untuk
    saling merawat dan menjaga lingkungan.
  </p>
  <p>
    Daftarkan diri anda,
    <a href="/registrasi">Di Sini.</a>
  </p>

  <h4>Sudah tercatat {{ $juser }} partisipan dalam kegiatan kami.</h4>
@endsection
