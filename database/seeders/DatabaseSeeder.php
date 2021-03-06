<?php

namespace Database\Seeders;

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
            OrganisationSeeder::class,
            CustomerSeeder::class,
            AddressSeeder::class,
            ProductTypeSeeder::class,
            ProductRangeSeeder::class,
            ProductSeeder::class,
            OrderSeeder::class,
            OrderLineSeeder::class,
            ShipmentSeeder::class,
        ]);
    }
}
