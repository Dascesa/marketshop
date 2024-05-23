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
          'nome'=> 'Perfume Arabe Ghala Al wataniah Eau de parfum - 100ml',
            'descricao'=> 'Perfume Cheirosinho',
                'preco'=> 300,
                    'foto'=> 'https://img.freepik.com/fotos-gratis/um-frasco-de-perfume-com-a-palavra-perfume_1340-37484.jpg',
                        'user_id' => 1,
                ],  

                // Produto 2
                [
                    'nome'=> 'Perfume 2',
                      'descricao'=> 'Perfume Suave',
                          'preco'=> 200,
                              'foto'=> 'https://m.media-amazon.com/images/I/61XudjcLXuL._AC_UF350,350_QL80_DpWeblab_.jpg',
                                  'user_id' => 1,
                          ],  

                        //   Produto 3
                        [
                            'nome'=> 'Perfume Arabe Duha Al wataniah Eau de parfum - 100ml - feminino',
                              'descricao'=> 'Perfume Intenso',
                                  'preco'=> 215,
                                      'foto'=> 'https://cdn.awsli.com.br/600x450/1851/1851672/produto/228231581/duha-4pdjne9l2c.jpg',
                                          'user_id' => 1,
                                  ], 

                                //   Produto 4
                                [
                                    'nome'=> 'Perfume Imperial Majesty de Clive Christian 500ml',
                                      'descricao'=> 'O perfume mais caro do mundo',
                                          'preco'=> 215000000,
                                              'foto'=> 'https://oespecialista.com.br/wp-content/uploads/2021/08/perfume-mais-caro-do-mundo-clive-christian.jpg',
                                                  'user_id' => 1,
                                          ], 

                                        //   Produto 5

            ]);
    }
}

