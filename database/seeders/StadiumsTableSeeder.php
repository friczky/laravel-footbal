<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Stadiums;

class StadiumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stadiums')->truncate();

        $stadiums = [
            [
                'name'      => 'Stamford Bridge',
                'capacity'  => 4000,
                'address'   => 'Stamford Bridge, London',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        Stadiums::insert('$stadiums');
    }
}
