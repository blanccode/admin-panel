<?php

namespace Database\Seeders;

use App\Models\View;
use Illuminate\Database\Seeder;

class ViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        View::factory(random_int(1,20))->create();
    }
}
