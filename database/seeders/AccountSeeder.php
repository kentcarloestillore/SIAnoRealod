<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Account;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $remarks = ['1st Semester', '2nd Semester', 'Summer'];
        for ($i=1; $i <11 ; $i++) {
            for ($j=1; $j <3 ; $j++) {
                Account::create([
                    'student_id'    =>$i,
                    'section'       =>fake()->randomElement(['CAST', 'CCJ', 'COE', 'CON', 'CABM']),
                    'remarks'       =>$remarks[$j],
                ]);
            }
        }
    }
}
