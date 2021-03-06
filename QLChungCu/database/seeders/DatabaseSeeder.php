<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this-> call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
