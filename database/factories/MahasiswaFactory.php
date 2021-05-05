<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mahasiswa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'Nim'=>$this->faker->numerify('##########'),
            'Nama'=>$this->faker->name,
            'Kelas_id' => rand(1,8),
            'Jurusan' => $this->faker->country,
            'No_Handphone'=>$this->faker->phoneNumber,
            'Email' => $this->faker->unique()->safeEmail,
            'Tanggal_Lahir' => $this->faker->date('Y_m_d'),
        ];
    }
}
