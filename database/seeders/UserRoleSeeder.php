<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = DB::table('users')->pluck('id'); 
        
        // Pluck role IDs
        $roles = DB::table('roles')->pluck('id');

        // Assign roles to users
        foreach ($users as $user_id) {
            // Assign each user a random role
            UserRole::create([
                'user_id' => $user_id,
                'role_id' => $roles->random(),
            ]);
        }
    }
}
