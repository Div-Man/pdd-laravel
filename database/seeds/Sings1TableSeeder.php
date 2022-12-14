<?php

use Illuminate\Database\Seeder;
use App\Sings;

class Sings1TableSeeder extends Seeder
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
                'title' => '1. Предупреждающие знаки',
                'text' => 'Предупреждающие знаки информируют водителей о приближении '
                . 'к опасному участку дороги, движение по которому требует принятия мер, '
                . 'соответствующих обстановке.',
                'sing_id' => 1
            ],
            
             [
                'url' => '/img/signs/1/1.1.png',
                'numeral' => '1.1',
                'title' => 'Железнодорожный переезд со шлагбаумом',
                'text' => '',
                'sing_id' => 1
            ], 
            [
                'url' => '/img/signs/1/1.2.png',
                'numeral' => '1.2',
                'title' => 'Железнодорожный переезд без шлагбаума',
                'text' => '',
                'sing_id' => 1
            ],
             [
                'url' => '/img/signs/1/1.3.1.png',
                'numeral' => '1.3.1',
                'title' => '',
                'text' => 'Однопутная железная дорога',
                 'sing_id' => 1
            ],
             [
                'url' => '/img/signs/1/1.3.2.png',
                 'numeral' => '1.3.2',
                'title' => 'Многопутная железная дорога',
                'text' => ''
                 . '<p>Обозначение необорудованного шлагбаумом переезда через '
                 . 'железную дорогу: 1.3.1 — с одним путем, 1.3.2 — с двумя путями и более.</p>',
                 'sing_id' => 1
            ],
             [
                'url' => '/img/signs/1/1.4.1.png',
                 'numeral' => '1.4.1',
                'title' => '',
                'text' => '',
                 'sing_id' => 1
            ],
             [
                'url' => '/img/signs/1/1.4.2.png',
                 'numeral' => '1.4.2',
                'title' => '',
                'text' => '',
                 'sing_id' => 1
            ],
             [
                'url' => '/img/signs/1/1.4.3.png',
                 'numeral' => '1.4.3',
                'title' => '',
                'text' => '',
                 'sing_id' => 1
            ],
             [
                'url' => '/img/signs/1/1.4.4.png',
                 'numeral' => '1.4.4',
                'title' => '',
                'text' => '',
                 'sing_id' => 1
            ],
             [
                'url' => '/img/signs/1/1.4.5.png',
                 'numeral' => '1.4.5',
                'title' => '',
                'text' => '',
                 'sing_id' => 1
            ],
             [
                'url' => '/img/signs/1/1.4.6.png',
                 'numeral' => '1.4.6',
                'title' => 'Приближение к железнодорожному переезду',
                'text' => '<p>Дополнительное предупреждение о приближении к железнодорожному '
                 . 'переезду вне населенных пунктов</p>',
                 'sing_id' => 1
            ],
             [
                'url' => '/img/signs/1/1.5.png',
                 'numeral' => '1.5',
                'title' => 'Пересечение с трамвайной линией',
                'text' => '',
                 'sing_id' => 1
            ],
             [
                'url' => '/img/signs/1/1.6.png',
                 'numeral' => '1.6',
                'title' => 'Пересечение равнозначных дорог',
                'text' => '',
                 'sing_id' => 1
            ],
             [
                'url' => '/img/signs/1/1.7.png',
                 'numeral' => '1.7',
                'title' => 'Пересечение с круговым движением',
                'text' => '',
                 'sing_id' => 1
            ],
             [
                'url' => '/img/signs/1/1.8.png',
                 'numeral' => '1.8',
                'title' => 'Светофорное регулирование',
                'text' => 'Перекресток, пешеходный переход или участок дороги, движение '
                 . 'на котором регулируется светофором.',
                 'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.9.png',
                'numeral' => '1.9',
                'title' => 'Разводной мост',
                'text' => '<p>Разводной мост или паромная переправа.</p>',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.10.png',
                'numeral' => '1.10',
                'title' => 'Выезд на набережную',
                'text' => '<p>Выезд на набережную или берег.</p>',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.11.1.png',
                'numeral' => '1.11.1',
                'title' => '',
                'text' => '',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.11.2.png',
                'numeral' => '1.11.2',
                'title' => 'Опасный поворот',
                'text' => '<p>Закругление дороги малого радиуса или с ограниченной '
                . 'видимостью: 1.11.1 — направо, 1.11.2 — налево.</p>',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.12.1.png',
                'numeral' => '1.12.1',
                'title' => '',
                'text' => '',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.12.2.png',
                'numeral' => '1.12.2',
                'title' => 'Опасные повороты',
                'text' => '<p>Участок дороги с опасными поворотами: 1.12.1 — с первым '
                . 'поворотом направо, 1.12.2 — с первым поворотом налево.</p>',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.13.png',
                'numeral' => '1.13',
                'title' => 'Крутой спуск',
                'text' => '',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.14.png',
                'numeral' => '1.14',
                'title' => 'Крутой подъем',
                'text' => '',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.15.png',
                'numeral' => '1.15',
                'title' => 'Скользкая дорога',
                'text' => '<p>Участок дороги с повышенной скользкостью проезжей части.</p>',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.16.png',
                'numeral' => '1.16',
                'title' => 'Неровная дорога',
                'text' => '<p>Участок дороги, имеющий неровности на проезжей части '
                . '(волнистость, выбоины, неплавные сопряжения с мостами и тому подобное).</p>',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.17.png',
                'numeral' => '1.17',
                'title' => 'Искусственная неровность',
                'text' => '<p>Участок дороги с искусственной неровностью (неровностями) '
                . 'для принудительного снижения скорости.</p>',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.18.png',
                'numeral' => '1.18',
                'title' => 'Выброс гравия',
                'text' => '<p>Участок дороги, на котором возможен выброс гравия, щебня и '
                . 'тому подобного из-под колес транспортных средств.</p>',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.19.png',
                'numeral' => '1.19',
                'title' => 'Опасная обочина',
                'text' => '<p>Участок дороги, на котором съезд на обочину опасен.</p>',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.20.1.png',
                'numeral' => '1.20.1',
                'title' => '',
                'text' => '',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.20.2.png',
                'numeral' => '1.20.2',
                'title' => '',
                'text' => '',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.20.3.png',
                'numeral' => '1.20.3',
                'title' => 'Сужение дороги',
                'text' =>'<p>Сужение с обеих сторон — 1.20.1, справа — 1.20.2, слева — 1.20.3.</p>',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.21.png',
                'numeral' => '1.21',
                'title' => 'Двустороннее движение',
                'text' => '<p>Начало участка дороги (проезжей части) с встречным движением.</p>',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.22.png',
                'numeral' => '1.22',
                'title' => 'Пешеходный переход',
                'text' => '',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.23.png',
                'numeral' => '1.23',
                'title' => 'Дети',
                'text' => '<p>Участок дороги вблизи детского учреждения (школы, '
                . 'оздоровительного лагеря и тому подобного), на проезжей части '
                . 'которого возможно появление детей.</p>',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.24.png',
                'numeral' => '1.24',
                'title' => 'Пересечение с велосипедной дорожкой или велопешеходной дорожкой',
                'text' => '',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.25.png',
                'numeral' => '1.25',
                'title' => 'Дорожные работы',
                'text' => '',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.26.png',
                'numeral' => '1.26',
                'title' => 'Перегон скота',
                'text' => '' ,
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.27.png',
                'numeral' => '1.27',
                'title' => 'Дикие животные',
                'text' => '',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.28.png',
                'numeral' => '1.28',
                'title' => 'Падение камней',
                'text' => '<p>Участок дороги, на котором возможны '
                . 'обвалы, оползни, падение камней.</p>',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.29.png',
                'numeral' => '1.29',
                'title' => 'Боковой ветер',
                'text' => '',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.30.png',
                'numeral' => '1.30',
                'title' => 'Низколетящие самолеты',
                'text' => '',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.31.png',
                'numeral' => '1.31',
                'title' => 'Тоннель',
                'text' => '<p>Тоннель, в котором отсутствует искусственное освещение, или '
                . 'тоннель, видимость въездного портала которого ограничена.</p>',
                'sing_id' => 1
            ],
            [
                'url' => '/img/signs/1/1.32.png',
                'numeral' => '1.32',
                'title' => 'Затор',
                'text' => '<p>Участок дороги, на котором образовался затор.</p>',
                'sing_id' => 1
                 
            ],
            [
                'url' => '/img/signs/1/1.33.png',
                'numeral' => '1.33',
                'title' => 'Прочие опасности',
                'text' => '<p>Участок дороги, на котором имеются опасности, не предусмотренные '
                . 'другими предупреждающими знаками.</p>',
                'sing_id' => 1
                 
            ],
            [
                'url' => '/img/signs/1/1.34.1.png',
                'numeral' => '1.34.1',
                'title' => '',
                'text' => '',
                'sing_id' => 1
                 
            ],
            [
                'url' => '/img/signs/1/1.34.2.png',
                'numeral' => '1.34.2',
                'title' => 'Направление поворота',
                'text' => '<p>Направление движения на закруглении дороги малого радиуса с '
                . 'ограниченной видимостью. Направление объезда ремонтируемого участка дороги.</p>',
                'sing_id' => 1
                 
            ],
            [
                'url' => '/img/signs/1/1.34.3.png',
                'numeral' => '1.34.3',
                'title' => 'Направление поворота',
                'text' => '<p>Направления движения на Т-образном перекрестке или разветвлении дорог. '
                . 'Направления объезда ремонтируемого участка дороги.</p>',
                'sing_id' => 1
                 
            ],
            [
                'url' => '/img/signs/1/1.35.png',
                'numeral' => '1.35',
                'title' => 'Участок перекрестка',
                'text' => '<p>Обозначение приближения к перекрестку, участок которого обозначен '
                . 'разметкой 1.26  и на который запрещается выезжать, если впереди '
                . 'по пути следования образовался затор, который вынудит водителя '
                . 'остановиться, создав препятствие для движения транспортных '
                . 'средств в поперечном направлении, за исключением поворота '
                . 'направо или налево в случаях, установленных настоящими Правилами. </p>',
                'sing_id' => 1
                 
            ],
            [
                'url' => '',
                'numeral' => '',
                'title' => 'Предупреждающие знаки 1.1, 1.2, 1.5 — 1.33',
                'text' => 'Предупреждающие знаки 1.1, 1.2, 1.5 — 1.33 вне населенных '
                . 'пунктов устанавливаются на расстоянии 150 — 300 м, в населенных '
                . 'пунктах — на расстоянии 50 — 100 м до начала опасного участка. '
                . 'При необходимости знаки могут устанавливаться и на ином '
                . 'расстоянии, которое в этом случае указывается на табличке 8.1.1.',
                'sing_id' => 1
                 
            ],
            [
                'url' => '',
                'numeral' => '',
                'title' => 'Знаки 1.13 и 1.14 могут',
                'text' => 'Знаки 1.13 и 1.14 могут устанавливаться без таблички 8.1.1 '
                . 'непосредственно перед началом спуска или подъема, если спуски и '
                . 'подъемы следуют друг за другом.',
                'sing_id' => 1
                 
            ],
            [
                'url' => '',
                'numeral' => '',
                'title' => 'Знак 1.25 при проведении краткосрочных',
                'text' => 'Знак 1.25 при проведении краткосрочных работ на проезжей части '
                . 'может устанавливаться без таблички 8.1.1 на расстоянии 10 — 15 м до '
                . 'места проведения работ.',
                'sing_id' => 1
                 
            ],
            [
                'url' => '',
                'numeral' => '',
                'title' => 'Знак 1.32 применяется в качестве',
                'text' => 'Знак 1.32 применяется в качестве временного или в знаках с изменяемым '
                . 'изображением перед перекрестком, откуда возможен объезд участка дороги, '
                . 'на котором образовался затор.',
                'sing_id' => 1
            ],
            [
                'url' => '',
                'numeral' => '',
                'title' => 'Знак 1.35 устанавливается',
                'text' => 'Знак 1.35 устанавливается на границе перекрестка. В случае если '
                . 'на сложных перекрестках невозможно установить дорожный знак на границе '
                . 'перекрестка, его устанавливают на расстоянии не более 30 метров до '
                . 'границы перекрестка. ',
                'sing_id' => 1
            ],
            [
                'url' => '',
                'numeral' => '',
                'title' => 'Вне населенных пунктов знаки',
                'text' => 'Вне населенных пунктов знаки 1.1, 1.2, 1.9, 1.10, 1.23 и 1.25 повторяются. '
                . 'Второй знак устанавливается на расстоянии не менее 50 м до начала '
                . 'опасного участка. Знаки 1.23 и 1.25 повторяются и в населенных '
                . 'пунктах непосредственно в начале опасного участка.',
                'sing_id' => 1
            ],
              
        ];
        
        Sings::insert($sing);
    }
}
