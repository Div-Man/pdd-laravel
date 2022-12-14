<?php

use Illuminate\Database\Seeder;
use App\SubItems;

class SubItems21TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $subItems = [
            [
                'title' => '21.',
                'text' => 'Учебная езда',
                'item_id' => 21
            ],
             [
                'title' => '21.1.',
                'text' => 'Первоначальное обучение вождению транспортных средств должно '
                 . 'проводиться на закрытых площадках или автодромах.',
                'item_id' => 21
            ],
             [
                'title' => '21.2.',
                'text' => 'Учебная езда на дорогах допускается только с обучающим и при наличии '
                 . 'первоначальных навыков управления у обучаемого. Обучаемый обязан знать '
                 . 'и выполнять требования Правил.',
                'item_id' => 21
            ],
             [
                'title' => '21.3.',
                'text' => 'Обучающий должен иметь при себе документ на право обучения '
                 . 'вождению транспортного средства данной категории, а также удостоверение '
                 . 'на право управления транспортным средством соответствующей категории или подкатегории.',
                'item_id' => 21
            ],
             [
                'title' => '21.4.',
                'text' => 'Обучаемому на автомобиле или мотоцикле должно быть не менее 16 лет.',
                'item_id' => 21
            ],
             [
                'title' => '21.5.',
                'text' => 'Механическое транспортное средство, на котором проводится обучение, '
                 . 'должно быть оборудовано в соответствии с пунктом 5 Основных положений и '
                 . 'иметь опознавательные знаки "Учебное транспортное средство".',
                'item_id' => 21
            ],
             [
                'title' => '21.6.',
                'text' => 'Запрещается учебная езда на дорогах, перечень которых '
                 . 'объявляется в установленном порядке.',
                'item_id' => 21
            ],
         ];
         
         SubItems::insert($subItems);
    }
}
