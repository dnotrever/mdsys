<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sector;

class SectorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sectors = [
            ['sector_name' => 'Recepção'],
            ['sector_name' => 'Terapia Ocupacional'],
            ['sector_name' => 'Cardiologia'],
            ['sector_name' => 'Neurologia'],
            ['sector_name' => 'Ortopedia'],
            ['sector_name' => 'Clínica Geral']
        ];

        foreach ($sectors as $sector) {
            Sector::create($sector);
        }
    }
}
