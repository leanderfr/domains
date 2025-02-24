<?php

namespace Database\Seeders;

use App\Models\Domains;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Hosts;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User 1111',
            'email' => 'test@example.com',
        ]);

        Hosts::factory()->create([
            'id' => 1,
            'name' => 'KingHost',
            'active' => true,
        ]);


        Domains::factory()->create([
            'domain' => 'leanderdeveloper.store',
            'expiration_date' => Carbon::parse('2029-04-30'),
            'active' => true,
            'host_id' => 1,
        ]);

    }
}
