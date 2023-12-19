<?php

namespace Database\Seeders;

use App\Models\feed;
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
                'foto' => 'feeds/pakan_ayam.jpg',
                'farm_id' => 1
            ],
            [
                'feedName' => 'Pakan sapi',
                'quantity' => 36,
                'foto' => 'feeds/pakan_sapi.jpg',
                'farm_id' => 1
            ],
            [
                'feedName' => 'Pakan kambing',
                'quantity' => 36,
                'foto' => 'feeds/pakan_kambing.jpeg',
                'farm_id' => 1
            ]
        ];
        feed::insert($datas);
    }
}
