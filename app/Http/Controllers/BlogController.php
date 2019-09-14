<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class BlogController extends Controller
{
    // halaman depan
    public function home (){
      $jmluser = DB::table('user')
        ->count();

      return view ('pages/home', ['juser' => $jmluser]);
    }

    // halaman partisipan
    public function partisipan (){
      $users   = DB::table('user')
        ->select('username')
        ->get();

      return view ('pages/partisipan',['parameter' => $users]);
    }

    // halaman registrasi
    public function regist (){
      return view ('blog/registrasi');
    }

    // input - menyimpan registrasi
    public function save (Request $tangkapan)
    {
      // memecah data yang ditangkap
      $nama = $tangkapan->input('nama');
      $email = $tangkapan->input('mail');
      $phone = $tangkapan->input('tlp');

      // memasukkan data pada database
      $insert = DB::table('user')
        ->insert([
          'username'  => $nama,
          'usermail'  => $email,
          'userphone' => $phone
        ]);

      // mengambil kembali data-data
      $users   = DB::table('user')
        ->select('username')
        ->get();

      return view ('blog/partisipan',['parameter' => $users]);
    }

    // latihan menampilkan halaman
    public function index (){
      return view ('blog/beranda');
    }

    // latihan passing data
    public function show ($id){
      $nilai = 'nilai : '.$id;
      return view ('blog/single', ['parameter' => $nilai]);
    }

    // latihan membuat layout
    public function layout (){
      return view ('blog/layout');
    }

}
