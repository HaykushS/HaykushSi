<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        $permissions = ['admin' =>'view users','create users','edit users', 'delete users'];
       
        // foreach ($permissions as $permission) {
        //     Permission::create([]);
        // }
            
    }
}
