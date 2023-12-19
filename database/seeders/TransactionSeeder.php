<?php

namespace Database\Seeders;

use App\Models\transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
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
                'transactionName' => 'Beli pakan ayam',
                'price' => 75000,
                'transaction_type_id' => 2,
                'note' => '10 karung',
                'farm_id' => 1,
                'transactionDate' => '2023-12-19 12:24',
                'foto' => 'transactions/beli_pakan_ayam.jpg'
            ]
        ];
        transaction::insert($data);
    }
}
