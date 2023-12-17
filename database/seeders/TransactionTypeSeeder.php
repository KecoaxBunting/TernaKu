<?php

namespace Database\Seeders;

use App\Models\transactionType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionTypeSeeder extends Seeder
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
                'transactionType' => 'pemasukan'
            ],
            [
                'transactionType' => 'pengeluaran'
            ]
        ];
        transactionType::insert($datas);
    }
}
