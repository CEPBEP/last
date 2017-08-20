<?php

use Illuminate\Database\Seeder;
use App\Goods;
/////////////////////////////////////////////////////////////
class GoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         DB::table('goods')->insert([
             'Title' => 'Строка Названия',  //str_random(10),
             'Description' => 'Текстовое Описание',// str_random(10),
             'Price' => ('12210'),
             'img' => ('testurl.png'),
             'metadata' => ('wtf ?'),
         ]);
         //*//////////////////////////////////////////////////
         Goods::create([                    //создание через класс (model:App/Goods.php)
            'Title' => 'Строка Названия',  //str_random(10),
            'Description' => 'Текстовое Описание',// str_random(10),
            'Price' => ('12211'),
            'img' => ('testurl.png'),
            'metadata' => ('wtf ?'),
        ]);                               // */
    
     {
         DB::table('goods')->insert([
             'Title' => 'Строка Названия',  //str_random(10),
             'Description' => 'Текстовое Описание',// str_random(10),
             'Price' => ('22212'),
             'img' => ('testurl.png'),
             'metadata' => ('wtf ?'),
         ]);
         //*//////////////////////////////////////////////////
         Goods::create([                    //создание через класс (model:App/Goods.php)
            'Title' => 'Строка Названия',  //str_random(10),
            'Description' => 'Текстовое Описание',// str_random(10),
            'Price' => ('222153'),
            'img' => ('testurl.png'),
            'metadata' => ('wtf ?'),
        ]);                               // */
     }
    
    }
}
/////
