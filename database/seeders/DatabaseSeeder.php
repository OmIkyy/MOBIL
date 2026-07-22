<?php

namespace Database\Seeders;

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
        // Kode di bawah ini sudah saya aktifkan (tanda // dihapus)
        // Ini akan membuat 1 User untuk login
        
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}