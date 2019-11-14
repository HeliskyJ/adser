<?php

use Illuminate\Database\Seeder;

class ReceiptsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $encabezado = [
            [
                'customer_id' => '1',
                'employee_id' => '2',
                'schedule_id' => '1',
                'date_service' => '2019-12-01',
                'service_end' => '10:30', 
            ],

            [
                'customer_id' => '2',
                'employee_id' => '1',
                'schedule_id' => '1',
                'date_service' => '2019-12-01',
                'service_end' => '10:30', 
            ],

            [
                'customer_id' => '3',
                'employee_id' => '3',
                'schedule_id' => '5',
                'date_service' => '2019-11-01',
                'service_end' => '12:00', 
            ],
        ];

        DB::table('receipts')->insert($encabezado);
    }
}
