<?php

namespace Database\Seeders;

use App\Models\animal;
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
                'animalName'=>'Ayam Betina',
                'birthDate'=>'2023-11-12',
                'quantity'=>20,
                'farm_id'=>1,
                'kesehatan'=>'Sangat sehat',
                'foto'=>'animals/ayam_betina.jpg'
            ],
            [
                'animalName'=>'Sapi Betina',
                'birthDate'=>'2022-10-23',
                'quantity'=>10,
                'farm_id'=>1,
                'kesehatan'=>' Sehat',
                'foto'=>'animals/sapi_betina.jpeg'
            ], 
        ];
        animal::insert($datas);
    }
}
