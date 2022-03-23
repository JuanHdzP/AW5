<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VentaDetalle;


class VentasdetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        VentaDetalle::factory()->count(25)->create();
    }
}
