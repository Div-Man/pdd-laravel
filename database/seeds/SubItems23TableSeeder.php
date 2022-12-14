<?php

use Illuminate\Database\Seeder;
use App\SubItems;

class SubItems23TableSeeder extends Seeder
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
                'title' => '23.',
                'text' => 'Перевозка грузов',
                'item_id' => 23
            ],
             [
                'title' => '23.1.',
                'text' => 'Масса перевозимого груза и распределение нагрузки по осям не '
                 . 'должны превышать величин, установленных предприятием-изготовителем '
                 . 'для данного транспортного средства.',
                'item_id' => 23
            ],
             [
                'title' => '23.2.',
                'text' => 'Перед началом и во время движения водитель обязан контролировать '
                 . 'размещение, крепление и состояние груза во избежание его падения, '
                 . 'создания помех для движения.',
                'item_id' => 23
            ],
             [
                'title' => '23.3.',
                'text' => 'Перевозка груза допускается при условии, что он:<ul>'
                 .'<li>не ограничивает водителю обзор;</li>'
                 . '<li>не затрудняет управление и не нарушает устойчивость транспортного средства;</li>'
                 . '<li>не закрывает внешние световые приборы и световозвращатели, '
                 . 'регистрационные и опознавательные знаки, а также не препятствует '
                 . 'восприятию сигналов, подаваемых рукой;</li>'
                 . '<li>не создает шум, не пылит, не загрязняет дорогу и окружающую среду.</li>'
                 . '</ul>'
                 . '<p>Если состояние и размещение груза не удовлетворяют указанным '
                 . 'требованиям, водитель обязан принять меры к устранению '
                 . 'нарушений перечисленных правил перевозки либо прекратить дальнейшее движение.</p>',
                'item_id' => 23
            ],
             [
                'title' => '23.4.',
                'text' => 'Груз, выступающий за габариты транспортного средства спереди и '
                 . 'сзади более чем на 1 м или сбоку более чем на 0,4 м от внешнего '
                 . 'края габаритного огня, должен быть обозначен опознавательными '
                 . 'знаками «Крупногабаритный груз», а в темное время суток и в условиях '
                 . 'недостаточной видимости, кроме того, спереди – фонарем или световозвращателем '
                 . 'белого цвета, сзади – фонарем или световозвращателем красного цвета.',
                'item_id' => 23
            ],
             [
                'title' => '23.5.',
                'text' => 'Перевозка тяжеловесных и опасных грузов, движение транспортного '
                 . 'средства, габаритные параметры которого с грузом или без него превышают '
                 . 'по ширине 2,55 м (2,6 м – для рефрижераторов и изотермических кузовов), '
                 . 'по высоте 4 м от поверхности проезжей части, по длине (включая один прицеп) '
                 . '20 м, либо движение транспортного средства с грузом, выступающим '
                 . 'за заднюю точку габарита транспортного средства более чем на 2 м, а '
                 . 'также движение автопоездов с двумя и более прицепами осуществляются '
                 . 'в соответствии со специальными правилами.'
                 . '<p>Международные автомобильные перевозки осуществляются в соответствии 
                     с требованиями к транспортным средствам и правилами перевозки, 
                     установленными международными договорами Российской Федерации.
                (п. 23.5 в ред. Постановления Правительства РФ от 24.01.2001 N 67)</p>',
                'item_id' => 23
            ],
            
         ];
         
         SubItems::insert($subItems);
    }
}