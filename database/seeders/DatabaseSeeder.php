<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('images');
        Storage::makeDirectory('images');
        \App\Models\Post::factory(100)->create();
    }
}
