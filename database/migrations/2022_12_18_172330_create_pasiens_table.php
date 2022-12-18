<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('pasiens', function (Blueprint $table) {
      $table->id();
      $table->char('nama');
      $table->char('jenis_kelamin');
      $table->char('tempat_lahir');
      $table->char('tanggal_lahir');
      $table->char('alamat');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('pasiens');
  }
}
