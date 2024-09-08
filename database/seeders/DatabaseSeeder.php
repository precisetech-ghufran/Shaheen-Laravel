<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

$this->call(CountriesTableSeeder::class);
$this->call(PartnerSeeder::class);

        // // Create the Super Admin role if it doesn't exist
        // $superAdminRole = Role::firstOrCreate(['name' => 'Super Admin']);

        // // Create all permissions if they don't exist and assign them to the Super Admin role
        // $permissions = Permission::all();
        // foreach ($permissions as $permission) {
        //     $superAdminRole->givePermissionTo($permission);
        // }

        // // Create the Super Admin user if they don't exist
        // $superAdmin = User::firstOrCreate(
        //     ['email' => 'superadmin@example.com'],
        //     [
        //         'name' => 'Super Admin',
        //         'password' => Hash::make('12345678'), // Change this to a secure password
        //     ]
        // );

        // // Assign the Super Admin role to the user
        // $superAdmin->assignRole($superAdminRole);
    }
}
