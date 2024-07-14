<?php

namespace Database\Seeders;

use App\Models\Contacts;
use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Contacts::factory()->create();
        // Ensure you have enough users in the database before running this seeder.
$users = DB::table('users')->pluck('id'); // Retrieve all user IDs

// Define the contacts data with placeholders for user_id
// $tmpArr = [
//     [
//         'village' => 'Kashipur',
//         'thana' => 'Kashipur',
//         'city' => 'Kashipur',
//         'district' => 'Kashipur',
//         'user_id' => '',
//     ],
//     [
//         'village' => 'Kashipur',
//         'thana' => 'Kashipur',
//         'city' => 'Kashipur',
//         'district' => 'Kashipur',
//         'user_id' => '',
//     ],
//     [
//         'village' => 'Kashipur',
//         'thana' => 'Kashipur',
//         'city' => 'Kashipur',
//         'district' => 'Kashipur',
//         'user_id' => '',
//     ],
//     [
//         'village' => 'Kashipur',
//         'thana' => 'Kashipur',
//         'city' => 'Kashipur',
//         'district' => 'Kashipur',
//         'user_id' => '',
//     ],
//     [
//         'village' => 'Kashipur',
//         'thana' => 'Kashipur',
//         'city' => 'Kashipur',
//         'district' => 'Kashipur',
//         'user_id' => '',
//     ],
// ];

$tmpArr = Contacts::factory()->count(10)->make()->toArray();

// Ensure there are enough users to assign
if (count($users) < count($tmpArr)) {
    throw new Exception("Not enough users to assign to contacts");
}

// Assign user IDs to contacts
for ($i = 0; $i < count($tmpArr); $i++) {
    $tmpArr[$i]['user_id'] = $users[$i];
}

// Create contacts using the factory
collect($tmpArr)->each(function ($contact) {
    Contacts::create($contact);
});

    }
}
