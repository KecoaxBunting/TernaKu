<?php

namespace Database\Seeders;

use App\Models\product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
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
                'productName' => 'Susu sapi',
                'quantity' => 10,
                'foto'=>'products/susu_sapi.jpg',
                'farm_id' => 1
            ],
            [
                'productName' => 'Susu kambing',
                'quantity' => 3,
                'foto'=>'products/susu_kambing.jpg',
                'farm_id' => 1
            ],
            [
                'productName' => 'Telur ayam kampung',
                'quantity' => 40,
                'foto'=>'products/telur_ayam_kampung.jpg',
                'farm_id' => 1
            ],
            [
                'productName' => 'Telur omega 3',
                'quantity' => 40,
                'foto'=>'products/telur_omega_3.jpg',
                'farm_id' => 1
            ],
            [
                'productName' => 'Keju',
                'quantity' => 10,
                'foto'=>'products/keju.jpeg',
                'farm_id' => 1
            ],
            [
                'productName' => 'Yogurt',
                'quantity' => 5,
                'foto'=>'products/yogurt.jpg',
                'farm_id' => 1
            ],
            [
                'productName' => 'Daging sapi',
                'quantity' => 4,
                'foto'=>'products/daging_sapi.jpg',
                'farm_id' => 1
            ],
            [
                'productName' => 'Daging ayam',
                'quantity' => 30,
                'foto'=>'products/daging_ayam.jpg',
                'farm_id' => 1
            ],
            [
                'productName' => 'Sosis',
                'quantity' => 10,
                'foto'=>'products/sosis.jpeg',
                'farm_id' => 1
            ],
        ];
        product::insert($datas);
    }
}
