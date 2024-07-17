<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = ['Tuition', 'Miscellaneous', 'ID', 'Books'];
        for ($i=1; $i<11 ; $i++) { 
            
            for ($j=0; $j<4 ; $j++) {
                $amount = ($title[$j] == 'ID') ? 150.00 : fake()->numberBetween(1000, 15000);
                Charge::create([
                    'account_id'   =>$i,
                    'title'        =>$title[$j],
                    'amount'       =>$amount
                ]);
            }
        }
    }
}
