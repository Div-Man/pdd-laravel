<?php

use Illuminate\Database\Seeder;
use App\SubItems;


class SubItems1TableSeeder extends Seeder
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
                'title' => '1.1.',
                'text' => ''
                . 'Настоящие Правила дорожного движения 2019 года устанавливают единый п'
                . 'орядок дорожного движения на всей территории Российской Федерации(РФ). '
                . 'Другие нормативные акты, касающиеся дорожного движения, должны '
                . 'основываться на требованиях Правил и не противоречить им. В дальнейшем - Правила',
                'item_id' => 1
            ],
             [
                'title' => '1.2.',
                'text' => 'В Правилах используются следующие основные понятия и термины:<br><br>'
                 . '<div class="sub-clause"><b>"Автомагистраль</b>" - дорога, обозначенная знаком 5.1 и имеющая для каждого '
                 . 'направления движения проезжие части, отделенные друг от друга '
                 . 'разделительной полосой (а при ее отсутствии - дорожным ограждением), '
                 . 'без пересечений в одном уровне с другими дорогами, железнодорожными '
                 . 'или трамвайными путями, пешеходными или велосипедными дорожками.</div>'
                 
                 . '<div class="sub-clause"><b>"Автопоезд"</b> - механическое транспортное средство, сцепленное с прицепом (прицепами).</div>'
                 
                 . '<div class="sub-clause"><b>"Велосипед"</b> - транспортное средство, кроме инвалидных колясок, '
                 . 'которое имеет по крайней мере два колеса и приводится в движение как правило '
                 . 'мускульной энергией лиц, находящихся на этом транспортном средстве, в '
                 . 'частности при помощи педалей или рукояток, и может также иметь '
                 . 'электродвигатель номинальной максимальной мощностью в режиме '
                 . 'длительной нагрузки, не превышающей 0,25 кВт, автоматически отключающийся '
                 . 'на скорости более 25 км/ч.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Велосипедист"</b> - лицо, управляющее велосипедом.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Велосипедная дорожка"</b> - конструктивно отделенный от проезжей части и '
                 . 'тротуара элемент дороги (либо отдельная дорога), предназначенный '
                 . 'для движения велосипедистов и обозначенный знаком 4.4.1.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Велосипедная зона"</b> - территория, предназначенная для движения '
                 . 'велосипедистов, начало и конец которой обозначены '
                 . 'соответственно знаками 5.33.1. и 5.34.1.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Водитель"</b> - лицо, управляющее каким-либо транспортным '
                 . 'средством, погонщик, ведущий по дороге вьючных, верховых '
                 . 'животных или стадо. К водителю приравнивается обучающий вождению.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Вынужденная остановка"</b> - прекращение движения транспортного средства '
                 . 'из-за его технической неисправности или опасности, создаваемой '
                 . 'перевозимым грузом, состоянием водителя (пассажира) или появлением '
                 . 'препятствия на дороге.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Гибридный автомобиль"</b> - транспортное средство, имеющее не менее 2 различных '
                 . 'преобразователей энергии (двигателей) и 2 различных (бортовых) систем аккумулирования '
                 . 'энергии для целей приведения в движение транспортного средства.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Главная дорога"</b> - дорога, обозначенная знаками 2.1 , 2.3.1 - 2.3.7 или 5.1 , по '
                 . 'отношению к пересекаемой (примыкающей), или дорога с твердым '
                 . 'покрытием (асфальто- и цементобетон, каменные материалы и тому подобное) '
                 . 'по отношению к грунтовой, либо любая дорога по отношению к выездам с '
                 . 'прилегающих территорий. Наличие на второстепенной дороге непосредственно '
                 . 'перед перекрестком участка с покрытием не делает ее равной по значению с пересекаемой.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Дневные ходовые огни"</b> - внешние световые приборы, предназначенные для '
                 . 'улучшения видимости движущегося транспортного средства спереди в светлое время суток.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Дорога"</b> - обустроенная или приспособленная и используемая '
                 . 'для движения транспортных средств полоса земли либо поверхность искусственного '
                 . 'сооружения. Дорога включает в себя одну или несколько проезжих частей, '
                 . 'а также трамвайные пути, тротуары, обочины и разделительные полосы при их наличии.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Дорожное движение"</b> - совокупность общественных отношений, '
                 . 'возникающих в процессе перемещения людей и грузов с помощью транспортных '
                 . 'средств или без таковых в пределах дорог.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Дорожно-транспортное происшествие"</b> - событие, возникшее в процессе '
                 . 'движения по дороге транспортного средства и с его участием, при котором погибли или ранены '
                 . 'люди, повреждены транспортные средства, сооружения, грузы '
                 . 'либо причинен иной материальный ущерб.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Железнодорожный переезд"</b> - пересечение дороги с железнодорожными путями на одном уровне.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Маршрутное транспортное средство"</b> - транспортное средство общего пользования (автобус, троллейбус, трамвай), '
                 . 'предназначенное для перевозки по дорогам людей и движущееся по '
                 . 'установленному маршруту с обозначенными местами остановок.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Механическое транспортное средство"</b> - транспортное средство, приводимое в '
                 . 'движение двигателем. Термин распространяется также на любые тракторы и самоходные машины.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Мопед"</b> - двух- или трехколесное механическое транспортное '
                 . 'средство, максимальная конструктивная скорость которого не превышает 50 км/ч, '
                 . 'имеющее двигатель внутреннего сгорания с рабочим объемом, не '
                 . 'превышающим 50 куб. см, или электродвигатель номинальной максимальной '
                 . 'мощностью в режиме длительной нагрузки более 0,25 кВт и менее 4 кВт. К '
                 . 'мопедам приравниваются квадрициклы, имеющие аналогичные технические характеристики.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Мотоцикл"</b> - двухколесное механическое транспортное средство с '
                 . 'боковым прицепом или без него, рабочий объем двигателя которого (в случае двигателя внутреннего сгорания) '
                 . 'превышает 50 куб. см или максимальная конструктивная скорость '
                 . '(при любом двигателе) превышает 50 км/ч. К мотоциклам приравниваются '
                 . 'трициклы, а также квадрициклы с мотоциклетной посадкой или рулем мотоциклетного т'
                 . 'ипа, имеющие ненагруженную массу, не превышающую 400 кг (550 кг для транспортных '
                 . 'средств, предназначенных для перевозки грузов) без учета массы '
                 . 'аккумуляторов (в случае электрических транспортных средств), и '
                 . 'максимальную эффективную мощность двигателя, не превышающую 15 кВт.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Населенный пункт"</b> - застроенная территория, въезды на '
                 . 'которую и выезды с которой обозначены знаками 5.23.1 - 5.26</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Недостаточная видимость"</b> - видимость дороги менее 300 м в условиях тумана, '
                 . 'дождя, снегопада и тому подобного, а также в сумерки.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Обгон"</b> - опережение одного или нескольких транспортных '
                 . 'средств, связанное с выездом на полосу (сторону проезжей части), предназначенную '
                 . 'для встречного движения, и последующим возвращением на ранее занимаемую '
                 . 'полосу (сторону проезжей части).</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Обочина"</b> - элемент дороги, примыкающий непосредственно к проезжей '
                 . 'части на одном уровне с ней, отличающийся типом покрытия или выделенный с помощью разметки 1.2  '
                 . 'используемый для движения, остановки и стоянки в соответствии с Правилами дорожного '
                 . 'движения 2019 России(РФ).</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Ограниченная видимость"</b> - видимость водителем дороги в направлении движения, ограниченная '
                 . 'рельефом местности, геометрическими параметрами дороги, растительностью, строениями, сооружениями '
                 . 'или иными объектами, в том числе транспортными средствами.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Опасность для движения"</b> - ситуация, возникшая в процессе дорожного движения, при '
                 . 'которой продолжение движения в том же направлении и с той же скоростью создает угрозу '
                 . 'возникновения дорожно-транспортного происшествия.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Опасный груз"</b> - вещества, изделия из них, отходы производственной '
                 . 'и иной хозяйственной деятельности, которые в силу присущих им свойств могут при перевозке '
                 . 'создать угрозу для жизни и здоровья людей, нанести вред окружающей среде, повредить '
                 . 'или уничтожить материальные ценности.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Опережение"</b> - движение транспортного средства со скоростью, большей скорости попутного транспортного средства.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Организованная перевозка группы детей"</b> - перевозка в автобусе, не относящемся к маршрутному '
                 . 'транспортному средству, группы детей численностью 8 и более человек, осуществляемая без их '
                 . 'родителей или иных законных представителей.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Организованная транспортная колонна"</b> - группа из трех и более механических транспортных '
                 . 'средств, следующих непосредственно друг за другом по одной и той же полосе движения '
                 . 'с постоянно включенными фарами в сопровождении головного транспортного '
                 . 'средства с нанесенными на наружные поверхности специальными цветографическими '
                 . 'схемами и включенными проблесковыми маячками синего и красного цветов.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Организованная пешая колонна"</b> - обозначенная в соответствии с пунктом 4.2 Правил группа людей, '
                 . 'совместно движущихся по дороге в одном направлении.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Остановка"</b> - преднамеренное прекращение движения транспортного '
                 . 'средства на время до 5 минут, а также на большее, если это необходимо для посадки или '
                 . 'высадки пассажиров либо загрузки или разгрузки транспортного средства.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Островок безопасности"</b> - элемент обустройства дороги, '
                 . 'разделяющий полосы движения (в том числе полосы для велосипедистов), а '
                 . 'также полосы движения и трамвайные пути, конструктивно выделенный бордюрным '
                 . 'камнем над проезжей частью дороги или обозначенный техническими средствами '
                 . 'организации дорожного движения и предназначенный для остановки пешеходов '
                 . 'при переходе проезжей части дороги. К островку безопасности может относиться '
                 . 'часть разделительной полосы, через которую проложен пешеходный переход.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Парковка (парковочное место)"</b> - специально обозначенное и при необходимости обустроенное '
                 . 'и оборудованное место, являющееся в том числе частью автомобильной дороги и (или) примыкающее '
                 . 'к проезжей части и (или) тротуару, обочине, эстакаде или мосту либо являющееся частью '
                 . 'подэстакадных или подмостовых пространств, площадей и иных объектов улично-дорожной сети, '
                 . 'зданий, строений или сооружений и предназначенное для организованной стоянки '
                 . 'транспортных средств на платной основе или без взимания платы по решению собственника '
                 . 'или иного владельца автомобильной дороги, собственника земельного участка либо собственника '
                 . 'соответствующей части здания, строения или сооружения.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Пассажир"</b> - лицо, кроме водителя, находящееся в 
                     транспортном средстве (на нем), а также лицо, которое входит в 
                     транспортное средство (садится на него) или выходит из транспортного 
                     средства (сходит с него).</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Перекресток"</b> -  место пересечения, примыкания или 
                     разветвления дорог на одном уровне, ограниченное воображаемыми линиями, 
                     соединяющими соответственно противоположные, наиболее удаленные от центра 
                     перекрестка начала закруглений проезжих частей. Не считаются перекрестками 
                     выезды с прилегающих территорий.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Перестроение"</b> - выезд из занимаемой полосы или занимаемого ряда с сохранением первоначального направления движения.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Пешеход"</b> - лицо, находящееся вне транспортного средства на '
                 . 'дороге либо на пешеходной или велопешеходной дорожке и не производящее на них работу. '
                 . 'К пешеходам приравниваются лица, передвигающиеся в инвалидных колясках, ведущие велосипед, '
                 . 'мопед, мотоцикл, везущие санки, тележку, детскую или инвалидную коляску, а также '
                 . 'использующие для передвижения роликовые коньки, самокаты и иные аналогичные средства.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Пешеходная дорожка"</b> - обустроенная или приспособленная для движения пешеходов '
                 . 'полоса земли либо поверхность искусственного сооружения, обозначенная знаком 4.5.1.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Пешеходная зона"</b> - территория, предназначенная для движения пешеходов, '
                 . 'начало и конец которой обозначены соответственно знаками 5.33  и 5.34.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Пешеходная и велосипедная дорожка (велопешеходная дорожка)"</b> - онструктивно отделенный от проезжей части элемент '
                 . 'дороги (либо отдельная дорога), предназначенный для раздельного или совместного с '
                 . 'пешеходами движения велосипедистов и обозначенный знаками 4.5.2 - 4.5.7.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Пешеходный переход"</b> - участок проезжей части, трамвайных путей, обозначенный знаками 5.19.1 , 5.19.2 и (или) '
                 . 'разметкой 1.14.1 и 1.14.2  и выделенный для движения пешеходов через дорогу. '
                 . 'При отсутствии разметки ширина пешеходного перехода определяется '
                 . 'расстоянием между знаками 5.19.1 и 5.19.2.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Полоса движения"</b> - любая из продольных полос проезжей части, обозначенная или не '
                 . 'обозначенная разметкой и имеющая ширину, достаточную для движения автомобилей в один ряд.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Полоса для велосипедистов"</b> -  полоса проезжей части, предназначенная для '
                 . 'движения на велосипедах и мопедах, отделенная от остальной проезжей части горизонтальной '
                 . 'разметкой и обозначенная знаком 5.14.2.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Преимущество (приоритет)"</b> - право на первоочередное движение в намеченном направлении '
                 . 'по отношению к другим участникам движения.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Препятствие"</b> - неподвижный объект на полосе движения (неисправное или поврежденное 
                     транспортное средство, дефект проезжей части, посторонние предметы и т.п.), 
                     не позволяющий продолжить движение по этой полосе.
                    Не является препятствием затор или транспортное средство, остановившееся на этой полосе движения 
                    в соответствии с требованиями Правил.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Прилегающая территория"</b> - территория, непосредственно прилегающая к дороге и не предназначенная '
                 . 'для сквозного движения транспортных средств (дворы, жилые массивы, автостоянки, АЗС, '
                 . 'предприятия и тому подобное). Движение по прилегающей территории осуществляется в '
                 . 'соответствии с настоящими Правилами ПДД 2019.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Прицеп"</b> - транспортное средство, не оборудованное двигателем и предназначенное '
                 . 'для движения в составе с механическим транспортным средством. Термин распространяется '
                 . 'также на полуприцепы и прицепы-роспуски.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Проезжая часть"</b> - элемент дороги, предназначенный для движения безрельсовых транспортных средств.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Разделительная полоса"</b> - элемент дороги, выделенный конструктивно и (или) с помощью разметки 1.2 , '
                 . 'разделяющий смежные проезжие части, а также проезжую часть и трамвайные пути '
                 . 'и не предназначенный для движения и остановки транспортных средств.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Разрешенная максимальная масса"</b> - масса снаряженного транспортного средства с грузом, '
                 . 'водителем и пассажирами, установленная предприятием-изготовителем в качестве максимально допустимой. '
                 . 'За разрешенную максимальную массу состава транспортных средств, то есть сцепленных и '
                 . 'движущихся как одно целое, принимается сумма разрешенных максимальных масс транспортных '
                 . 'средств, входящих в состав.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Регулировщик"</b> - лицо, наделенное в установленном порядке полномочиями 
                     по регулированию дорожного движения с помощью сигналов, установленных Правилами дорожного 
                     движения 2019, и непосредственно осуществляющее указанное регулирование. Регулировщик 
                     должен быть в форменной одежде и (или) иметь отличительный знак и экипировку. К регулировщикам 
                     относятся сотрудники полиции и военной автомобильной инспекции, а также работники дорожно-эксплуатационных 
                     служб, дежурные на железнодорожных переездах и паромных переправах при исполнении ими своих 
                     должностных обязанностей.
                    К регулировщикам также относятся уполномоченные лица из числа работников подразделений транспортной безопасности, 
                    исполняющие обязанности по досмотру, дополнительному досмотру, повторному досмотру, 
                    наблюдению и(или) собеседованию в целях обеспечения транспортной безопасности, в отношении 
                    регулирования дорожного движения на участках автомобильных дорог, определенных постановлением 
                    Правительства Российской Федерации от 18 июля 2016 г. No 686 "Об определении участков 
                    автомобильных дорог, железнодорожных и внутренних водных путей вертодромов, посадочных 
                    площадок, а также иных обеспечивающих функционирование транспортного комплекса 
                    зданийй сооруженийй устройств и оборудования, являющихся объектами 
                    транспортной инфраструктуры".</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Стоянка"</b> - преднамеренное прекращение движения транспортного средства на '
                 . 'время более 5 минут по причинам, не связанным с посадкой или высадкой пассажиров либо '
                 . 'загрузкой или разгрузкой транспортного средства.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Темное время суток"</b> - промежуток времени от конца вечерних сумерек до начала утренних сумерек.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Транспортное средство"</b> - устройство, предназначенное для перевозки по дорогам людей, грузов или оборудования, установленного на нем.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Тротуар"</b> - элемент дороги, предназначенный для движения пешеходов и примыкающий к проезжей части или к велосипедной дорожке либо отделенный от них газоном.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Уступить дорогу (не создавать помех)"</b> - требование, означающее, что участник '
                 . 'дорожного движения не должен начинать, возобновлять или продолжать движение, осуществлять '
                 . 'какой-либо маневр, если это может вынудить других участников движения, имеющих '
                 . 'по отношению к нему преимущество, изменить направление движения или скорость.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Участник дорожного движения"</b> - лицо, принимающее непосредственное участие в процессе '
                 . 'движения в качестве водителя, пешехода, пассажира транспортного средства.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Школьный автобус"</b> - специализированное транспортное средство (автобус), соответствующее '
                 . 'требованиям к транспортным средствам для перевозки детей, установленным законодательством о техническом регулировании, '
                 . 'и принадлежащее на праве собственности или на ином законном основании дошкольной образовательной или общеобразовательной организации.</div>'
                 . ''
                 . '<div class="sub-clause"><b>"Электромобиль"</b> - транспортное средство, приводимое в движение исключительно электрическим двигателем и заряжаемое с помощью внешнего источника электроэнергии.</div>',
                'item_id' => 1
            ],
              [
                'title' => '1.3.',
                'text' => 'Участники дорожного движения обязаны знать и соблюдать '
                  . 'относящиеся к ним требования Правил, сигналов светофоров, '
                  . 'знаков и разметки, а также выполнять распоряжения регулировщиков, '
                  . 'действующих в пределах предоставленных им прав и регулирующих '
                  . 'дорожное движение установленными сигналами.',
                'item_id' => 1
            ],
             [
                'title' => '1.4.',
                'text' => ' На дорогах установлено правостороннее движение транспортных средств.',
                'item_id' => 1
            ],
             [
                'title' => '1.5.',
                'text' => 'Участники дорожного движения должны действовать таким образом, чтобы не 
                    создавать опасности для движения и не причинять вреда.
                    Запрещается повреждать или загрязнять покрытие дорог, снимать, 
                    загораживать, повреждать, самовольно устанавливать дорожные знаки, 
                    светофоры и другие технические средства организации движения, 
                    оставлять на дороге предметы, создающие помехи для движения. Лицо, 
                    создавшее помеху, обязано принять все возможные меры для ее 
                    устранения, а если это невозможно, то доступными средствами 
                    обеспечить информирование участников движения об опасности и сообщить в полицию.',
                'item_id' => 1
            ],
             [
                'title' => '1.6.',
                'text' => 'Лица, нарушившие Правила, несут ответственность в соответствии с действующим законодательством.',
                'item_id' => 1
            ],
             
             
         ];
         
         SubItems::insert($subItems);
    }
}
