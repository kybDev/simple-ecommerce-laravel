<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Superagent",
            'email' => "admin@admin.com",
            'password' => bcrypt('1234'),
            'account_type' => "admin",
        ]);
    }
}
