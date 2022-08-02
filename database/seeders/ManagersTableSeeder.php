<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Managers;

class ManagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stadiums')->truncate();

        $managers = [
            [
                'clubs_id'      => 1,
                'photo'         => 'https://www.google.com/',
                'name'          => 'Thomas',
                'old'           => '47',
                'nationality'   => 'Germany',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ];

        Managers::insert($managers);
    }
}
