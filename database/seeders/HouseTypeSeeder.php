<?php

namespace Database\Seeders;

use App\Models\HouseType;
use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HouseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        HouseType::create([
            'name' => 'Villa',

        ]);
    }
}
