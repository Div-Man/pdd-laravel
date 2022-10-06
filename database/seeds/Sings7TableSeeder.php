<?php

use Illuminate\Database\Seeder;
use App\Sings;

class Sings7TableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $sing = [
            [
                'url' => '',
                'numeral' => '',
                'title' => '7. Знаки сервиса',
                'text' => 'Знаки сервиса информируют о расположении соответствующих объектов.' ,
                'sing_id' => 7
            ],
            [
                'url' => '/img/signs/7/7.1.png',
                'numeral' => '7.1',
                'title' => 'Пункт медицинской помощи',
                'text' => '',
                'sing_id' => 7
            ],
             [
                'url' => '/img/signs/7/7.2.png',
                'numeral' => '7.2',
                'title' => 'Больница',
                'text' => '',
                'sing_id' => 7
            ],
             [
                'url' => '/img/signs/7/7.3.png',
                'numeral' => '7.3',
                'title' => 'Автозаправочная станция',
                'text' => '',
                'sing_id' => 7
            ],
             [
                'url' => '/img/signs/7/7.4.png',
                'numeral' => '7.4',
                'title' => 'Техническое обслуживание автомобилей',
                'text' => '',
                'sing_id' => 7
            ],
             [
                'url' => '/img/signs/7/7.5.png',
                'numeral' => '7.5',
                'title' => 'Мойка автомобилей',
                'text' => '',
                'sing_id' => 7
            ],
             [
                'url' => '/img/signs/7/7.6.png',
                'numeral' => '7.6',
                'title' => 'Телефон',
                'text' => '',
                'sing_id' => 7
            ],
             [
                'url' => '/img/signs/7/7.7.png',
                'numeral' => '7.7',
                'title' => 'Пункт питания',
                'text' => '',
                'sing_id' => 7
            ],
             [
                'url' => '/img/signs/7/7.8.png',
                'numeral' => '7.8',
                'title' => 'Питьевая вода',
                'text' => '',
                'sing_id' => 7
            ],
             [
                'url' => '/img/signs/7/7.9.png',
                'numeral' => '7.9',
                'title' => 'Гостиница или мотель',
                'text' => '',
                'sing_id' => 7
            ],
             [
                'url' => '/img/signs/7/7.10.png',
                'numeral' => '7.10',
                'title' => 'Кемпинг',
                'text' => '',
                'sing_id' => 7
            ],
             [
                'url' => '/img/signs/7/7.11.png',
                'numeral' => '7.11',
                'title' => 'Место отдыха',
                'text' => '',
                'sing_id' => 7
            ],
             [
                'url' => '/img/signs/7/7.12.png',
                'numeral' => '7.12',
                'title' => 'Пост дорожно-патрульной службы',
                'text' => '',
                'sing_id' => 7
            ],
             [
                'url' => '/img/signs/7/7.13.png',
                'numeral' => '7.13',
                'title' => 'Полиция',
                'text' => '',
                'sing_id' => 7
            ],
             [
                'url' => '/img/signs/7/7.14.png',
                'numeral' => '7.14',
                'title' => 'Пункт транспортного контроля',
                'text' => '',
                'sing_id' => 7
            ],
             [
                'url' => '/img/signs/7/7.14.1.png',
                'numeral' => '7.14.1',
                'title' => 'Пункт таможенного контроля',
                'text' => '',
                'sing_id' => 7
            ],
             [
                'url' => '/img/signs/7/7.15.png',
                'numeral' => '7.15',
                'title' => 'Зона приема радиостанции, передающей информацию о дорожном движении',
                'text' => 'Участок дороги, на котором осуществляется прием передач '
                 . 'радиостанции на частоте, указанной на знаке.',
                'sing_id' => 7
            ],
             [
                'url' => '/img/signs/7/7.16.png',
                'numeral' => '7.16',
                'title' => 'Зона радиосвязи с аварийными службами',
                'text' => 'Участок дороги, на котором действует система радиосвязи с аварийными '
                 . 'службами в гражданском диапазоне 27 МГц.',
                'sing_id' => 7
            ],
             [
                'url' => '/img/signs/7/7.17.png',
                'numeral' => '7.17',
                'title' => 'Бассейн или пляж',
                'text' => '',
                'sing_id' => 7
            ],
             [
                'url' => '/img/signs/7/7.18.png',
                'numeral' => '7.18',
                'title' => 'Туалет',
                'text' => '',
                'sing_id' => 7
            ],
             [
                'url' => '/img/signs/7/7.19.png',
                'numeral' => '7.19',
                'title' => 'Телефон экстренной связи',
                'text' => 'Указывает место, где находится телефон для вызова оперативных служб.',
                'sing_id' => 7
            ],
             [
                'url' => '/img/signs/7/7.20.png',
                'numeral' => '7.20',
                'title' => 'Огнетушитель',
                'text' => 'Указывает место, где находится огнетушитель.',
                'sing_id' => 7
            ],
             [
                'url' => '/img/signs/7/7.21.png',
                'numeral' => '7.21',
                'title' => 'Автозаправочная станция с возможностью зарядки электромобилей',
                'text' => '',
                'sing_id' => 7
            ],
        ];
        
        Sings::insert($sing);
    }

}
