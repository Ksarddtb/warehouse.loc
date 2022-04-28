<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Province::insert(array(
            array('id' => '1','name' => 'Қорақалпоғистон Республикаси'),
            array('id' => '2','name' => 'Андижон вилояти'),
            array('id' => '3','name' => 'Бухоро вилояти'),
            array('id' => '4','name' => 'Жиззах вилояти'),
            array('id' => '5','name' => 'Қашқадарё вилояти'),
            array('id' => '6','name' => 'Навоий вилояти'),
            array('id' => '7','name' => 'Наманган вилояти'),
            array('id' => '8','name' => 'Самарқанд вилояти'),
            array('id' => '9','name' => 'Сирдарё вилояти'),
            array('id' => '10','name' => 'Сурхондарё вилояти'),
            array('id' => '11','name' => 'Тошкент вилояти'),
            array('id' => '12','name' => 'Фарғона вилояти'),
            array('id' => '13','name' => 'Хоразм вилояти'),
            array('id' => '14','name' => 'Тошкент шаҳри')
          ));
    }
}
