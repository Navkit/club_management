<?php

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
        // Insert new admin user
        DB::table('users')->insert([
            'name' => 'new_admin',  // Replace with your admin username
            'password' => bcrypt('new_admin_password'),  // Replace with your admin password
            'type' => 'admin',  // Admin type
        ]);
    
        // Insert new regular user
        DB::table('users')->insert([
            'name' => 'new_user',  // Replace with your regular user username
            'password' => bcrypt('new_user_password'),  // Replace with your regular user password
            'type' => 'user',  // Regular user type
        ]);
    }
}
