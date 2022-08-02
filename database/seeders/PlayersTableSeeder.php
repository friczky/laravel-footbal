<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Players;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('players')->truncate();

        $players = [
            [
                'clubs_id'  => '1',
                'photo'     => '',
                'name'      => 'Thomas',
                'height'    => '180',
                'position'  => 'Defender',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        Players::insert('$players');
    }
}
