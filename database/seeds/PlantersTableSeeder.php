<?php

use Illuminate\Database\Seeder;

class PlantersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('planters')->insert([
            'name' => 'Large Clay',
            'systemID' => 2,
            'comments' => 'Large clay pot with pokadots',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('planters')->insert([
            'name' => 'Hanging Basket',
            'systemID' => 2,
            'comments' => 'Hanging basket holds small flowers',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
