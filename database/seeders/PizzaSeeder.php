<?php

namespace Database\Seeders;
use App\Models\Pizza;
use App\Models\user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       user::factory(20)->create();
       pizza::factory(50)->create(); 
    }
}
