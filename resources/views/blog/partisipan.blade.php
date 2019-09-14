@extends('layouts.master')

@section('title', 'Partisipan')

@section('content')
  <h1>PARTISIPAN</h1>

  <p>
    Berikut nama-nama yang sudah mendaftarkan diri untuk berpartisipasi.
  </p>

  @foreach($parameter as $userx)
    <li>{{ $userx ->username }}</li>
  @endforeach

@endsection
