<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('productos')->insert([
        [
        'nombre'=>'Tenis',
        'precio'=> 120.00,
        'marcas_id'=> 1, 
        'created_at'=> now(),
        'updated_at'=> now(),
    ],
    [
        'nombre'=>'Poleras',
        'precio'=> 100.00,
        'marcas_id'=> 2, 
        'created_at'=> now(),
        'updated_at'=> now(),
    ]
    ]);
    }
}
