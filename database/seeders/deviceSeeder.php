<?php

namespace Database\Seeders;

use App\Models\device;
use Illuminate\Database\Seeder;

class deviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        device::factory()->times(10)->create();
    }
}
