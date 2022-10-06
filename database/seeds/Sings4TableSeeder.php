<?php

use Illuminate\Database\Seeder;
use App\Sings;

class Sings4TableSeeder extends Seeder {

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
                'title' => '4. Предписывающие знаки',
                'text' => '',
                'sing_id' => 4
            ],
            [
                'url' => '/img/signs/4/4.1.1.png',
                'numeral' => '4.1.1',
                'title' => 'Движение прямо',
                'text' => '',
                'sing_id' => 4
            ],
            [
                'url' => '/img/signs/4/4.1.2.png',
                'numeral' => '4.1.2',
                'title' => 'Движение направо',
                'text' => '',
                'sing_id' => 4
            ],
            [
                'url' => '/img/signs/4/4.1.3.png',
                'numeral' => '4.1.3',
                'title' => 'Движение налево',
                'text' => '',
                'sing_id' => 4
            ],
            [
                'url' => '/img/signs/4/4.1.4.png',
                'numeral' => '4.1.4',
                'title' => 'Движение прямо или направо',
                'text' => '',
                'sing_id' => 4
            ],
            [
                'url' => '/img/signs/4/4.1.5.png',
                'numeral' => '4.1.5',
                'title' => 'Движение прямо или налево',
                'text' => '',
                'sing_id' => 4
            ],
            [
                'url' => '/img/signs/4/4.1.6.png',
                'numeral' => '4.1.6',
                'title' => 'Движение направо или налево',
                'text' => '',
                'sing_id' => 4
            ],
            [
                'url' => '',
                'numeral' => '',
                'title' => 'Разрешается движение только в направлениях',
                'text' => '<p>Разрешается движение только в направлениях, указанных на знаках стрелками. '
                . 'Знаки, разрешающие поворот налево, разрешают и разворот (могут быть применены '
                . 'знаки 4.1.1 — 4.1.6 с конфигурацией стрелок, соответствующей требуемым '
                . 'направлениям движения на конкретном пересечении).</p>'
                . '<p>Действие знаков 4.1.1 — 4.1.6 не распространяется на '
                . 'маршрутные транспортные средства.</p>'
                . '<p>Действие знаков 4.1.1 — 4.1.6 распространяется на пересечение проезжих '
                . 'частей, перед которым установлен знак.</p>'
                . '<p>Действие знака 4.1.1, установленного в начале участка дороги, распространяется '
                . 'до ближайшего перекрестка. Знак не запрещает поворот направо во дворы '
                . 'и на другие прилегающие к дороге территории.</p>',
                'sing_id' => 4
            ],
            [
                'url' => '/img/signs/4/4.2.1.png',
                'numeral' => '4.2.1',
                'title' => 'Объезд препятствия справа',
                'text' => '',
                'sing_id' => 4
            ],
            [
                'url' => '/img/signs/4/4.2.2.png',
                'numeral' => '4.2.2',
                'title' => 'Объезд препятствия слева',
                'text' => 'Объезд разрешается только со стороны, указанной стрелкой.',
                'sing_id' => 4
            ],
            [
                'url' => '/img/signs/4/4.2.3.png',
                'numeral' => '4.2.3',
                'title' => 'Объезд препятствия справа или слева',
                'text' => 'Объезд разрешается с любой стороны.',
                'sing_id' => 4
            ],
            [
                'url' => '/img/signs/4/4.3.png',
                'numeral' => '4.3',
                'title' => 'Круговое движение',
                'text' => 'Разрешается движение в указанном стрелками направлении.',
                'sing_id' => 4
            ],
            [
                'url' => '/img/signs/4/4.4.1.png',
                'numeral' => '4.4.1',
                'title' => 'Велосипедная дорожка',
                'text' => '',
                'sing_id' => 4
            ],
            [
                'url' => '/img/signs/4/4.4.2.png',
                'numeral' => '4.4.2',
                'title' => 'Конец велосипедной дорожки',
                'text' => '',
                'sing_id' => 4
            ],
            [
                'url' => '/img/signs/4/4.5.1.png',
                'numeral' => '4.5.1',
                'title' => 'Пешеходная дорожка',
                'text' => 'Разрешается движение пешеходам и велосипедистам в случаях, '
                . 'указанных в пунктах 24.2, 24.3 и 24.4 настоящих Правил.',
                'sing_id' => 4
            ],
            [
                'url' => '/img/signs/4/4.5.2.png',
                'numeral' => '4.5.2',
                'title' => 'Пешеходная и велосипедная дорожка с совмещенным '
                . 'движением <br>(велопешеходная дорожка с совмещенным движением)',
                'text' => '',
                'sing_id' => 4
            ],
            [
                'url' => '/img/signs/4/4.5.3.png',
                'numeral' => '4.5.3',
                'title' => 'Конец пешеходной и велосипедной дорожки с совмещенным движением <br>'
                . '(конец велопешеходной дорожки с совмещенным движением)',
                'text' => '',
                'sing_id' => 4
            ],
            [
                'url' => '/img/signs/4/4.5.4.png',
                'numeral' => '4.5.4',
                'title' => '',
                'text' => '',
                'sing_id' => 4
            ],
            [
                'url' => '/img/signs/4/4.5.5.png',
                'numeral' => '4.5.5',
                'title' => 'Пешеходная и велосипедная дорожка с разделением движения',
                'text' => 'Велопешеходная дорожка с разделением на велосипедную и пешеходную '
                . 'стороны дорожки, выделенные конструктивно и (или) обозначенные '
                . 'горизонтальной разметкой 1.2, 1.23.2 и 1.23.3 или иным способом',
                'sing_id' => 4
            ],
            [
                'url' => '/img/signs/4/4.5.6.png',
                'numeral' => '4.5.6',
                'title' => '',
                'text' => '',
                'sing_id' => 4
            ],
            [
                'url' => '/img/signs/4/4.5.7.png',
                'numeral' => '4.5.7',
                'title' => 'Конец пешеходной и велосипедной дорожки с разделением движения '
                . '(конец велопешеходной дорожки с разделением движения)',
                'text' => '',
                'sing_id' => 4
            ],
            [
                'url' => '/img/signs/4/4.6.png',
                'numeral' => '4.6',
                'title' => 'Ограничение минимальной скорости',
                'text' => 'Разрешается движение только с указанной или большей скоростью (км/ч).',
                'sing_id' => 4
            ],
            [
                'url' => '/img/signs/4/4.7.png',
                'numeral' => '4.7',
                'title' => 'Конец зоны ограничения минимальной скорости',
                'text' => '',
                'sing_id' => 4
            ],
            [
                'url' => '/img/signs/4/4.8.1.png',
                'numeral' => '4.8.1',
                'title' => '',
                'text' => '',
                'sing_id' => 4
            ],
            [
                'url' => '/img/signs/4/4.8.2.png',
                'numeral' => '4.8.2',
                'title' => '',
                'text' => '',
                'sing_id' => 4
            ],
            [
                'url' => '/img/signs/4/4.8.3.png',
                'numeral' => '4.8.3',
                'title' => 'Направление движения транспортных средств с опасными грузами',
                'text' => 'Движение транспортных средств, оборудованных опознавательными '
                . 'знаками (информационными таблицами) «Опасный груз», разрешается только '
                . 'в направлении, указанном на знаке: 4.8.1 — прямо, 4.8.2 — направо, 4.8.3 — налево.',
                'sing_id' => 4
            ],
        ];



        Sings::insert($sing);
    }

}
