<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert(['name' => 'profiles_all_view' ]);
        DB::table('permissions')->insert(['name' => 'profiles_all_del_edit' ]);
        
        DB::table('permissions')->insert(['name' => 'blogs_all_view' ]);

    }
}

