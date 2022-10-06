<?php

use Illuminate\Database\Seeder;
use App\SubItems;

class SubItems20TableSeeder extends Seeder
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
                'title' => '20.',
                'text' => 'Буксировка механических транспортных средств',
                'item_id' => 20
            ],
             [
                'title' => '20.1.',
                'text' => 'Буксировка на жесткой или гибкой сцепке должна осуществляться только '
                 . 'при наличии водителя за рулем буксируемого транспортного средства, '
                 . 'кроме случаев, когда конструкция жесткой сцепки обеспечивает при '
                 . 'прямолинейном движении следование буксируемого транспортного средства '
                 . 'по траектории буксирующего.',
                'item_id' => 20
            ],
             [
                'title' => '20.2.',
                'text' => 'При буксировке на гибкой или жесткой сцепке запрещается '
                 . 'перевозка людей в буксируемом автобусе, троллейбусе и в кузове '
                 . 'буксируемого грузового автомобиля, а при буксировке путем частичной '
                 . 'погрузки – нахождение людей в кабине или кузове буксируемого '
                 . 'транспортного средства, а также в кузове буксирующего.',
                'item_id' => 20
            ],
             [
                'title' => '20.2.1.',
                'text' => 'При буксировке управление буксирующими транспортными средствами '
                 . 'должно осуществляться водителями, имеющими право на управление '
                 . 'транспортными средствами в течение 2 и более лет.',
                'item_id' => 20
            ],
             [
                'title' => '20.3.',
                'text' => 'При буксировке на гибкой сцепке должно быть обеспечено расстояние '
                 . 'между буксирующим и буксируемым транспортными средствами в '
                 . 'пределах 4—6 м, а при буксировке на жесткой сцепке – не более 4 м.'
                 . '<p>Гибкое связующее звено должно быть обозначено в соответствии с пунктом 9 Основных положений.
(абзац введен Постановлением Правительства РФ от 25.09.2003 N 595)</p>',
                'item_id' => 20
            ],
             [
                'title' => '20.4.',
                'text' => 'Буксировка запрещается:<ul>'
                 .'<li>транспортных средств, у которых не действует рулевое '
                 . 'управление (допускается буксировка методом частичной погрузки);</li>'
                 . '<li>двух и более транспортных средств;</li>'
                 . '<li>транспортных средств с недействующей тормозной системой, '
                 . 'если их фактическая масса более половины фактической массы '
                 . 'буксирующего транспортного средства. При меньшей фактической '
                 . 'массе буксировка таких транспортных средств допускается только '
                 . 'на жесткой сцепке или методом частичной погрузки;</li>'
                 . '<li>мотоциклами без бокового прицепа, а также таких мотоциклов;</li>'
                 . '<li>в гололедицу на гибкой сцепке.</li>'
                 . '</ul>'
                 . '<p>Недействующими считаются системы, которые не позволяют 
                     водителю остановить транспортное средство или осуществить маневр при 
                     движении даже с минимальной скоростью.</p>',
                'item_id' => 20
            ],
             
         ];
         
         SubItems::insert($subItems);
    }
}
