<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Illuminate\Database\Seeder;

class PenggunaTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Pengguna::create([
      'nama_pengguna' => 'admin',
      'kata_sandi' => bcrypt('kucoba'),
      'nama_lengkap' => 'Administrator',
    ]);
  }
}
