<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Venta;


class VentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Venta::factory()->count(25)->create();

    }
}
