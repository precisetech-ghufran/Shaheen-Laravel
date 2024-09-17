<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StoreStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert store statuses into the store_statuses table
        DB::table('store_statuses')->insert([
            ['store_status' => 'Proposed Site'],
            ['store_status' => 'Lease Process'],
            ['store_status' => 'Construction'],
            ['store_status' => 'OPEN FOR BUSINESS'],
            ['store_status' => 'Project Withdrawn'],
            ['store_status' => 'Sold'],
        ]);
    }
}
