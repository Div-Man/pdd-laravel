<?php

use Illuminate\Database\Seeder;
use App\SubItems;

class SubItems8TableSeeder extends Seeder
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
                'title' => '8.',
                'text' => 'Начало движения, маневрирование.',
                'item_id' => 8
            ],
             [
                'title' => '8.1.',
                'text' => ' Перед началом движения, перестроением, поворотом (разворотом) и '
                 . 'остановкой водитель обязан подавать сигналы световыми указателями '
                 . 'поворота соответствующего направления, а если они отсутствуют или '
                 . 'неисправны - рукой. При выполнении маневра не должны создаваться '
                 . 'опасность для движения, а также помехи другим участникам дорожного движения.'
                 . '<p>Сигналу левого поворота (разворота) соответствует вытянутая в '
                 . 'сторону левая рука либо правая, вытянутая в сторону и согнутая в '
                 . 'локте под прямым углом вверх. Сигналу правого поворота соответствует '
                 . 'вытянутая в сторону правая рука либо левая, вытянутая в сторону '
                 . 'и согнутая в локте под прямым углом вверх. Сигнал торможения '
                 . 'подается поднятой вверх левой или правой рукой.</p>',
                'item_id' => 8
            ],
             [
                'title' => '8.2.',
                'text' => 'Подача сигнала указателями поворота или рукой должна производиться '
                 . 'заблаговременно до начала выполнения маневра и прекращаться немедленно '
                 . 'после его завершения (подача сигнала рукой может быть закончена непосредственно '
                 . 'перед выполнением маневра). При этом сигнал не должен вводить в '
                 . 'заблуждение других участников движения.'
                 . '<p>Подача сигнала не дает водителю преимущества и не освобождает '
                 . 'его от принятия мер предосторожности.</p>',
                'item_id' => 8
            ],[
                'title' => '8.3.',
                'text' => 'При выезде на дорогу с прилегающей территории водитель должен '
                . 'уступить дорогу транспортным средствам и пешеходам, движущимся '
                . 'по ней, а при съезде с дороги – пешеходам и велосипедистам, '
                . 'путь движения которых он пересекает.',
                'item_id' => 8
            ],[
                'title' => '8.4.',
                'text' => 'При перестроении водитель должен уступить дорогу транспортным '
                . 'средствам, движущимся попутно без изменения направления движения. '
                . 'При одновременном перестроении транспортных средств, движущихся '
                . 'попутно, водитель должен уступить дорогу транспортному средству, находящемуся справа.',
                'item_id' => 8
            ],[
                'title' => '8.5.',
                'text' => 'Перед поворотом направо, налево или разворотом водитель '
                . 'обязан заблаговременно занять соответствующее крайнее положение '
                . 'на проезжей части, предназначенной для движения в данном направлении, '
                . 'кроме случаев, когда совершается поворот при въезде на '
                . 'перекресток, где организовано круговое движение.'
                . '<p>При наличии слева трамвайных путей попутного направления, 
                    расположенных на одном уровне с проезжей частью, поворот налево 
                    и разворот должны выполняться с них, если знаками 5.15.1 или 5.15.2 
                    либо разметкой 1.18 не предписан иной порядок движения. При этом 
                    не должно создаваться помех трамваю.</p>',
                'item_id' => 8
            ],[
                'title' => '8.6.',
                'text' => 'Поворот должен осуществляться таким образом, чтобы при '
                . 'выезде с пересечения проезжих частей транспортное средство не '
                . 'оказалось на стороне встречного движения.'
                . '<p>При повороте направо транспортное средство должно двигаться по '
                . 'возможности ближе к правому краю проезжей части.</p>',
                'item_id' => 8
            ],
             [
                'title' => '8.7.',
                'text' => 'Если транспортное средство из-за своих габаритов или по '
                 . 'другим причинам не может выполнить поворот с соблюдением '
                 . 'требований пункта 8.5 Правил, допускается отступать от них '
                 . 'при условии обеспечения безопасности движения и если это '
                 . 'не создаст помех другим транспортным средствам.',
                'item_id' => 8
            ],
             [
                'title' => '8.8.',
                'text' => 'При повороте налево или развороте вне перекрестка водитель '
                 . 'безрельсового транспортного средства обязан уступить дорогу встречным '
                 . 'транспортным средствам и трамваю попутного направления.'
                 . '<p>Если при развороте вне перекрестка ширина проезжей части 
                     недостаточна для выполнения маневра из крайнего левого 
                     положения, его допускается производить от правого края 
                     проезжей части (с правой обочины). При этом водитель 
                     должен уступить дорогу попутным и встречным транспортным средствам.</p>',
                'item_id' => 8
            ],[
                'title' => '8.9.',
                'text' => 'В случаях, когда траектории движения транспортных средств пересекаются, '
                . 'а очередность проезда не оговорена Правилами дорожного движения, дорогу '
                . 'должен уступить водитель, к которому транспортное средство приближается справа.',
                'item_id' => 8
            ],
             [
                'title' => '8.10.',
                'text' => 'При наличии полосы торможения водитель, намеревающийся повернуть, '
                 . 'должен своевременно перестроиться на эту полосу и снижать скорость только на ней.'
                 . '<p>При наличии в месте въезда на дорогу полосы разгона водитель должен '
                 . 'двигаться по ней и перестраиваться на соседнюю полосу, уступая дорогу '
                 . 'транспортным средствам, движущимся по этой дороге.</p>',
                'item_id' => 8
            ],
             [
                'title' => '8.11.',
                'text' => '<span class="item-bold">Разворот запрещается:</span>'
                 . '<ul>'
                 . '<li>на пешеходных переходах;</li>'
                 . '<li>в тоннелях;</li>'
                 . '<li>на мостах, путепроводах, эстакадах и под ними;</li>'
                 . '<li>на железнодорожных переездах;</li>'
                 . '<li>в местах с видимостью дороги хотя бы в одном направлении менее 100 м;</li>'
                 . '<li>в местах расположения остановок маршрутных транспортных средств.</li>'
                 . '</ul>',
                'item_id' => 8
            ],
             [
                'title' => '8.12.',
                'text' => 'Движение транспортного средства задним ходом разрешается при условии, '
                 . 'что этот маневр будет безопасен и не создаст помех другим участникам движения. '
                 . 'При необходимости водитель должен прибегнуть к помощи других лиц.'
                 . '<p>Движение задним ходом запрещается на перекрестках и в местах, где '
                 . 'запрещен разворот согласно пункту 8.11 Правил.</p>',
                'item_id' => 8
            ],
         ];
         
         SubItems::insert($subItems);
    }
}