<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produto; 

class ProdutoSeeder extends Seeder
{
    public function run()
    {
        Produto::create([
            'nome' => 'Tapete de Ioga',
            'descricao' => 'Descrição do Produto 1',
            'preco' => 100.00,
        ]);

        Produto::create([
            'nome' => 'Produto 2',
            'descricao' => 'Descrição do Produto 2',
            'preco' => 150.00,
        ]);
    }
}
