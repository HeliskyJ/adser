<?php

use Illuminate\Database\Seeder;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $horarios = [
            [
                'hour' => '8:30:00'
            ],

            [
                'hour' => '9:00:00'
            ],

            [
                'hour' => '9:30:00'
            ],

            [
                'hour' => '10:00:00'
            ],

            [
                'hour' => '10:30:00'
            ],

            [
                'hour' => '11:00:00'
            ],

            [
                'hour' => '11:30:00'
            ],

            [
                'hour' => '12:00:00'
            ],

            [
                'hour' => '1:00:00'
            ],

            [
                'hour' => '1:30:00'
            ],

            [
                'hour' => '2:00:00'
            ],

            [
                'hour' => '2:00:00'
            ],

            [
                'hour' => '2:30:00'
            ],

            [
                'hour' => '3:00:00'
            ],

            [
                'hour' => '3:30:00'
            ],

            [
                'hour' => '4:00:00'
            ],

            [
                'hour' => '4:30:00'
            ],
            [
                'hour' => '5:00:00'
            ],
        ];
        DB::table('schedules')->insert($horarios);
    }
}
