<?php

use Illuminate\Database\Seeder;
use App\RoadMarking;

class RoadMarkings2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $sing = [
            [
                'url' => '',
                'numeral' => '',
                'title' => '2. Вертикальная разметка',
                'text' => 'Вертикальная разметка в виде сочетания черных и белых полос на '
                . 'дорожных сооружениях и элементах оборудования дорог показывает их '
                . 'габариты и служит средством зрительного ориентирования.',
                'road_marking_id' => 2
            ],
             [
                'url' => '',
                'numeral' => '',
                'title' => 'Вертикальная разметка:',
                'text' => '',
                'road_marking_id' => 2
            ],
             [
                'url' => '/img/road-marking/2/2.1.1.png',
                'numeral' => '2.1.1',
                'title' => '',
                'text' => '',
                'road_marking_id' => 2
            ],
             [
                'url' => '/img/road-marking/2/2.1.2.png',
                'numeral' => '2.1.2',
                'title' => '',
                'text' => '',
                'road_marking_id' => 2
            ],
             [
                'url' => '/img/road-marking/2/2.1.3.png',
                'numeral' => '2.1.3',
                'title' => '',
                'text' => 'Обозначают элементы дорожных сооружений (опор мостов, путепроводов, '
                 . 'торцовых частей парапетов и тому подобного), когда эти элементы представляют '
                 . 'опасность для движущихся транспортных средств;',
                'road_marking_id' => 2
            ],
             [
                'url' => '/img/road-marking/2/2.2.png',
                'numeral' => '2.2',
                'title' => '',
                'text' => 'Обозначает нижний край пролетного строения тоннелей, мостов и путепроводов;',
                'road_marking_id' => 2
            ],
             [
                'url' => '/img/road-marking/2/2.3.png',
                'numeral' => '2.3',
                'title' => '',
                'text' => 'Обозначает круглые тумбы, установленные на разделительных '
                 . 'полосах или островках безопасности;',
                'road_marking_id' => 2
            ],
             [
                'url' => '/img/road-marking/2/2.4.png',
                'numeral' => '2.4',
                'title' => '',
                'text' => 'Обозначает направляющие столбики, надолбы, опоры ограждений и тому подобное;',
                'road_marking_id' => 2
            ],
             [
                'url' => '/img/road-marking/2/2.5.png',
                'numeral' => '2.5',
                'title' => '',
                'text' => 'Обозначает боковые поверхности ограждений дорог на закруглениях малого '
                 . 'радиуса, крутых спусках, других опасных участках;',
                'road_marking_id' => 2
            ],
             [
                'url' => '/img/road-marking/2/2.6.png',
                'numeral' => '2.6',
                'title' => '',
                'text' => 'Обозначает боковые поверхности ограждений дорог на других участках;',
                'road_marking_id' => 2
            ],
             [
                'url' => '/img/road-marking/2/2.7.png',
                'numeral' => '2.7',
                'title' => '',
                'text' => 'Обозначает бордюры на опасных участках и возвышающиеся островки безопасности.',
                'road_marking_id' => 2
            ],
        ];
        
        RoadMarking::insert($sing);
    }
}
