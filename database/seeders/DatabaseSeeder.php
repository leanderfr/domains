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

        Hosts::factory()->create([
            'id' => 2,
            'name' => 'Hostinger',
            'active' => true,
        ]);

        Hosts::factory()->create([
            'id' => 3,
            'name' => 'Google Inc.',
            'active' => true,
        ]);

        Hosts::factory()->create([
            'id' => 4,
            'name' => 'Host Gator',
            'active' => true,
        ]);

        Hosts::factory()->create([
            'id' => 5,
            'name' => 'SiteGround.com',
            'active' => true,
        ]);



        Domains::factory()->create([
            'domain' => 'https://leanderdeveloper.store/',
            'expiration_date' => Carbon::parse('2029-04-20'),
            'active' => true,
            'host_id' => 1,
        ]);

        Domains::factory()->create([
            'domain' => 'https://buscacuritiba.com.br/',
            'expiration_date' => Carbon::parse('2026-09-15'),
            'active' => true,
            'host_id' => 2,
        ]);

        Domains::factory()->create([
            'domain' => 'https://www.youtube.com/',
            'expiration_date' => Carbon::parse('2035-03-10'),
            'active' => true,
            'host_id' => 3,
        ]);

        Domains::factory()->create([
            'domain' => 'https://globo.com/',
            'expiration_date' => Carbon::parse('2030-06-12'),
            'active' => true,
            'host_id' => 5,
        ]);

        Domains::factory()->create([
            'domain' => 'https://facebook.com/',
            'expiration_date' => Carbon::parse('2032-02-30'),
            'active' => true,
            'host_id' => 4,
        ]);

        Domains::factory()->create([
            'domain' => 'https://caixa.gov.br/',
            'expiration_date' => Carbon::parse('2028-08-21'),
            'active' => true,
            'host_id' => 2,
        ]);








    }
}
