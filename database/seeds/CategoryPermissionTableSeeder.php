<?php

use Illuminate\Database\Seeder;
use App\CategoryPermission;

class CategoryPermissionTableSeeder extends Seeder
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
                'title' => 'Допуск ТС к эксплуатации'
            ],
              [
                'title' => 'Перечень неисправностей ТС'
            ],
    
        ];
        
        CategoryPermission::insert($items);
    }
}
