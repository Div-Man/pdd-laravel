<?php

use Illuminate\Database\Seeder;
use App\CategoryRoadMarking;

class CategoryRoadMarkingsTableSeeder extends Seeder
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
                'title' => 'Горизонтальная разметка'
            ],
              [
                'title' => 'Вертикальная разметка'
            ],
    
        ];
        
        CategoryRoadMarking::insert($items);
    }
}
