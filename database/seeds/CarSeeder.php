<?php

use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars') -> insert([
            'znacka' => "Volkswagen",
            'typ' => "combi",
            'spz' => "5A9RFF",
            'farba' => "cervena",
            'najazdene' => 20508,
        ]);
    }
}
