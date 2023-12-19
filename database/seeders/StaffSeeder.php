<?php

namespace Database\Seeders;

use App\Models\staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
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
                'staffName' => 'Kiko Lawaski',
                'age' => 30,
                'phone' => '08326372821',
                'address' => 'Jalan Kedongan Raya no 567',
                'role_id' => 1,
                'farm_id' => 1,
                'foto' => 'staffs/chico.jpg'
            ]
        ];
        staff::insert($data);
    }
}
