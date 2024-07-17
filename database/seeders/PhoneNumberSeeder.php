<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\PhoneNumber;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companyIds = Company::pluck('id')->toArray();

        // Create 30 phone numbers with existing companies
        foreach ($companyIds as $companyId) {
            PhoneNumber::factory()->count(10)->create(['company_id' => $companyId]);
        }
    }
}
