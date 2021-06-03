<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pessoas')->insert(
            [
                [
                    'id' => 1,
                    'nome' => "Fulano",
                    'sobrenome' => "Detal",
                    'email' => "fulano@hotmail.com",
                    'telefone' => "(99)999999999",
                    'juridica' => 0,
                    'cpf' => "11111111111"
                ],
                [
                    'id' => 2,
                    'nome' => "Fulano2",
                    'sobrenome' => "Detal2",
                    'email' => "fulano2@hotmail.com",
                    'telefone' => "(88)888888888",
                    'juridica' => 1,
                    'cnpj' => "222222222222"
                ],
            ]
        );
    }
}
