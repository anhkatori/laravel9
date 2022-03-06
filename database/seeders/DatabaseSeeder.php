<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        for ($i = 0; $i < 10; $i++){
        $this->call([
            ProfilesSeeder::class
        ]); }
        $this->call([
            RolesSeeder::class
        ]);
        $this->call([
            PermissionsSeeder::class        ]);
        $this->call([
            UsersSeeder::class        ]);
        $this->call([
            RolePermissionSeeder::class        ]);

     }
}