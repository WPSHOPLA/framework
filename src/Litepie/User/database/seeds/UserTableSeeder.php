<?php
namespace Litepie;

use DB;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'id'          => 1,
                'email'       => 'admin@lavalite.org',
                'password'    => bcrypt('superuser@lavalite'),
                'status'      => 'Active',
                'name'        => 'Administrator',
                'sex'         => 'Male',
                'dob'         => '2014-05-15',
                'api_token'   => str_random(60),
                'designation' => 'Super User',
                'web'         => 'http://litepie.org',
                'created_at'  => '2015-09-15',
            ],
            [
                'id'          => 2,
                'email'       => 'user@lavalite.org',
                'password'    => bcrypt('user@lavalite'),
                'status'      => 'Active',
                'name'        => 'Admin',
                'sex'         => 'Male',
                'dob'         => '20-05-15',
                'api_token'   => str_random(60),
                'designation' => 'Admin',
                'web'         => 'http://litepie.org',
                'created_at'  => '2015-09-15',
            ]
        ]);

        DB::table('menus')->insert([
            'parent_id'   => 2,
            'key'         => null,
            'url'         => 'user',
            'name'        => 'Dashborad',
            'description' => null,
            'icon'        => 'dashboard',
            'target'      => null,
            'order'       => 50,
            'status'      => 1,
        ]);

        $id = DB::table('menus')->insertGetId([
            'parent_id'   => 1,
            'key'         => null,
            'url'         => 'admin/user/user',
            'name'        => 'User',
            'role'        => '["superuser"]',
            'description' => null,
            'icon'        => 'fa fa-users',
            'target'      => null,
            'order'       => 1999,
            'status'      => 1,
        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => $id,
                'key'         => null,
                'url'         => 'admin/user/user',
                'name'        => 'Users',
                'description' => null,
                'icon'        => 'fa fa-user',
                'target'      => null,
                'order'       => 1200,
                'status'      => 1,
            ],
            [
                'parent_id'   => $id,
                'key'         => null,
                'url'         => 'admin/user/client',
                'name'        => 'Clients',
                'description' => null,
                'icon'        => 'fa fa-user',
                'target'      => null,
                'order'       => 1202,
                'status'      => 1,
            ]
        ]);
    }
}
