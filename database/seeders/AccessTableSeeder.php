<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class AccessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        $dev = User::where('email', 'admin@gmail.com')->first();

        if (empty($dev)) {
            $data = [
                [
                    'id'=>'1',
                    'name' => 'Admin',
                    'email' => 'admin@gmail.com',
                    'password' => bcrypt('12345678'),
                ],
                [
                    'id'=>'2',
                    'name' => 'Manager',
                    'email' => 'manager@gmail.com',
                    'password' => bcrypt('12345678'),
                ],
                [
                    'id'=>'3',
                    'name' => 'Nur',
                    'email' => 'nur@gmail.com',
                    'password' => bcrypt('12345678'),
                ],[
                    'id'=>'4',
                    'name' => 'Himel',
                    'email' => 'himel@gmail.com',
                    'password' => bcrypt('12345678'),
                ],
            ];
            \DB::table('users')->insert($data);
        }

        $dev = User::where('email', 'admin@gmail.com')->first();

        //data for roles table
        $data = [
            ['name' => 'Admin', 'guard_name' => 'web'],
            ['name' => 'Manager', 'guard_name' => 'web'],
            ['name' => 'Customer', 'guard_name' => 'web'],
        ];
        \DB::table('roles')->insert($data);


        //data for permissions table
        $data = [
            //Sidebar Permission
            ['name' => 'Dashboard', 'guard_name' => 'web'],
            ['name' => 'Manager', 'guard_name' => 'web'],
            ['name' => 'Customer', 'guard_name' => 'web'],
            ['name' => 'Users', 'guard_name' => 'web'],
            ['name' => 'Role', 'guard_name' => 'web'],
            ['name' => 'Setting', 'guard_name' => 'web'],

            //Managing Access(24)49
            ['name' => 'Manage Dashboard', 'guard_name' => 'web'],
            ['name' => 'Manage Manager', 'guard_name' => 'web'],
            ['name' => 'Manage Customer', 'guard_name' => 'web'],
            ['name' => 'Manage Users', 'guard_name' => 'web'],
            ['name' => 'Manage Role', 'guard_name' => 'web'],
            ['name' => 'Manage Setting', 'guard_name' => 'web'],

            //All Role
            ['name' => 'Role List', 'guard_name' => 'web'],
            ['name' => 'Role Create', 'guard_name' => 'web'],
            ['name' => 'Role Show', 'guard_name' => 'web'],
            ['name' => 'Role Edit', 'guard_name' => 'web'],
            ['name' => 'Role Delete', 'guard_name' => 'web'],

            //All User
            ['name' => 'User List', 'guard_name' => 'web'],
            ['name' => 'User Edit', 'guard_name' => 'web'],
            ['name' => 'User Delete', 'guard_name' => 'web'],
        ];

        \DB::table('permissions')->insert($data);

        //Data for role user pivot
        $data = [
            ['role_id' => 1, 'model_type' => 'App\Models\User', 'model_id' => $dev->id],
            ['role_id' => 2, 'model_type' => 'App\Models\User', 'model_id' => 2],
            ['role_id' => 3, 'model_type' => 'App\Models\User', 'model_id' => 3],
            ['role_id' => 3, 'model_type' => 'App\Models\User', 'model_id' => 4],
        ];
        \DB::table('model_has_roles')->insert($data);

        //Role has permissions for Provider Role
        /*$providerRole = [
            ['permission_id' => 1, 'role_id' => 3],
            ['permission_id' => 1, 'role_id' => 2],
            ['permission_id' => 4, 'role_id' => 3],
            ['permission_id' => 28, 'role_id' => 3],
            ['permission_id' => 101, 'role_id' => 3],
            ['permission_id' => 102, 'role_id' => 3],
            ['permission_id' => 103, 'role_id' => 3],
            ['permission_id' => 104, 'role_id' => 3],
        ];
        \DB::table('role_has_permissions')->insert($providerRole);*/

        //Data for role permission pivot
        $permissions = Permission::all();
        foreach ($permissions as $key => $value) {
            $data = [
                ['permission_id' => $value->id, 'role_id' => 1],
            ];
            \DB::table('role_has_permissions')->insert($data);
        }
    }
}
