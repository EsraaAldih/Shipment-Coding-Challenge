<?php

namespace Database\Seeders;

use App\Models\JournalTypes;
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
        // User::factory(10)->create();
        $this->call(JournalSeeder::class);
        $this->call(ShipmentSeeder::class);
        $this->call(JournalTypesSeeder::class);
    }
}
