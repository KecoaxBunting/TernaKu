<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'feedName' => 'Pakan ayam',
                'quantity' => 36,
                'foto' => 'pakan_ayam.jpg'
            ],
            [
                'feedName' => 'Pakan sapi',
                'quantity' => 36,
                'foto' => 'pakan_sapi.jpg'
            ],
            [
                'feedName' => 'Pakan kambing',
                'quantity' => 36,
                'foto' => 'pakan_kambing.jpg'
            ]
        ];
        DB::table('feeds')->insert($datas);
    }
}
