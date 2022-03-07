<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Roles;
//use App\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();
        //DB::table('admin_roles')->truncate();
        $adminRoles=Roles::where('Name','admin')->first();
        $authorRoles=Roles::where('Name','author')->first();
        $userRoles=Roles::where('Name','user')->first();
        
        $admin=Admin::create(
            [
                'admin_name'=>'hoang',
                'admin_email'=>'hoang@gmail.com',
                'admin_password'=>'123456'
            ]);
        $author=Admin::create(
            [
                'admin_name'=>'hoang123',
                'admin_email'=>'hoang123@gmail.com',
                'admin_password'=>'123456'
            ]);
        $user=Admin::create(
            [
                'admin_name'=>'hoang456',
                'admin_email'=>'hoang456@gmail.com',
                'admin_password'=>'123456'
            ]);
        $admin->Roles()->attach($adminRoles);
        $author->Roles()->attach($authorRoles);
        $user->Roles()->attach($userRoles);
        
    }
}
