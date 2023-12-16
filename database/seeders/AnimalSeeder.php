<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSeeder extends Seeder
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
                'animal_type_id'=>1,
                'birthDate'=>'2023-11-12',
                'quantity'=>20,
                'farm_id'=>1,
                'kesehatan'=>'Sangat sehat',
                'foto'=>'ayam_betina.jpg'
            ],
            [
                'animal_type_id'=>5,
                'birthDate'=>'2022-10-23',
                'quantity'=>10,
                'farm_id'=>1,
                'kesehatan'=>' Sehat',
                'foto'=>'sapi_betina.jpg'
            ], 
        ];
        DB::table('animals')->insert($datas);
    }
}
