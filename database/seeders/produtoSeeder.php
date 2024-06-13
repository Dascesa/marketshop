<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produtoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        DB::table('produtos')->insert( 
            [

                // Produto 1
                [
          'nome'=> 'Perfume Pure Xs For Her Eau de Parfum Feminino (80Ml)',
            'descricao'=> 'Gênero: Feminino
            Concentração: Eau de Parfum
            Família Olfativa: Floral Oriental
            Notas de Cabeça: Ylang-Ylang
            Notas no Meio: Pipoca
            Notas de Fundo: Baunilha',
                'preco'=> 699,
                    'foto'=> 'https://d2rtj7su3taf1w.cloudfront.net/Custom/Content/Products/25/34/2534_pure-xs-for-her-eau-de-parfum-perfume-feminino_m1_637642073921204687.jpg',
                        'user_id' => 1,
                ],  

                // Produto 2
                [
                    'nome'=> 'Shakira - Dance Midnight Muse (80Ml)',
                      'descricao'=> 'Gênero: Feminino',
                          'preco'=> 199,
                              'foto'=> 'https://s3.amazonaws.com/satelital-resources/products/115996_1_a10d0200-2c97-49cd-9b47-5a82cd867f79_Big.jpg',
                                  'user_id' => 1,
                          ],  
                      
                            // Produto 3
                [
                    'nome'=> 'Shakira - Dance Midnight Muse (80Ml)',
                      'descricao'=> 'Gênero: Feminino',
                          'preco'=> 199,
                              'foto'=> 'https://d2rtj7su3taf1w.cloudfront.net/Custom/Content/Products/25/34/2534_pure-xs-for-her-eau-de-parfum-perfume-feminino_m1_637642073921204687.jpg',
                                  'user_id' => 1,
                          ],  
            

            ]);
    }
}

