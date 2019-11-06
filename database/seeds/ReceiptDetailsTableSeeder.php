<?php

use Illuminate\Database\Seeder;

class ReceiptDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detalle = [
            [
                'receipt_id' => '1',
                'service_id' => '1',
                'duration' => '2',
                'price' => '50.00',
                'total' => '100.00',
                'address' => 'Colinas verdes, guayabon'

            ],

            [
                'receipt_id' => '1',
                'service_id' => '2',
                'duration' => '1',
                'price' => '10.00',
                'total' => '10.00',
                'address' => 'Colinas verdes, guayabon'

            ],

            [
                'receipt_id' => '2',
                'service_id' => '1',
                'duration' => '2',
                'price' => '50.00',
                'total' => '100.00',
                'address' => 'Colinas verdes'

            ],
        ];
        DB::table('receipt_details')->insert($detalle);
    }
}
