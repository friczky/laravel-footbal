<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Match;

class MatchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('match')->truncate();

        $match = [
            [
                'clubs_id'      => 1,
                'rivals_id'     => 2,
                'schedule'      => '2020-01-01',
                'created_at'    => now(),
                'updated_at'    => now(),
            ]
        ];

        Match::insert('$match');
    }
}
