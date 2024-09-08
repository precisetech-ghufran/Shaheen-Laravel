<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Partner;

class PartnerSeeder extends Seeder
{
    public function run()
    {
        // Seed example partners
        Partner::create([
            'partner_name' => 'John Doe',
            'partner_address' => '123 Main St',
            'country_id' => 1, // Assuming you have a country with id 1
            'state_id' => 1,   // Assuming you have a state with id 1
            'city_id' => 1,    // Assuming you have a city with id 1
            'zip_code' => '12345',
       
            'partner_contact_no' => '1234567890',
            'partner_ss_number' => '123-45-6789',
            'driver_license_number' => 'D1234567',
            'partner_email' => 'johndoe@example.com',
            'partner_nick_name' => 'Johnny',
            'partner_primary_phone' => '1234567890',
            'partner_secondary_phone' => '0987654321',
            'notes' => 'Sample notes for John Doe.',
            'image' => 'default.jpg', // Set a default image or NULL
        ]);

        Partner::create([
            'partner_name' => 'Jane Smith',
            'partner_address' => '456 Elm St',
            'country_id' => 1,
            'state_id' => 2,
            'city_id' => 2,
            'zip_code' => '54321',
       
            'partner_contact_no' => '0987654321',
            'partner_ss_number' => '987-65-4321',
            'driver_license_number' => 'S9876543',
            'partner_email' => 'janesmith@example.com',
            'partner_nick_name' => 'Janey',
            'partner_primary_phone' => '0987654321',
            'partner_secondary_phone' => '1234567890',
            'notes' => 'Sample notes for Jane Smith.',
            'image' => 'default.jpg',
        ]);
    }
}
