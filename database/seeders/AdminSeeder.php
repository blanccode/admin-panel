<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create([
            'name' => 'blanc',
            'admin_name' => 'blanc',
            'email' => 'blanccodes@gmail.com',
            'password' => Hash::make('mazzaka12'),
            'role_id' => 1,
            'remember_token' => Str::random(10),
        ]);
    }
}
