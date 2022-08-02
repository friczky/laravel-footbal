<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Clubs;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('clubs')->truncate();

        $clubs = [
            [
                'stadiums_id'  => '1',
                'name'      => 'https://www.google.com/',
                'urrl'      => 'www.chelseafc.com',
                'thropy'    => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Clubs::insert($clubs);
    }
}
