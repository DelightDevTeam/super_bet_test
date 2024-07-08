<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('settings')->insert([
            'group' => 'app',
            'name' => 'provider_initial_balance',
            'payload' => '436459',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
