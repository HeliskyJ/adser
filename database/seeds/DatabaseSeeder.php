<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(SchedulesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(ReceiptsTableSeeder::class);
        $this->call(ReceiptDetailsTableSeeder::class);


    }
}
