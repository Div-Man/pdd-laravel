<?php

use Illuminate\Database\Seeder;
use App\SubItems;

class SubItems18TableSeeder extends Seeder
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
                'title' => '18.',
                'text' => 'Приоритет маршрутных транспортных средств',
                'item_id' => 18
            ],
             [
                'title' => '18.1.',
                'text' => 'Вне перекрестков, где трамвайные пути пересекают проезжую часть, '
                 . 'трамвай имеет преимущество перед безрельсовыми транспортными '
                 . 'средствами, кроме случаев выезда из депо.',
                'item_id' => 18
            ],
             [
                'title' => '18.2.',
                'text' => 'На дорогах с полосой для маршрутных транспортных средств, '
                 . 'обозначенных знаками 5.11.1, 5.13.1, 5.13.2 и 5.14, запрещаются '
                 . 'движение и остановка других транспортных средств '
                 . 'на этой полосе, за исключением:<ul>'
                 .'<li>школьных автобусов;</li>'
                 . '<li>транспортных средств, используемых в качестве легкового такси;</li>'
                 . '<li>транспортных средств, которые используются для перевозки '
                 . 'пассажиров, имеют, за исключением места водителя, более 8 мест '
                 . 'для сидения, технически допустимая максимальная масса которых '
                 . 'превышает 5 тонн, перечень которых утверждается органами '
                 . 'исполнительной власти субъектов Российской Федерации - гг. '
                 . 'Москвы, Санкт-Петербурга и Севастополя;</li>'
                 . '<li>транспортных средств, которыми в период с 23 февраля по '
                 . '14 марта 2019 г. перевозятся определенные Правительством '
                 . 'Красноярского края по согласованию с Министерством транспорта '
                 . 'Российской Федерации, Министерством внутренних дел Российской '
                 . 'Федерации и автономной некоммерческой организацией "Исполнительная '
                 . 'дирекция XXIX Всемирной зимней универсиады 2019 года в г. '
                 . 'Красноярске" клиентские группы (представители национальных '
                 . 'федераций студенческого спорта, участники спортивных соревнований, '
                 . 'представители Международной федерации студенческого спорта (FISU), '
                 . 'представители средств массовой информации, технические официальные '
                 . 'лица, иные лица, принимающие участие в мероприятиях XXIX Всемирной '
                 . 'зимней универсиады 2019 года в г. Красноярске), при наличии аккредитационного '
                 . 'свидетельства, выдаваемого автономной некоммерческой '
                 . 'организацией "Исполнительная дирекция XXIX Всемирной зимней '
                 . 'универсиады 2019 года в г. Красноярске".</li>'
                 . '</ul>'
                 . '<p>На полосах для маршрутных транспортных средств разрешено движение '
                 . 'велосипедистов в случае, если такая полоса располагается справа.</p>'
                 . '<p>Водители транспортных средств, допущенных к движению по полосам для '
                 . 'маршрутных транспортных средств, при въезде на перекресток с такой '
                 . 'полосы могут отступать от требований дорожных знаков 4.1.1 - '
                 . '4.1.6, 5.15.1 и 5.15.2 для продолжения движения по такой полосе.</p>'
                 . '<p>Если эта полоса отделена от остальной проезжей части прерывистой линией '
                 . 'разметки, то при поворотах транспортные средства должны перестраиваться '
                 . 'на нее. Разрешается также в таких местах заезжать на эту полосу при '
                 . 'въезде на дорогу и для посадки и высадки пассажиров у правого края '
                 . 'проезжей части при условии, что это не создает помех маршрутным транспортным средствам.</p>',
                'item_id' => 18
            ],
             [
                'title' => '18.3.',
                'text' => 'В населенных пунктах водители должны уступать дорогу троллейбусам и 
                    автобусам, начинающим движение от обозначенного места остановки. Водители 
                    троллейбусов и автобусов могут начинать движение только после того, 
                    как убедятся, что им уступают дорогу.
                (в ред. Постановления Правительства РФ от 25.09.2003 N 595)',
                'item_id' => 18
            ],
         ];
         
         SubItems::insert($subItems);
    }
}
