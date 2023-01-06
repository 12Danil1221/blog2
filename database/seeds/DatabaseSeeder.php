<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dorogi;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */


    public function run()
    {
        Category::factory(1)->create();
        $dorogis = Dorogi::factory(10)->create();
    }
}
