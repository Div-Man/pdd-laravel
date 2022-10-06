<?php

use Illuminate\Database\Seeder;
use App\CategorySing;

class CategorySingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $items = [
            [
                'title' => 'Предупреждающие знаки'
            ],
           [
                'title' => 'Знаки приоритета'
            ],
            [
                'title' => 'Запрещающие знаки'
            ],
            [
                'title' => 'Предписывающие знаки'
            ],
            [
                'title' => 'Знаки особых предписаний'
            ],
            [
                'title' => 'Информационные знаки'
            ],
            [
                'title' => 'Знаки сервиса'
            ],
            [
                'title' => 'Знаки дополнительной информации (таблички)'
            ],
    
        ];
        
        CategorySing::insert($items);
    }
}
