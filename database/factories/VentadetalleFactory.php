<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\VentaDetalle;
use App\Models\Venta;
use App\Models\Producto;

class VentadetalleFactory extends Factory
{
    protected $model = VentaDetalle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        'cantidad'=>$this->faker->randomDigit,
        'producto_id'=>Producto::all()->random()->id,
        'venta_id'=>Venta::all()->random()->id,
        ];
    }
}
