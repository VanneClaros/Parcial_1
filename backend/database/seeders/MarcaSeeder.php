<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insertar datos a la tabla
        DB::table('marcas')->insert([
            [
                'nombre'=>'Sudaderas',
                'descripcion'=>'Sudaderas unisex',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'nombre'=>'Jeans',
                'descripcion'=>'Jeans dama',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]
        ]);
    }
}
