<?php

namespace Database\Seeders;

use App\Models\farm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FarmSeeder extends Seeder
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
                'farmName'=>'Peternakan David',
                'location'=>'Jember',
                'user_id'=>1
            ]
        ];
        farm::insert($data);
    }
}
