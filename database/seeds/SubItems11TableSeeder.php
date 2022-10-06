<?php

use Illuminate\Database\Seeder;
use App\SubItems;

class SubItems11TableSeeder extends Seeder
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
                'title' => '11.',
                'text' => 'Обгон, встречный разъезд',
                'item_id' => 11
            ],
             [
                'title' => '11.1.',
                'text' => 'Прежде чем начать обгон, водитель обязан убедиться в '
                 . 'том, что полоса движения, на которую он собирается выехать, '
                 . 'свободна на достаточном для обгона расстоянии и в процессе '
                 . 'обгона он не создаст опасности для движения и помех другим '
                 . 'участникам дорожного движения.',
                'item_id' => 11
            ],
             [
                'title' => '11.2.',
                'text' => 'Водителю запрещается выполнять обгон в случаях, если:'
                 . '<ul>'
                 . '<li>транспортное средство, движущееся впереди, производит обгон или объезд препятствия;</li>'
                 . '<li>транспортное средство, движущееся впереди по той же полосе, подало сигнал поворота налево;</li>'
                 . '<li>следующее за ним транспортное средство начало обгон;</li>'
                 . '<li>по завершении обгона он не сможет, не создавая опасности для движения и '
                 . 'помех обгоняемому транспортному средству, вернуться на ранее занимаемую полосу.</li>'
                 . '</ul>',
                'item_id' => 11
            ],
             [
                'title' => '11.3.',
                'text' => 'Водителю обгоняемого транспортного средства запрещается '
                 . 'препятствовать обгону посредством повышения скорости движения или иными действиями.',
                'item_id' => 11
            ],
             [
                'title' => '11.4.',
                'text' => 'Обгон запрещен:'
                 . '<ul>'
                 . '<li>на регулируемых перекрестках, а также на нерегулируемых '
                 . 'перекрестках при движении по дороге, не являющейся главной;</li>'
                 . '<li>на пешеходных переходах;</li>'
                 . '<li>на железнодорожных переездах и ближе чем за 100 метров перед ними;</li>'
                 . '<li>на мостах, путепроводах, эстакадах и под ними, а также в тоннелях;</li>'
                 . '<li>в конце подъема, на опасных поворотах и на других участках с ограниченной видимостью.</li>'
                 . '<ul>',
                'item_id' => 11
            ],
             [
                'title' => '11.5.',
                'text' => 'Опережение транспортных средств при проезде пешеходных переходов '
                 . 'осуществляется с учетом требований пункта 14.2 Правил.',
                'item_id' => 11
            ],
             [
                'title' => '11.6.',
                'text' => 'В случае если вне населенных пунктов обгон или опережение '
                 . 'тихоходного транспортного средства, транспортного средства, '
                 . 'перевозящего крупногабаритный груз, или транспортного средства, '
                 . 'двигающегося со скоростью, не превышающей 30 км/ч, затруднены, '
                 . 'водитель такого транспортного средства должен принять как можно '
                 . 'правее, а при необходимости остановиться, чтобы пропустить '
                 . 'следующие за ним транспортные средства.',
                'item_id' => 11
            ],
             [
                'title' => '11.7.',
                'text' => 'В случае если встречный разъезд затруднен, водитель, '
                 . 'на стороне которого имеется препятствие, должен уступить дорогу. '
                 . 'Уступить дорогу при наличии препятствия на уклонах, обозначенных '
                 . 'знаками 1.13 и 1.14, должен водитель транспортного средства, движущегося на спуск.',
                'item_id' => 11
            ],
         ];
         
         SubItems::insert($subItems);
    }
}
