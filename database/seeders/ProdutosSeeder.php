<?php

use Illuminate\Database\Seeder;

class ProdutosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Produtos::create([
            'nomeProduto' => str_random(10),
            'sku' => str_random(5),
            'peso' => str_random(2),
            'altura' => str_random(2),
            'largura' => str_random(2),
            'profundidade' => str_random(2),
            'valor' => str_random(5),
        ]);
    }
}