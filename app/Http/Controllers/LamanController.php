<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LamanController extends Controller
{
  public function beranda()
  {
    return view('welcome');
  }

  public function masukTampil()
  {
    return view('masuk');
  }

  public function masukProses(Request $request)
  {
    $validasi = $request->validate([
      'masuk_nama_pengguna' => 'required',
      'masuk_kata_sandi' => 'required',
    ]);

    $user = Pengguna::firstWhere('nama_pengguna', $validasi['masuk_nama_pengguna']);

    if ($user) {
      if (Hash::check($validasi['masuk_kata_sandi'], $user->kata_sandi)) {
        Auth::login($user);
        return redirect()->route('beranda');
      }
    }

    return redirect()->route('masuk.tampil')->with('pesanGagal', true);
  }
}
