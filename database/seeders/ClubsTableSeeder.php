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
                'name'          => 'Chelsea',
                'logo'          => 'https://upload.wikimedia.org/wikipedia/id/thumb/c/cc/Chelsea_FC.svg/1200px-Chelsea_FC.svg.png',
                'url'           => 'www.chelseafc.com',
                'thropy'        => 19,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'stadiums_id'  => '2',
                'name'          => 'Barselona Fc',
                'logo'          => 'https://upload.wikimedia.org/wikipedia/id/thumb/4/47/FC_Barcelona_%28crest%29.svg/1200px-FC_Barcelona_%28crest%29.svg.png',
                'url'           => 'www.barselona.com',
                'thropy'        => 19,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ];

        Clubs::insert($clubs);
    }
}
