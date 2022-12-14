<?php

use Illuminate\Database\Seeder;

use App\PermissionPdd;

class FaultlistTableSeeder extends Seeder
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
                'numeral' => '2.',
                'title' => 'Перечень неисправностей ТС',
                'text' => 'Настоящий Перечень устанавливает неисправности автомобилей, автобусов, '
                . 'автопоездов, прицепов, мотоциклов, мопедов, тракторов, других самоходных '
                . 'машин и условия, при которых запрещается их эксплуатация. Методы проверки '
                . 'приведенных параметров регламентированы ГОСТом '
                . 'Р 51709-2001 "Автотранспортные средства. Требования безопасности к '
                . 'техническому состоянию и методы проверки".',
                'permissions_id' => 2
            ],
             [
                 'url' => '',
                'numeral' => '1.',
                'title' => 'Тормозные системы',
                'text' => '',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '1.1.',
                'title' => '',
                'text' => 'Нормы эффективности торможения рабочей тормозной '
                 . 'системы не соответствуют ГОСТу Р 51709-2001.',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '1.2.',
                'title' => '',
                'text' => 'Нарушена герметичность гидравлического тормозного привода.',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '1.3.',
                'title' => '',
                'text' => 'Нарушение герметичности пневматического и пневмогидравлического '
                 . 'тормозных приводов вызывает падение давления воздуха при неработающем '
                 . 'двигателе на 0,05 МПа и более за 15 минут после полного приведения их в '
                 . 'действие. Утечка сжатого воздуха из колесных тормозных камер.',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '1.4.',
                'title' => '',
                'text' => 'Не действует манометр пневматического или '
                 . 'пневмогидравлического тормозных приводов.',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '1.5.',
                'title' => 'Стояночная тормозная система не обеспечивает неподвижное состояние:',
                'text' => '<ul>'
                 . '<li>транспортных средств с полной нагрузкой — на уклоне '
                 . 'до 16 процентов включительно;</li>'
                 . '<li>легковых автомобилей и автобусов в снаряженном состоянии — на уклоне '
                 . 'до 23 процентов включительно;</li>'
                 . '<li>грузовых автомобилей и автопоездов в снаряженном состоянии — 
                     на уклоне до 31 процента включительно.</li>'
                 . '</ul>',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '2.',
                'title' => 'Рулевое управление',
                'text' => '',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '2.1.',
                'title' => 'Суммарный люфт в рулевом управлении превышает следующие значения:',
                'text' => 'Суммарный люфт:'
                 . '<ul>'
                 . '<li>Легковые автомобили и созданные на их базе грузовые автомобили и '
                 . 'автобусы — не более 10 градусов</li>'
                 . '<li>Автобусы — не более 20 градусов</li>'
                 . '<li>Грузовые автомобили — не более 25 градусов</li>'
                 . '</ul>',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '2.2.',
                'title' => '',
                'text' => 'Имеются не предусмотренные конструкцией перемещения деталей и узлов. '
                 . 'Резьбовые соединения не затянуты или не зафиксированы установленным способом. '
                 . 'Неработоспособно устройство фиксации положения рулевой колонки.',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '2.3.',
                'title' => '',
                'text' => 'Неисправен или отсутствует предусмотренный конструкцией усилитель '
                 . 'рулевого управления или рулевой демпфер (для мотоциклов).',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '3.',
                'title' => 'Внешние световые приборы',
                'text' => '',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '3.1.',
                'title' => '',
                'text' => 'Количество, тип, цвет, расположение и режим работы внешних световых '
                 . 'приборов не соответствуют требованиям конструкции транспортного средства.'
                 . '<p>Примечание. На транспортных средствах, снятых с производства, '
                 . 'допускается установка внешних световых приборов от транспортных '
                 . 'средств других марок и моделей.</p>',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '3.2.',
                'title' => 'Регулировка фар не соответствует ГОСТу Р 51709-2001.',
                'text' => '',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '3.3.',
                'title' => '',
                'text' => 'Не работают в установленном режиме или загрязнены внешние '
                 . 'световые приборы и световозвращатели.',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '3.4.',
                'title' => '',
                'text' => 'На световых приборах отсутствуют рассеиватели либо используются '
                 . 'рассеиватели и лампы, не соответствующие типу данного светового прибора.',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '3.5.',
                'title' => '',
                'text' => 'Установка проблесковых маячков, способы их крепления и видимость '
                 . 'светового сигнала не соответствуют установленным требованиям.',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '3.6.',
                'title' => 'На транспортном средстве установлены:',
                'text' => '<ul>'
                 . '<li>спереди — световые приборы с огнями любого цвета, кроме белого, 
                     желтого или оранжевого, и световозвращающие приспособления 
                     любого цвета, кроме белого;</li>'
                 . '<li>сзади — фонари заднего хода и освещения государственного регистрационного '
                 . 'знака с огнями любого цвета, кроме белого, и иные световые приборы с '
                 . 'огнями любого цвета, кроме красного, желтого или оранжевого, а также '
                 . 'световозвращающие приспособления любого цвета, кроме красного.</li>'
                 . '</ul>'
                 . '<p>Примечание. Положения настоящего пункта не распространяются на '
                 . 'государственные регистрационные, отличительные и опознавательные знаки, '
                 . 'установленные на транспортных средствах.</p>',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '4.',
                'title' => 'Стеклоочистители и стеклоомыватели ветрового стекла',
                'text' => '',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '4.1.',
                'title' => 'Не работают в установленном режиме стеклоочистители.',
                'text' => '',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '4.2.',
                'title' => '',
                'text' => 'Не работают предусмотренные конструкцией транспортного '
                 . 'средства стеклоомыватели.',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '5.',
                'title' => 'Колеса и шины',
                'text' => '',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '5.1.',
                'title' => 'Остаточная глубина рисунка протектора шин (при отсутствии '
                 . 'индикаторов износа) составляет не более:',
                'text' => '<ul>'
                 . '<li>для транспортных средств категорий L - 0,8 мм;</li>'
                 . '<li>для транспортных средств категорий N2, N3, O3, O4 - 1 мм;</li>'
                 . '<li>для транспортных средств категорий M1, N1, O1, O2 - 1,6 мм;</li>'
                 . '<li>для транспортных средств категорий M2, M3 - 2 мм.</li>'
                 . '</ul>'
                 . '<p>Остаточная глубина рисунка протектора зимних шин, предназначенных для '
                 . 'эксплуатации на обледеневшем или заснеженном дорожном покрытии, маркированных '
                 . 'знаком в виде горной вершины с тремя пиками и снежинки внутри нее, а также '
                 . 'маркированных знаками "M+S", "M&S", "M S" (при отсутствии индикаторов износа), '
                 . 'во время эксплуатации на указанном покрытии составляет не более 4 мм.</p>'
                 . '<p>Примечание. Обозначение категории транспортного средства в настоящем '
                 . 'пункте установлено в соответствии с приложением N 1 к техническому регламенту '
                 . 'Таможенного союза "О безопасности колесных транспортных средств", принятому '
                 . 'решением Комиссии Таможенного союза от 9 декабря 2011 г. N 877. (в ред. '
                 . 'Постановления Правительства РФ от 12.07.2017 N 832)</p>',
                'permissions_id' => 2
            ], 
            [
                 'url' => '',
                'numeral' => '5.2.',
                'title' => '',
                'text' => 'Шины имеют внешние повреждения (пробои, порезы, разрывы), обнажающие корд, '
                . 'а также расслоение каркаса, отслоение протектора и боковины.',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '5.3.',
                'title' => '',
                'text' => 'Отсутствует болт (гайка) крепления или имеются трещины диска и '
                 . 'ободьев колес, имеются видимые нарушения формы и размеров крепежных отверстий.',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '5.4.',
                'title' => '',
                'text' => 'Шины по размеру или допустимой нагрузке не соответствуют '
                 . 'модели транспортного средства.',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '5.5.',
                'title' => '',
                'text' => 'На одну ось транспортного средства установлены шины различных '
                 . 'размеров, конструкций (радиальной, диагональной, камерной, бескамерной), '
                 . 'моделей, с различными рисунками протектора, морозостойкие и неморозостойкие, '
                 . 'новые и восстановленные, новые и с углубленным рисунком протектора. '
                 . 'На транспортном средстве установлены ошипованные и неошипованные шины.',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '6.',
                'title' => 'Двигатель',
                'text' => '',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '6.1.',
                'title' => '',
                'text' => 'Содержание вредных веществ в отработавших газах и их дымность '
                 . 'превышают величины, установленные ГОСТом Р 52033-2003 и ГОСТом Р 52160-2003.',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '6.2.',
                'title' => 'Нарушена герметичность системы питания.',
                'text' => '',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '6.3.',
                'title' => 'Неисправна система выпуска отработавших газов.',
                'text' => '',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '6.4.',
                'title' => 'Нарушена герметичность системы вентиляции картера.',
                'text' => '',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '6.5.',
                'title' => '',
                'text' => 'Допустимый уровень внешнего шума превышает величины, '
                 . 'установленные ГОСТом Р 52231-2004.',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '7.',
                'title' => 'Прочие элементы конструкции',
                'text' => '',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '7.1.',
                'title' => '',
                'text' => 'Количество, расположение и класс зеркал заднего вида не '
                 . 'соответствуют ГОСТу Р 51709-2001, отсутствуют стекла, '
                 . 'предусмотренные конструкцией транспортного средства.',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '7.2.',
                'title' => 'Не работает звуковой сигнал.',
                'text' => '',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '7.3.',
                'title' => '',
                'text' => 'Установлены дополнительные предметы или нанесены покрытия, '
                 . 'ограничивающие обзорность с места водителя.'
                 . '<p>Примечание: по вопросу, касающемуся светопропускания ветрового стекла, см. '
                 . 'требования Технического регламента о безопасности колесных транспортных средств. '
                 . 'Примечание. На верхней части ветрового стекла автомобилей и автобусов могут '
                 . 'прикрепляться прозрачные цветные пленки. Разрешается применять тонированные '
                 . 'стекла (кроме зеркальных), светопропускание которых соответствует '
                 . 'ГОСТу 32565-2013. Допускается применять шторки на окнах туристских '
                 . 'автобусов, а также жалюзи и шторки на задних стеклах легковых автомобилей '
                 . 'при наличии с обеих сторон наружных зеркал заднего вида.</p>',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '7.4.',
                'title' => '',
                'text' => 'Не работают предусмотренные конструкцией замки дверей кузова или кабины, '
                 . 'запоры бортов грузовой платформы, запоры горловин цистерн и пробки '
                 . 'топливных баков, механизм регулировки положения сиденья водителя, '
                 . 'аварийный выключатель дверей и сигнал требования остановки на автобусе, '
                 . 'приборы внутреннего освещения салона автобуса, аварийные выходы и '
                 . 'устройства приведения их в действие, привод управления дверьми, '
                 . 'спидометр, тахограф, противоугонные устройства, устройства обогрева и '
                 . 'обдува стекол.',
                'permissions_id' => 2
            ],
             [
                  'url' => '',
                'numeral' => '7.5.',
                'title' => '',
                'text' => 'Отсутствуют предусмотренные конструкцией заднее защитное устройство, '
                 . 'грязезащитные фартуки и брызговики.',
                'permissions_id' => 2
            ],
            [
                 'url' => '',
                'numeral' => '7.6.',
                'title' => '',
                'text' => 'Неисправны тягово-сцепное и опорно-сцепное устройства тягача и '
                . 'прицепного звена, а также отсутствуют или неисправны предусмотренные их '
                . 'конструкцией страховочные тросы (цепи). Имеются люфты в соединениях рамы '
                . 'мотоцикла с рамой бокового прицепа.',
                'permissions_id' => 2
            ],
            [
                 'url' => '',
                'numeral' => '7.7.',
                'title' => 'Отсутствуют:',
                'text' => '<ul>'
                . '<li>на автобусе, легковом и грузовом автомобилях, колесных тракторах — '
                . 'медицинская аптечка, огнетушитель, знак аварийной остановки по '
                . 'ГОСТу Р 41.27-2001;</li>'
                . '<li>на грузовых автомобилях с разрешенной максимальной массой 
                    свыше 3,5 т и автобусах с разрешенной максимальной массой свыше 5 т — 
                    противооткатные упоры (должно быть не менее двух);</li>'
                . '<li>на мотоцикле с боковым прицепом — медицинская аптечка, знак '
                . 'аварийной остановки по ГОСТу Р 41.27-2001.</li>'
                . '</ul>',
                'permissions_id' => 2
            ],
            [
                 'url' => '',
                'numeral' => '7.8.',
                'title' => '',
                'text' => 'Неправомерное оборудование транспортных средств опознавательным '
                . 'знаком "Федеральная служба охраны Российской Федерации", проблесковыми '
                . 'маячками и (или) специальными звуковыми сигналами либо наличие на '
                . 'наружных поверхностях транспортных средств специальных цветографических '
                . 'схем, надписей и обозначений, не соответствующих государственным '
                . 'стандартам Российской Федерации.',
                'permissions_id' => 2
            ],
            [
                 'url' => '',
                'numeral' => '7.9.',
                'title' => '',
                'text' => 'Отсутствуют ремни безопасности и (или) подголовники сидений, если '
                . 'их установка предусмотрена конструкцией транспортного средства или '
                . 'Основными положениями по допуску транспортных средств к эксплуатации и '
                . 'обязанностями должностных лиц по обеспечению безопасности дорожного движения.',
                'permissions_id' => 2
            ],
            [
                 'url' => '',
                'numeral' => '7.10.',
                'title' => '',
                'text' => 'Ремни безопасности неработоспособны или имеют видимые надрывы на лямке.',
                'permissions_id' => 2
            ],
            [
                 'url' => '',
                'numeral' => '7.11.',
                'title' => '',
                'text' => 'Не работают держатель запасного колеса, лебедка и механизм '
                . 'подъема — опускания запасного колеса. Храповое устройство лебедки '
                . 'не фиксирует барабан с крепежным канатом.',
                'permissions_id' => 2
            ],
            [
                 'url' => '',
                'numeral' => '7.12.',
                'title' => '',
                'text' => ' На полуприцепе отсутствует или неисправно опорное устройство, '
                . 'фиксаторы транспортного положения опор, механизмы подъема и опускания опор.',
                'permissions_id' => 2
            ],
            [
                 'url' => '',
                'numeral' => '7.13.',
                'title' => '',
                'text' => 'Нарушена герметичность уплотнителей и соединений двигателя, '
                . 'коробки передач, бортовых редукторов, заднего моста, сцепления, '
                . 'аккумуляторной батареи, систем охлаждения и кондиционирования воздуха и '
                . 'дополнительно устанавливаемых на транспортное средство гидравлических устройств.',
                'permissions_id' => 2
            ],
            [
                 'url' => '',
                'numeral' => '7.14.',
                'title' => '',
                'text' => 'Технические параметры, указанные на наружной поверхности газовых '
                . 'баллонов автомобилей и автобусов, оснащенных газовой системой питания, '
                . 'не соответствуют данным технического паспорта, отсутствуют даты последнего '
                . 'и планируемого освидетельствования.',
                'permissions_id' => 2
            ],
            [
                 'url' => '',
                'numeral' => '7.15.',
                'title' => '',
                'text' => 'Государственный регистрационный знак транспортного средства или '
                . 'способ его установки не отвечает ГОСТу Р 50577-93.',
                'permissions_id' => 2
            ],
            [
                 'url' => '',
                'numeral' => '7.15(1).',
                'title' => '',
                'text' => ' Отсутствуют опознавательные знаки, которые должны быть установлены 
                    в соответствии с пунктом 8 Основных положений по допуску транспортных 
                    средств к эксплуатации и обязанностей должностных лиц по обеспечению 
                    безопасности дорожного движения, утвержденных постановлением Совета 
                    Министров - Правительства Российской Федерации от 23 октября 1993 г. 
                    N 1090 "О правилах дорожного движения".
                    (п. 7.15(1) введен Постановлением Правительства РФ от 24.03.2017 N 333)',
                'permissions_id' => 2
            ],
            [
                 'url' => '',
                'numeral' => '7.16.',
                'title' => '',
                'text' => 'На мотоциклах нет предусмотренных конструкцией дуг безопасности.',
                'permissions_id' => 2
            ],
            [
                 'url' => '',
                'numeral' => '7.17.',
                'title' => '',
                'text' => 'На мотоциклах и мопедах нет предусмотренных конструкцией подножек, '
                . 'поперечных рукояток для пассажиров на седле.',
                'permissions_id' => 2
            ],
            [
                 'url' => '',
                'numeral' => '7.18.',
                'title' => '',
                'text' => 'В конструкцию транспортного средства внесены изменения без разрешения '
                . 'Государственной инспекции безопасности дорожного движения Министерства '
                . 'внутренних дел Российской Федерации или иных органов, определяемых '
                . 'Правительством Российской Федерации.',
                'permissions_id' => 2
            ],
            
        ];
            
        
      PermissionPdd::insert($sing);
    
    }
}
