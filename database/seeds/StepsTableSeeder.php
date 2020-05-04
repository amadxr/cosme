<?php

use Illuminate\Database\Seeder;

class StepsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('steps')->insert([
            [
                'text' => 'Que tipo de web necesitas?',
                'multiple_select' => false,
                'order' => 0

            ],
            [
                'text' => 'Que secciones seran incluidas?',
                'multiple_select' => true,
                'order' => 1
            ],
            [
                'text' => 'Que servicios adicionales quieres agregar?',
                'multiple_select' => false,
                'order' => 3
            ]
        ]);
    }
}
