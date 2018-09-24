<?php

use Illuminate\Database\Seeder;

class WorkshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workshops')->insert([
            'name' => 'Vegetarian Workshop',
            'name_es' => 'Taller Vegetariano',
        ]);

        DB::table('workshops')->insert([
            'name' => 'Pastry Workshop',
            'name_es' => 'Taller de Pastelería',
        ]);

    }
}
