<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert(['meno' => 'Jozef', 'priezvisko' => 'Kapusta', 'heslo' => '1234', 'vek' => 93, 
																	'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
    }
}
