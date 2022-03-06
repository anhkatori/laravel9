<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_permission')->insert(['permission_id' => '1','role_id'=>'1' ]);
        DB::table('role_permission')->insert(['permission_id' => '2','role_id'=>'1' ]);
        DB::table('role_permission')->insert(['permission_id' => '3','role_id'=>'1' ]);
        DB::table('role_permission')->insert(['permission_id' => '1','role_id'=>'2' ]);
        DB::table('role_permission')->insert(['permission_id' => '3','role_id'=>'2' ]);
    }
}

