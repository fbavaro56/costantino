<?php

use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'workshop_id' => 1,
            'quotas' => 10,
            'title' => 'Catalan Tapas',
            'title_es' => 'Tapas Catalanas',
            'price' => 100,
            'children_price' => 50,
            'class_lang' => 'en',
            'start' => '09:00:00',
            'end' => '11:00:00',
            'day_of_week' => 2,
        ]);

        DB::table('courses')->insert([
            'workshop_id' => 1,
            'quotas' => 10,
            'title' => 'Catalan Tapas',
            'title_es' => 'Tapas Catalanas',
            'price' => 100,
            'children_price' => 50,
            'class_lang' => 'en',
            'start' => '09:00:00',
            'end' => '11:00:00',
            'day_of_week' => 4,
        ]);



        DB::table('courses')->insert([
            'workshop_id' => 1,
            'quotas' => 5,
            'title' => 'Classic Tapas',
            'title_es' => 'Tapas Clasicas',
            'price' => 50,
            'children_price' => 25,
            'class_lang' => 'en',
            'start' => '16:00:00',
            'end' => '18:00:00',
            'day_of_week' => 1,
        ]);

        DB::table('courses')->insert([
            'workshop_id' => 1,
            'quotas' => 5,
            'title' => 'Classic Tapas',
            'title_es' => 'Tapas Clasicas',
            'price' => 50,
            'children_price' => 25,
            'class_lang' => 'en',
            'start' => '16:00:00',
            'end' => '18:00:00',
            'day_of_week' => 3,
        ]);





        DB::table('courses')->insert([
            'workshop_id' => 1,
            'quotas' => 7,
            'title' => 'Spanish Cooking',
            'title_es' => 'Cocina Española',
            'price' => 75,
            'children_price' => 25,
            'class_lang' => 'en',
            'start' => '12:00:00',
            'end' => '14:00:00',
            'day_of_week' => 1,
        ]);

        DB::table('courses')->insert([
            'workshop_id' => 1,
            'quotas' => 7,
            'title' => 'Spanish Cooking',
            'title_es' => 'Cocina Española',
            'price' => 75,
            'children_price' => 25,
            'class_lang' => 'en',
            'start' => '12:00:00',
            'end' => '14:00:00',
            'day_of_week' => 3,
        ]);

        DB::table('courses')->insert([
            'workshop_id' => 1,
            'quotas' => 7,
            'title' => 'Spanish Cooking',
            'title_es' => 'Cocina Española',
            'price' => 75,
            'children_price' => 25,
            'class_lang' => 'en',
            'start' => '12:00:00',
            'end' => '14:00:00',
            'day_of_week' => 4,
        ]);




        DB::table('courses')->insert([
            'workshop_id' => 2,
            'quotas' => 10,
            'title' => 'Classic Pastry',
            'title_es' => 'Pastelería Clasica',
            'price' => 150,
            'children_price' => 100,
            'class_lang' => 'es',
            'start' => '09:00:00',
            'end' => '12:00:00',
            'day_of_week' => 5,
        ]);



        DB::table('courses')->insert([
            'workshop_id' => 2,
            'quotas' => 10,
            'title' => 'Classic Pastry',
            'title_es' => 'Pastelería Clasica',
            'price' => 150,
            'children_price' => 100,
            'class_lang' => 'es',
            'start' => '14:00:00',
            'end' => '17:00:00',
            'day_of_week' => 6,
        ]);
    }
}
