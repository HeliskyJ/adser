<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicio = [
            [
                'code' => '2019001',
                'name' => 'Limpieza',
                'price' => '50.00',
            ],

            [
                'code' => '2019002',
                'name' => 'Detergentes',
                'price' => '10.00',
            ],

            [
                'code' => '2019003',
                'name' => 'Planchado',
                'price' => '15.00',
            ],

            [
                'code' => '2019004',
                'name' => 'Niñera',
                'price' => '30.00',
            ],
        ];
        DB::table('services')->insert($servicio);
    }
}
