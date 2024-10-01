<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {



        $clientes= [
            
                [
                    'cpf' => '12345678901',
                    'nome' => 'Cliente A1',
                    'data_nascimento' => '1990-01-01',
                    'sexo' => 'Masculino',
                    'endereco' => 'Rua A, 123',
                    'estado_id' => 11, // Exemplo de estado_id
                    'cidade_id' => 12, // Exemplo de cidade_id
                ],
                [
                    'cpf' => '23456789012',
                    'nome' => 'Cliente B',
                    'data_nascimento' => '1985-02-15',
                    'sexo' => 'Feminino',
                    'endereco' => 'Avenida B, 456',
                    'estado_id' => 12,
                    'cidade_id' => 23,
                ],
                [
                    'cpf' => '34567890123',
                    'nome' => 'Cliente C',
                    'data_nascimento' => '1992-06-30',
                    'sexo' => 'Masculino',
                    'endereco' => 'Rua C, 789',
                    'estado_id' => 11,
                    'cidade_id' => 30,
                ],
                [
                    'cpf' => '45678901234',
                    'nome' => 'Cliente D',
                    'data_nascimento' => '1998-11-25',
                    'sexo' => 'Feminino',
                    'endereco' => 'Praça D, 101',
                    'estado_id' => 14,
                    'cidade_id' => 7,
                ],
                [
                    'cpf' => '56789012345',
                    'nome' => 'Cliente E',
                    'data_nascimento' => '1980-04-22',
                    'sexo' => 'Masculino',
                    'endereco' => 'Rua E, 202',
                    'estado_id' => 15,
                    'cidade_id' => 15,
                ],
                [
                    'cpf' => '67890123456',
                    'nome' => 'Cliente F',
                    'data_nascimento' => '1993-09-10',
                    'sexo' => 'Feminino',
                    'endereco' => 'Avenida F, 303',
                    'estado_id' => 16,
                    'cidade_id' => 50,
                ],
                [
                    'cpf' => '78901234567',
                    'nome' => 'Cliente G',
                    'data_nascimento' => '1987-05-17',
                    'sexo' => 'Masculino',
                    'endereco' => 'Rua G, 404',
                    'estado_id' => 17,
                    'cidade_id' => 4,
                ],
                [
                    'cpf' => '89012345678',
                    'nome' => 'Cliente H',
                    'data_nascimento' => '1991-12-01',
                    'sexo' => 'Feminino',
                    'endereco' => 'Praça H, 505',
                    'estado_id' => 21,
                    'cidade_id' => 18,
                ],
                [
                    'cpf' => '90123456789',
                    'nome' => 'Cliente I',
                    'data_nascimento' => '1983-03-05',
                    'sexo' => 'Masculino',
                    'endereco' => 'Rua I, 606',
                    'estado_id' => 22,
                    'cidade_id' => 9,
                ],
                [
                    'cpf' => '01234567890',
                    'nome' => 'Cliente J',
                    'data_nascimento' => '1995-07-20',
                    'sexo' => 'Feminino',
                    'endereco' => 'Avenida J, 707',
                    'estado_id' => 23,
                    'cidade_id' => 25,
                ],
            
            
        ];
        DB::table('clientes')->insert($clientes);
     
    }
}
