<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empleado = [
            [
                'fullname'     => 'Octavia Buro Gran',
                'cui'          => '8745125062001',
                'number_phone' => '45125898',
            ],

            [
                'fullname'     => 'Marta Estela Perez',
                'cui'          => '4512548741001',
                'number_phone' => '21546835',
            ],

            [
                'fullname'     => 'Ronaldo Daniel Méndez Molina',
                'cui'          => '3388255502007',
                'number_phone' => '59952142',
            ],
        ];
        DB::table('employees')->insert($empleado);
    }
}
