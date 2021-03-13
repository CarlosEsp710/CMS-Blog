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
        \App\Models\User::factory(29)->create();
        \App\Models\User::factory()->create([
            'name' => 'Carlos Espejel',
            'email' => 'c@admin.com',
            'password' => bcrypt('12345678')
        ]);
        $this->call(CategorySeeder::class);
        $this->call(TagSeeder::class);
        $this->call(PostSeeder::class);
    }
}
