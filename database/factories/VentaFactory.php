<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Venta;
use App\Models\User;

class VentaFactory extends Factory
{
    protected $model = Venta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        'fecha'=>$this->faker->dateTimeBetween('-1 week', '+1 week'),
        'total'=>$this->faker->randomDigit,
        'cliente_id'=>User::all()->random()->id,
        'empleado_id'=>User::all()->random()->id,
        ];
    }
}
