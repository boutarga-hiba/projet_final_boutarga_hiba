<?php

namespace Database\Seeders;

use App\Models\Info;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Info::create([
            "ville" => " Casablanca, California",
            "adrs" => "Rose, CASABLANCA 91770",
            "phone" => "00 (888) 9999 562",
            "emploi" => "10 h",
            "email" => "hiba@gmail.com",
            "title" => "send a message",
        ]);    }
}
