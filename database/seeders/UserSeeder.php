<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Carlos Abrisqueta',
            'email' => 'carlos@test.com',
            'password' => bcrypt('123')
        ]);

        User::factory()->create([
            'name' => 'adrian',
            'email' => 'adri@test.com',
            'password' => bcrypt('123')
        ]);

    }
}
