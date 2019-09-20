<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ParkingController extends Controller
{
  // halaman depan
  public function home (){
    // format waktu Indonesia
    date_default_timezone_set('Asia/Jakarta');
    return view ('parking/pages/home');
  }

  // Gerbang Masuk
  public function showmasuk (){
    // format waktu Indonesia
    date_default_timezone_set('Asia/Jakarta');
    return view ('parking/pages/G-masuk');
  }

  public function savemasuk (Request $tangkapan)
  {
    // format waktu Indonesia
    date_default_timezone_set('Asia/Jakarta');

    // memecah data yang ditangkap
    $nopol      = $tangkapan->input('nopol');

    // cek barcode tertinggi
    $barcode   = DB::table('transportasi')->max('trans_barcode');
    $noUrut = (int) substr($barcode, 3, 3);
    $noUrut++;
    $barcode = "MP" . sprintf("%04s", $noUrut);

    // memasukkan waktu sekarang
    $entertime  = date('Y-m-d H:i:s');

    // keterangan masuk
    $keterangan = "Entrance";

    // memasukkan data pada database
    $insert = DB::table('transportasi')->insert([
      'trans_barcode'       => $barcode,
      'trans_nopol'         => $nopol,
      'trans_entrance_time' => $entertime,
      'trans_ket'           => $keterangan
    ]);

    // ambil data dari database
    $data = DB::table('transportasi')
    ->where('trans_barcode', $barcode)
    ->get();

    return view ('parking/pages/print-masuk', ['parameter' => $data]);
  }

  public function cekkeluar (Request $tangkapan)
  {
    // format waktu Indonesia
    date_default_timezone_set('Asia/Jakarta');

    // memecah data yang ditangkap
    $barcode      = $tangkapan->input('barcode');

    // mengambil data
    $data   = DB::table('transportasi')
      ->where('trans_barcode', $barcode)
      ->get();
      // dd ($data);

    return view ('parking/pages/cekkeluar', ['parameter' => $data]);
  }

}
