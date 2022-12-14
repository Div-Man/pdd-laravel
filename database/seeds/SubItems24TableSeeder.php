<?php

use Illuminate\Database\Seeder;
use App\SubItems;

class SubItems24TableSeeder extends Seeder
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
                'title' => '24.',
                'text' => 'Дополнительные требования к движению велосипедистов и водителей мопедов',
                'item_id' => 24
            ],
             [
                'title' => '24.1.',
                'text' => 'Движение велосипедистов в возрасте старше 14 лет должно осуществляться '
                 . 'по велосипедной, велопешеходной дорожкам или полосе для велосипедистов.',
                'item_id' => 24
            ],
             [
                'title' => '24.2.',
                'text' => 'Допускается движение велосипедистов в возрасте старше 14 лет по '
                 . 'правому краю проезжей части — в следующих случаях:<ul>'
                 .'<li>отсутствуют велосипедная и велопешеходная дорожки, полоса для '
                 . 'велосипедистов либо отсутствует возможность двигаться по ним;</li>'
                 . '<li>габаритная ширина велосипеда, прицепа к нему либо перевозимого груза превышает 1 м;</li>'
                 . '<li>движение велосипедистов осуществляется в колоннах;</li>'
                 . '<li>по обочине — в случае, если отсутствуют велосипедная и '
                 . 'велопешеходная дорожки, полоса для велосипедистов либо отсутствует '
                 . 'возможность двигаться по ним или по правому краю проезжей части;</li>'
                 . '<li>по тротуару или пешеходной дорожке - в следующих случаях: отсутствуют '
                 . 'велосипедная и велопешеходная дорожки, полоса для велосипедистов либо '
                 . 'отсутствует возможность двигаться по ним, а также по правому краю '
                 . 'проезжей части или обочине;</li>'
                 . '<li>велосипедист сопровождает велосипедиста в возрасте до 7 лет либо '
                 . 'перевозит ребенка в возрасте до 7 лет на дополнительном сиденье, в '
                 . 'велоколяске или в прицепе, предназначенном для эксплуатации с велосипедом.</li>'
                 . '</ul>'
                 . '<p>Колонны велосипедистов, гужевых повозок (саней), верховых и '
                 . 'вьючных животных при движении по проезжей части должны быть '
                 . 'разделены на группы по 10 велосипедистов, верховых и вьючных '
                 . 'животных и по 5 повозок (саней). Для облегчения обгона расстояние '
                 . 'между группами должно составлять 80—100 м.</p>',
                'item_id' => 24
            ],
             [
                'title' => '24.3.',
                'text' => 'Движение велосипедистов в возрасте от 7 до 14 лет должно осуществляться '
                 . 'только по тротуарам, пешеходным, велосипедным и велопешеходным дорожкам, '
                 . 'а также в пределах пешеходных зон.',
                'item_id' => 24
            ],
             [
                'title' => '24.4.',
                'text' => 'Движение велосипедистов в возрасте младше 7 лет должно осуществляться '
                 . 'только по тротуарам, пешеходным и велопешеходным дорожкам '
                 . '(на стороне для движения пешеходов), а также в пределах пешеходных зон.',
                'item_id' => 24
            ],
             [
                'title' => '24.5.',
                'text' => 'При движении велосипедистов по правому краю проезжей части в '
                 . 'случаях, предусмотренных настоящими Правилами, велосипедисты '
                 . 'должны двигаться только в один ряд.'
                 . '<p>Допускается движение колонны велосипедистов в два ряда в случае, '
                 . 'если габаритная ширина велосипедов не превышает 0,75 м.</p>'
                 . '<p>Колонна велосипедистов должна быть разделена на группы по '
                 . '10 велосипедистов в случае однорядного движения либо на '
                 . 'группы по 10 пар в случае двухрядного движения. '
                 . 'Для облегчения обгона расстояние между группами должно составлять 80 - 100 м.</p>',
                'item_id' => 24
            ],
             [
                'title' => '24.6.',
                'text' => 'Если движение велосипедиста по тротуару, пешеходной '
                 . 'дорожке, обочине или в пределах пешеходных зон подвергает '
                 . 'опасности или создает помехи для движения иных лиц, '
                 . 'велосипедист должен спешиться и руководствоваться '
                 . 'требованиями, предусмотренными настоящими Правилами '
                 . 'для движения пешеходов.',
                'item_id' => 24
            ],
             [
                'title' => '24.7.',
                'text' => 'Водители мопедов должны двигаться по правому краю '
                 . 'проезжей части в один ряд либо по полосе для велосипедистов.'
                 . '<p>Допускается движение водителей мопедов по обочине, если это '
                 . 'не создает помех пешеходам.</p>',
                'item_id' => 24
            ],
             [
                'title' => '24.8.',
                'text' => 'Велосипедистам и водителям мопедов запрещается:<ul>'
                 .'<li>управлять велосипедом, мопедом, не держась за руль хотя бы одной рукой;</li>'
                 . '<li>перевозить груз, который выступает более чем на 0,5 м по длине или '
                 . 'ширине за габариты, или груз, мешающий управлению;</li>'
                 . '<li>перевозить пассажиров, если это не предусмотрено конструкцией транспортного средства;</li>'
                 . '<li>перевозить детей до 7 лет при отсутствии специально оборудованных для них мест;</li>'
                 . '<li>поворачивать налево или разворачиваться на дорогах с трамвайным движением и на '
                 . 'дорогах, имеющих более одной полосы для движения в данном направлении;</li>'
                 . '<li>двигаться по дороге без застегнутого мотошлема (для водителей мопедов);</li>'
                  . '<li>пересекать дорогу по пешеходным переходам.</li>'
                 . '</ul>',
                'item_id' => 24
            ],
             [
                'title' => '24.9.',
                'text' => 'Запрещается буксировка велосипедов и мопедов, а также буксировка '
                 . 'велосипедами и мопедами, кроме буксировки прицепа, предназначенного для '
                 . 'эксплуатации с велосипедом или мопедом.',
                'item_id' => 24
            ],
              [
                'title' => '24.10.',
                'text' => 'При движении в темное время суток или в условиях недостаточной видимости '
                  . 'велосипедистам и водителям мопедов рекомендуется иметь при себе '
                  . 'предметы со световозвращающими элементами и обеспечивать видимость '
                  . 'этих предметов водителями других транспортных средств.',
                'item_id' => 24
            ],
              [
                'title' => '24.11.',
                'text' => 'В велосипедной зоне: велосипедисты имеют преимущество перед механическими '
                  . 'транспортными средствами, а также могут двигаться по всей ширине проезжей '
                  . 'части, предназначенной для движения в данном направлении, при соблюдении '
                  . 'требований пунктов 9.11 - 9.3 и 9.6 - 9.12 настоящих Правил;',
                'item_id' => 24
            ],  
         ];
         
         SubItems::insert($subItems);
    }
}