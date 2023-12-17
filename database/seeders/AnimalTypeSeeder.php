<?php

namespace Database\Seeders;

use App\Models\animalType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalTypeSeeder extends Seeder
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
                'animalName'=>'ayam betina',
                'feed_id'=>1,
                'product_id'=>4
            ],
            [
                'animalName'=>'ayam potong',
                'feed_id'=>1,
                'product_id'=>8
            ],
            [
                'animalName'=>'ayam jantan',
                'feed_id'=>1,
                'product_id'=>10
            ],
            [
                'animalName'=>'sapi jantan',
                'feed_id'=>2,
                'product_id'=>7
            ],
            [
                'animalName'=>'sapi betina',
                'feed_id'=>2,
                'product_id'=>1
            ],
            [
                'animalName'=>'kambing betina',
                'feed_id'=>3,
                'product_id'=>2
            ],
        ];
        animalType::insert($datas);
    }
}
