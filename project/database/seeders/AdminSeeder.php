<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //    \App\Models\Admin::factory(10)->create();

        \App\Models\Admin::factory()->create([
            'name' => 'admin1',
            'email' => 'admin@gmail.com',
            'phone' => 8081048127,
            'password'=>"12345678",
        ]);
    }
}
