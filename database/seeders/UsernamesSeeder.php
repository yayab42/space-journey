<?php

namespace Database\Seeders;

use App\Models\Username;
use Illuminate\Database\Seeder;

class UsernamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Username::factory()
            ->count(10)
            ->create();
    }
}
