<?php

use Illuminate\Database\Seeder;

class SoilsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('soils')->insert([
            'name' => 'clay',
            'systemID' => 2,
            'comments' => ' lots of tiny mineral particles',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('soils')->insert([
            'name' => 'silt',
            'systemID' => 2,
            'comments' => 'fertile and drain more effectively than clay',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
