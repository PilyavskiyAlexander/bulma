<?php

use Illuminate\Database\Seeder;

class UnitTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unit_types')->insert([

            [
                'name' => 'pcs',
            ],
            [
                'name' => 'meter',
            ],
            [
                'name' => 'litre',
            ],
            [
                'name' => 'kilogram',
            ],
            [
                'name' => 'square_meter',
            ],
            [
                'name' => 'cube_meter',
            ],
            [
                'name' => 'tube',
            ],
        ]);
    }
}
