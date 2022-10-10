<?php

namespace Database\Seeders;

use App\Models\JournalTypes;
use Illuminate\Database\Seeder;

class JournalTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //,,
    public function run()
    {
        JournalTypes::create([
            'amount' => 400,
            'journal_id' => 1,
            'type' =>'debit_cash'
        ]);
        JournalTypes::create([
            'amount' => 400*.2 ,
            'journal_id' => 1,
            'type' =>'credit_revenue'
        ]);
        JournalTypes::create([
            'amount' => 400*.8 ,
            'journal_id' => 1,
            'type' =>'credit_payable'
        ]);
    }
}
