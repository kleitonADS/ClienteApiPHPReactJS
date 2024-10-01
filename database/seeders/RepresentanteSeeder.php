<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RepresentanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $representantes = [
                        ['nome' => 'Representante A', 'cidade_id' => 1],
    ['nome' => 'Representante B', 'cidade_id' => 2],
    ['nome' => 'Representante C', 'cidade_id' => 3],
    ['nome' => 'Representante D', 'cidade_id' => 4],
    ['nome' => 'Representante E', 'cidade_id' => 5],
    ['nome' => 'Representante F', 'cidade_id' => 6],
    ['nome' => 'Representante G', 'cidade_id' => 7],
    ['nome' => 'Representante H', 'cidade_id' => 8],
    ['nome' => 'Representante I', 'cidade_id' => 9],
    ['nome' => 'Representante J', 'cidade_id' => 10],
    ['nome' => 'Representante K', 'cidade_id' => 11],
    ['nome' => 'Representante L', 'cidade_id' => 12],
    ['nome' => 'Representante M', 'cidade_id' => 13],
    ['nome' => 'Representante N', 'cidade_id' => 14],
    ['nome' => 'Representante O', 'cidade_id' => 15],
    ['nome' => 'Representante P', 'cidade_id' => 16],
        ];
        DB::table('representantes')->insert($representantes);


    
    }
}
