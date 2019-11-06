<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cliente = [
            [
                'fullname'     => 'Maria Eugenia Sandoval',
                'cui'          => '5415879852007',
                'number_phone' => '42037548',
                'address'      => 'Colinas verdes, guayabon',
            ],

            [
                'fullname'     => 'Carl Gustav Yo',
                'cui'          => '5415858742007',
                'number_phone' => '42037587',
                'address'      => 'Prados Ligeros',
            ],

            [
                'fullname'     => 'Merlina Oriunda Paz',
                'cui'          => '8545879852007',
                'number_phone' => '42874512',
                'address'      => 'Franca La Peo',
            ],

            [
                'fullname'     => 'Ros Pae Mun',
                'cui'          => '8745125982007',
                'number_phone' => '79435214',
                'address'      => 'Colinas de Santa Lucia, fase II zona03',
            ],
        ];

        DB::table('customers')->insert($cliente);
    }
}
