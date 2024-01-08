<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\categoria;

class categoriaseeder extends Seeder
{
    
    public function run(): void
    {
        categoria::create([
            'nombre'=>'Frutas'
        ]);
        categoria::create([
            'nombre'=>'Verduras'
        ]);
 
    }
}
