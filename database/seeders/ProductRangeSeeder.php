<?php

namespace Database\Seeders;

use App\Models\ProductRange;
use Illuminate\Database\Seeder;

class ProductRangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductRange::factory()
            ->count(10)
            ->create();
    }
}
