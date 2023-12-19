<?php

namespace Database\Seeders;

use App\Models\asset;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'assetName' => 'Sapu',
                'status' => 'rusak',
                'farm_id' => 1,
                'quantity' => 5,
                'foto' => 'assets/sapu.jpg'
            ]
        ];
        asset::insert($data);
    }
}
