<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Roles;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::truncate();//xoa tat ca csdl trong table roles
        Roles::create(['Name'=>'admin']);
        Roles::create(['Name'=>'author']);
        Roles::create(['Name'=>'user']);
    }
}
