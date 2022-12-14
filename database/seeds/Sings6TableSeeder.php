<?php

use Illuminate\Database\Seeder;
use App\Sings;

class Sings6TableSeeder extends Seeder {

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
                'title' => '6. Информационные знаки',
                'text' => 'Информационные знаки информируют о расположении населенных пунктов и '
                . 'других объектов, а также об установленных или о рекомендуемых режимах движения.' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.1.png',
                'numeral' => '6.1',
                'title' => 'Общие ограничения максимальной скорости',
                'text' => 'Общие ограничения скорости, установленные Правилами '
                . 'дорожного движения Российской Федерации.' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.2.png',
                'numeral' => '6.2',
                'title' => 'Рекомендуемая скорость',
                'text' => 'Скорость, с которой рекомендуется движение на данном участке дороги. '
                . 'Зона действия знака распространяется до ближайшего перекрестка, а '
                . 'при применении знака 6.2 совместно с предупреждающим знаком '
                . 'определяется протяженностью опасного участка.' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.3.1.png',
                'numeral' => '6.3.1',
                'title' => 'Место для разворота',
                'text' => 'Поворот налево запрещается.' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.3.2.png',
                'numeral' => '6.3.2',
                'title' => 'Зона для разворота',
                'text' => 'Протяженность зоны для разворота. Поворот налево запрещается.' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.4.png',
                'numeral' => '6.4',
                'title' => 'Парковка (парковочное место)',
                'text' => '' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.5.png',
                'numeral' => '6.5',
                'title' => 'Полоса аварийной остановки',
                'text' => 'Полоса аварийной остановки на крутом спуске.' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.6.png',
                'numeral' => '6.6',
                'title' => 'Подземный пешеходный переход',
                'text' => '' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.7.png',
                'numeral' => '6.7',
                'title' => 'Надземный пешеходный переход',
                'text' => '' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.8.1.png',
                'numeral' => '6.8.1',
                'title' => '',
                'text' => '' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.8.2.png',
                'numeral' => '6.8.2',
                'title' => '',
                'text' => '' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.8.3.png',
                'numeral' => '6.8.3',
                'title' => 'Тупик',
                'text' => 'Дорога, не имеющая сквозного проезда.' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.9.1.png',
                'numeral' => '6.9.1',
                'title' => 'Предварительный указатель направлений',
                'text' => '' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.9.2.png',
                'numeral' => '6.9.2',
                'title' => 'Предварительный указатель направления',
                'text' => 'Направления движения к обозначенным на знаке населенным пунктам и другим '
                . 'объектам. На знаках могут быть нанесены изображения знака 6.14.1, символы '
                . 'автомагистрали, аэропорта и иные пиктограммы. На знаке 6.9.1 могут быть '
                . 'нанесены изображения других знаков, информирующих об особенностях движения. '
                . 'В нижней части знака 6.9.1 указывается расстояние от места установки знака '
                . 'до перекрестка или начала полосы торможения. '
                . '<p>Знак 6.9.1 применяется также для указания объезда участков дорог, на которых '
                . 'установлен один из запрещающих знаков 3.11  — 3.15.</p>' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.9.3.png',
                'numeral' => '6.9.3',
                'title' => 'Схема движения',
                'text' => 'Маршрут движения при запрещении на перекрестке отдельных маневров или '
                . 'разрешенные направления движения на сложном перекрестке.' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.10.1.png',
                'numeral' => '6.10.1',
                'title' => 'Указатель направлений',
                'text' => '' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.10.2.png',
                'numeral' => '6.10.2',
                'title' => 'Указатель направления',
                'text' => 'Направления движения к пунктам маршрута. На знаках может быть указано '
                . 'расстояние (км) до обозначенных на них объектов, нанесены символы '
                . 'автомагистрали, аэропорта и иные пиктограммы.' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.11.png',
                'numeral' => '6.11',
                'title' => 'Наименование объекта',
                'text' => 'Наименование иного объекта, чем населенный пункт (река, озеро, перевал, '
                . 'достопримечательность и тому подобное).' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.12.png',
                'numeral' => '6.12',
                'title' => 'Указатель расстояний',
                'text' => 'Расстояние (км) до населенных пунктов, расположенных на маршруте.' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.13.png',
                'numeral' => '6.13',
                'title' => 'Километровый знак',
                'text' => 'Расстояние (км) до начала или конца дороги.' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.14.1.png',
                'numeral' => '6.14.1',
                'title' => '',
                'text' => '' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.14.2.png',
                'numeral' => '6.14.2',
                'title' => 'Номер маршрута',
                'text' => '6.14.1 — номер, присвоенный дороге (маршруту); 6.14.2 — '
                . 'номер и направление дороги (маршрута).' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.15.1.png',
                'numeral' => '6.15.1',
                'title' => '',
                'text' => '' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.15.2.png',
                'numeral' => '6.15.2',
                'title' => '',
                'text' => '' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.15.3.png',
                'numeral' => '6.15.3',
                'title' => 'Направление движения для грузовых автомобилей',
                'text' => 'Рекомендуемое направление движения для грузовых автомобилей, 
                    тракторов и самоходных машин, если на перекрестке их движение в 
                    одном из направлений запрещено.' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.16.png',
                'numeral' => '6.16',
                'title' => 'Стоп-линия',
                'text' => 'Место остановки транспортных средств при '
                . 'запрещающем сигнале светофора (регулировщика).' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.17.png',
                'numeral' => '6.17',
                'title' => 'Схема объезда',
                'text' => 'Маршрут объезда участка дороги, временно закрытого для движения.' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.18.1.png',
                'numeral' => '6.18.1',
                'title' => '',
                'text' => '' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.18.2.png',
                'numeral' => '6.18.2',
                'title' => '',
                'text' => '' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.18.3.png',
                'numeral' => '6.18.3',
                'title' => 'Направление объезда',
                'text' => 'Направление объезда участка дороги, временно закрытого для движения.' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.19.1.png',
                'numeral' => '6.19.1',
                'title' => '',
                'text' => '' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.19.2.png',
                'numeral' => '6.19.2',
                'title' => 'Предварительный указатель перестроения на другую проезжую часть',
                'text' => 'Направление объезда закрытого для движения участка проезжей части на '
                . 'дороге с разделительной полосой или направление движения для возвращения '
                . 'на правую проезжую часть.' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.20.1.png',
                'numeral' => '6.20.1',
                'title' => '',
                'text' => '' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.20.2.png',
                'numeral' => '6.20.2',
                'title' => 'Аварийный выход',
                'text' => 'Указывает место в тоннеле, где находится аварийный выход.' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.21.1.png',
                'numeral' => '6.21.1',
                'title' => '',
                'text' => '' ,
                'sing_id' => 6
            ],
            [
                'url' => '/img/signs/6/6.21.2.png',
                'numeral' => '6.21.2',
                'title' => 'Направление движения к аварийному выходу',
                'text' => 'Указывает направление к аварийному выходу и расстояние до него. '
                . '<p>На знаках 6.9.1, 6.9.2, 6.10.1 и 6.10.2, установленных вне населенного пункта, '
                . 'зеленый или синий фон означает, что движение к указанному населенному пункту или '
                . 'объекту будет осуществляться соответственно по автомагистрали или другой дороге. '
                . 'На знаках 6.9.1, 6.9.2, 6.10.1 и 6.10.2, установленных в населенном пункте, '
                . 'вставки с фоном зеленого или синего цвета означают, что движение к указанному '
                . 'населенному пункту или объекту после выезда из данного населенного пункта будет '
                . 'осуществляться соответственно по автомагистрали или другой дороге; белый фон '
                . 'знака означает, что указанный объект находится в данном населенном пункте.</p>' ,
                'sing_id' => 6
            ],
            
        ];
        
        Sings::insert($sing);
    }

}
