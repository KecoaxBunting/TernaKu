<?php

namespace Database\Seeders;

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
                'foto'=>'a.jpg'
            ],
            [
                'productName' => 'Susu kambing',
                'quantity' => 3,
                'foto'=>'a.jpg'
            ],
            [
                'productName' => 'Telur ayam kampung',
                'quantity' => 40,
                'foto'=>'a.jpg'
            ],
            [
                'productName' => 'Telur omega 3',
                'quantity' => 40,
                'foto'=>'a.jpg'
            ],
            [
                'productName' => 'Keju',
                'quantity' => 10,
                'foto'=>'a.jpg'
            ],
            [
                'productName' => 'Yogurt',
                'quantity' => 5,
                'foto'=>'a.jpg'
            ],
            [
                'productName' => 'Daging sapi',
                'quantity' => 4,
                'foto'=>'a.jpg'
            ],
            [
                'productName' => 'Daging ayam',
                'quantity' => 30,
                'foto'=>'a.jpg'
            ],
            [
                'productName' => 'Sosis',
                'quantity' => 10,
                'foto'=>'a.jpg'
            ],
            [
                'productName'=> 'Null',
                'quantity' => 0,
                'foto' => 'null.jpg'
            ]
        ];
        DB::table('products')->insert($datas);
    }
}
