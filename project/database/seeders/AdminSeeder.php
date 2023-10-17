<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //    \App\Models\Admin::factory(1)->create();

        Admin::create([
            'name' => 'admin1',
            'email' => 'admin@gmail.com',
            'phone' => 8081048127,
            // 'password'=>1234,
        ]);
    }
}
