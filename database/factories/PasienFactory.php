<?php

namespace Database\Factories;

// use App\Models\Pasien;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PasienFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  // protected $model = Pasien::class;

  public function definition()
  {
    $genderRaw = $this->faker->randomElement(['Laki-laki', 'Perempuan']);
    $gender = $genderRaw == 'Laki-laki' ? 'male' : 'female';
    $interval = $this->faker->dateTimeBetween('-50 years', '-2 years');

    return [
      'nama' => $this->faker->firstName($gender) . ' ' . $this->faker->lastName($gender),
      'jenis_kelamin' => $genderRaw,
      'tempat_lahir' => $this->faker->city(),
      'tanggal_lahir' => Carbon::create($interval)->isoFormat('DD MMMM YYYY'),
      'alamat' => $this->faker->address(),
    ];
  }
}
