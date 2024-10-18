<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Car::create([
            'marca' => 'Ford',
            'modelo' => 'Shelby',
            'año' => '2022',
            'color' => 'Azul',
            'precio' => '2000000',
            'kilometraje' => '100000',
        ]);
        Car::create([
            'marca' => 'Toyota',
            'modelo' => 'Shelby',
            'año' => '2022',
            'color' => 'Azul',
            'precio' => '2000000',
            'kilometraje' => '100000',
        ]);
        Car::create([
            'marca' => 'Ford',
            'modelo' => 'Shelby',
            'año' => '2022',
            'color' => 'Azul',
            'precio' => '2000000',
            'kilometraje' => '100000',
        ]);
    }
}
