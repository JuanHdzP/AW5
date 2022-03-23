<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeUser;


class TypeusersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        TypeUser::factory()->count(5)->create();
    }
}
