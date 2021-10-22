<?php

namespace Database\Seeders;

use App\Models\OrderLine;
use Illuminate\Database\Seeder;

class OrderLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderLine::factory()
            ->count(30)
            ->create();
    }
}
