<?php

use Illuminate\Database\Seeder;
use App\SubItems;

class SubItems25TableSeeder extends Seeder
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
                'title' => '25.',
                'text' => 'Дополнительные требования к движению гужевых повозок, а также к прогону животных',
                'item_id' => 25
            ],
             [
                'title' => '25.1.',
                'text' => 'Управлять гужевой повозкой (санями), быть погонщиком вьючных, верховых '
                 . 'животных или стада при движении по дорогам разрешается лицам не моложе 14 лет',
                'item_id' => 25
            ],
             [
                'title' => '25.2.',
                'text' => 'Гужевые повозки (сани), верховые и вьючные животные должны '
                 . 'двигаться только в один ряд возможно правее. Допускается движение по '
                 . 'обочине, если это не создает помех пешеходам.'
                 . '<p>Колонны гужевых повозок (саней), верховых и вьючных животных при '
                 . 'движении по проезжей части должны быть разделены на группы по 10 '
                 . 'верховых и вьючных животных и по 5 повозок (саней). Для облегчения '
                 . 'обгона расстояние между группами должно составлять 80 - 100 м.</p>',
                'item_id' => 25
            ],
             [
                'title' => '25.3.',
                'text' => 'Водитель гужевой повозки (саней) при выезде на дорогу с прилегающей '
                 . 'территории или со второстепенной дороги в местах с ограниченной обзорностью '
                 . 'должен вести животное под уздцы.',
                'item_id' => 25
            ],
             [
                'title' => '25.4.',
                'text' => 'Животных по дороге следует перегонять, как правило, в '
                 . 'светлое время суток. Погонщики должны направлять животных как '
                 . 'можно ближе к правому краю дороги.',
                'item_id' => 25
            ],
             [
                'title' => '25.5.',
                'text' => 'При прогоне животных через железнодорожные пути '
                 . 'стадо должно быть разделено на группы такой численности, '
                 . 'чтобы с учетом количества погонщиков был обеспечен '
                 . 'безопасный прогон каждой группы.',
                'item_id' => 25
            ],
             [
                'title' => '25.6.',
                'text' => 'Водителям гужевых повозок (саней), погонщикам вьючных, верховых '
                 . 'животных и скота запрещается:<ul>'
                 .'<li>оставлять на дороге животных без надзора;</li>'
                 . '<li>прогонять животных через железнодорожные пути и дороги вне специально '
                 . 'отведенных мест, а также в темное время суток и в условиях '
                 . 'недостаточной видимости (кроме скотопрогонов на разных уровнях);</li>'
                 . '<li>вести животных по дороге с асфальто- и цементобетонным покрытием при наличии иных путей.</li>'
                 . '</ul>',
                'item_id' => 25
            ],
         
         ];
         
         SubItems::insert($subItems);
    }
}