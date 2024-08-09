<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListingsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('listings')->insert([
            [
                'title' => 'Sample Listing 1',
                'company' => 'Creoshift',
                'location' => 'Location A',
                'website' => 'http://example.com',
                'email' => 'contact@example.com',
                'tags' => 'tag1, tag2',
                'description' => 'Description for Sample Listing 1',
                'user_id' => 1, // Ensure this user_id exists in your users table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more sample records if needed
        ]);
    }
}

