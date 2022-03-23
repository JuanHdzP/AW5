<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Producto;
use App\Models\Categoria;


class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre' => $this->faker->word,
            'precio' => $this->faker->randomDigit,
            'foto' => $this->faker->imageUrl($width=600,$height=300),
            'descripcion' => $this->faker->text(100),
            'categoria_id' =>Categoria::all()->random()->id,       
        ];
    }
}
