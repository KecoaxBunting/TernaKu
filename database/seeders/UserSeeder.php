<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'username' => 'david',
            'email' => 'david@gmail.com',
            'password' => '$2y$10$LLn4XbtH1SIRkzGJ8y2U/e/qPWy9WYkxtPsKVoThXML2a4e.iSW4K',
            'farm_id' => 1
        ];

        User::insert($data);
    }
}
