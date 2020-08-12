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
        $this->call([
        	RoleSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            StatusSeeder::class,
            PaymentModeSeeder::class,
            UserSeeder::class



        ]);
    }
}
