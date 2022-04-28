<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Company::factory(1)->create();
        $this->call([
            \Database\Seeders\ProvinceSeeder::class,
            \Database\Seeders\RegionSeeder::class,
	]);

      \App\Models\User::factory(1)->create();
    }
}
