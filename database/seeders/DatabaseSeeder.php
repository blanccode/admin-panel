<?php

namespace Database\Seeders;

use App\Models\Sale;
use App\Models\User;
use App\Models\View;
use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;
use Carbon\Carbon;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(random_int(1, 20))->create();
        User::factory(random_int(1, 20))->state([
            'created_at' => now()->subMonth(),
        ])->create();
        User::factory(10)->state([
            'created_at' => today()->subDays(5),
        ])->create();
        User::factory(20)->state([
            'created_at' => today(),
        ])->create();
       
        View::factory(random_int(1, 20))->create();
        View::factory(random_int(1, 20))->state([
            'created_at' => now()->subMonth(),
        ])->create();
        View::factory(10)->state([
            'created_at' => today()->subDays(5),
        ])->create();
        View::factory(20)->state([
            'created_at' => today(),
        ])->create();
        Sale::factory(random_int(1, 20))->create();
        Sale::factory(random_int(1, 20))->state([
            'created_at' => now()->subMonth(),
        ])->create();
        Sale::factory(10)->state([
            'created_at' => today()->subDays(5),
        ])->create();
        Sale::factory(20)->state([
            'created_at' => today(),
        ])->create();

        $this->call([
            AdminSeeder::class,
            // ViewSeeder::class,
        ]);
    }
}
