<?php

use Illuminate\Database\Seeder;
use App\PermissionPdd;

//возможно будет ошибка, при записи в бд, так как изменил таблицу p_d_d_s

class PermissionTableSeeder extends Seeder
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
                'title' => '1. Допуск ТС к эксплуатации',
                'text' => '',
                'permissions_id' => 1
            ],
            [
                'url' => '',
                'numeral' => '1.',
                'title' => '',
                'text' => 'Механические транспортные средства (кроме мопедов) и '
                . 'прицепы должны быть зарегистрированы в ГИБДД МВД РФ или иных органах, '
                . 'определяемых Правительством РФ, в течение срока действия '
                . 'регистрационного знака "Транзит" или 10 суток после их '
                . 'приобретения или таможенного оформления. (абзац изменён в '
                . 'редакции Постановления Правительства РФ от 22.03.2014 N 221)',
                'permissions_id' => 1
            ],
            [
                'url' => '',
                'numeral' => '2.',
                'title' => '',
                'text' => 'На механических транспортных средствах (кроме мопедов, '
                . 'трамваев и троллейбусов) и прицепах должны быть установлены на '
                . 'предусмотренных для этого местах регистрационные знаки соответствующего '
                . 'образца, а на автомобилях и автобусах, кроме того, размещается в '
                . 'правом нижнем углу ветрового стекла в установленных случаях '
                . 'лицензионная карточка. (абзац изменён в редакции Постановления '
                . 'Правительства РФ от 22.03.2014 N 221) '
                . '<p>На трамваях и троллейбусах наносятся регистрационные номера, '
                . 'присваиваемые соответствующими ведомствами.</p>',
                'permissions_id' => 1
            ],
            [
                'url' => '',
                'numeral' => '3.',
                'title' => '',
                'text' => 'Техническое состояние и оборудование участвующих в дорожном '
                . 'движении транспортных средств в части, относящейся к безопасности '
                . 'дорожного движения и охране окружающей среды, должно отвечать '
                . 'требованиям соответствующих стандартов, правил и руководств '
                . 'по их технической эксплуатации.',
                'permissions_id' => 1
            ],
            [
                'url' => '',
                'numeral' => '4.',
                'title' => '',
                'text' => 'Грузовой автомобиль с бортовой платформой, используемый 
                    для перевозки людей, должен быть оборудован сиденьями, закрепленными 
                    на высоте 0,3 — 0,5 м от пола и не менее 0,3 м от верхнего края борта. 
                    <p>Сиденья, расположенные вдоль заднего или бокового борта, 
                    должны иметь прочные спинки.</p>',
                'permissions_id' => 1
            ],
            [
                'url' => '',
                'numeral' => '4.1.',
                'title' => '',
                'text' => 'В автобусах, используемых для перевозки пассажиров в '
                . 'междугородном сообщении, места для сидения должны быть оборудованы '
                . 'ремнями безопасности.',
                'permissions_id' => 1
            ],
            [
                'url' => '',
                'numeral' => '5.',
                'title' => '',
                'text' => 'Механическое транспортное средство, используемое для обучения '
                . 'вождению, должно быть оборудовано дополнительными педалями привода '
                . 'сцепления (кроме транспортных средств с автоматической трансмиссией) и '
                . 'тормоза, зеркалом заднего вида для обучающего и опознавательным '
                . 'знаком "Учебное транспортное средство" в соответствии с пунктом '
                . '8 настоящих Основных положений.',
                'permissions_id' => 1
            ],
            [
                'url' => '',
                'numeral' => '5(1).',
                'title' => '',
                'text' => 'Транспортное средство, используемое в качестве 
                    легкового такси, должно быть оборудовано таксометром, 
                    иметь на кузове (боковых поверхностях кузова) цветографическую 
                    схему, представляющую собой композицию из квадратов контрастного 
                    цвета, расположенных в шахматном порядке, и на крыше — опознавательный 
                    фонарь оранжевого цвета.',
                'permissions_id' => 1
            ],
            [
                'url' => '',
                'numeral' => '6.',
                'title' => '',
                'text' => 'Велосипед должен иметь исправные тормоз, руль и звуковой '
                . 'сигнал, быть оборудован спереди световозвращателем и фонарем '
                . 'или фарой (для движения в темное время суток и в условиях '
                . 'недостаточной видимости) белого цвета, сзади — световозвращателем '
                . 'или фонарем красного цвета, а с каждой боковой стороны — световозвращателем '
                . 'оранжевого или красного цвета.',
                'permissions_id' => 1
            ],
            [
                'url' => '',
                'numeral' => '7.',
                'title' => '',
                'text' => 'Гужевая повозка должна иметь предусмотренные конструкцией '
                . 'исправное стояночное тормозное устройство и противооткатные упоры, '
                . 'быть оборудована спереди двумя световозвращателями и фонарем белого '
                . 'цвета (для движения в темное время суток и в условиях недостаточной '
                . 'видимости), сзади — двумя световозвращателями и фонарем красного цвета.',
                'permissions_id' => 1
            ],
            [
                'url' => '',
                'numeral' => '8.',
                'title' => '',
                'text' => 'На транспортных средствах должны быть установлены '
                . 'опознавательные знаки:',
                'permissions_id' => 1
            ],
            [
                'url' => '/img/permissions/9.1.png',
                'numeral' => '9.1.',
                'title' => 'Автопоезд',
                'text' => 'в виде трех фонарей оранжевого цвета, расположенных горизонтально '
                . 'на крыше кабины с промежутками между ними от 150 до 300 мм — на грузовых '
                . 'автомобилях и колесных тракторах (класса 1,4 т и выше) с прицепами, а '
                . 'также на сочлененных автобусах и троллейбусах;',
                'permissions_id' => 1
            ],
            [
                'url' => '/img/permissions/9.3.png',
                'numeral' => '9.3.',
                'title' => 'Перевозка детей',
                'text' => 'в виде квадрата желтого цвета с каймой красного цвета '
                . '(ширина каймы — 1/10 стороны), с черным изображением символа '
                . 'дорожного знака 1.23 (сторона квадрата опознавательного знака, '
                . 'расположенного спереди транспортного средства, должна быть не '
                . 'менее 250 мм, сзади — 400 мм);',
                'permissions_id' => 1
            ],
            [
                'url' => '/img/permissions/9.4.png',
                'numeral' => '9.4.',
                'title' => 'Глухой водитель',
                'text' => 'в виде желтого круга диаметром 160 мм с нанесенными внутри '
                . 'тремя черными кружками диаметром 40 мм, расположенными по углам '
                . 'воображаемого равностороннего треугольника, вершина которого '
                . 'обращена вниз, — спереди и сзади механических транспортных средств, '
                . 'управляемых глухонемыми или глухими водителями;',
                'permissions_id' => 1
            ],
            [
                'url' => '/img/permissions/9.5.png',
                'numeral' => '9.5.',
                'title' => 'Учебное транспортное средство',
                'text' => 'в виде равностороннего треугольника белого цвета вершиной вверх с '
                . 'каймой красного цвета, в который вписана буква "У" черного '
                . 'цвета (сторона не менее 200 мм, ширина каймы — 1/10 стороны), — '
                . 'спереди и сзади механических транспортных средств, используемых для '
                . 'обучения вождению (допускается установка двустороннего знака на '
                . 'крыше легкового автомобиля);',
                'permissions_id' => 1
            ],
            [
                'url' => '/img/permissions/9.6.png',
                'numeral' => '9.6.',
                'title' => 'Ограничение скорости',
                'text' => 'в виде уменьшенного цветного изображения дорожного знака '
                . '3.24 с указанием разрешенной скорости (диаметр знака — не менее 160 мм, '
                . 'ширина каймы — 1/10 диаметра) — на задней стороне кузова слева у '
                . 'механических транспортных средств, осуществляющих организованные '
                . 'перевозки групп детей, перевозящих крупногабаритные, тяжеловесные и '
                . 'опасные грузы, а также в случаях, когда максимальная скорость т'
                . 'ранспортного средства по технической характеристике ниже определенной '
                . 'пунктами 10.3 и 10.4 ПДД РФ;',
                'permissions_id' => 1
            ],
            [
                'url' => '/img/permissions/9.8.png',
                'numeral' => '9.8.',
                'title' => 'Опасный груз:',
                'text' => '<ul>'
                . '<li>при осуществлении международных перевозок опасных грузов — в виде '
                . 'прямоугольника размером 400×300 мм, имеющего световозвращающее '
                . 'покрытие оранжевого цвета с каймой черного цвета шириной не более '
                . '15 мм, — спереди и сзади транспортных средств, на боковых сторонах '
                . 'цистерн, а также в установленных случаях — на боковых сторонах '
                . 'транспортных средств и контейнеров;</li>'
                . '<li>при осуществлении иных перевозок опасных грузов — в виде прямоугольника '
                . 'размером 690×300 мм, правая часть которого размером 400×300 мм окрашена в '
                . 'оранжевый, а левая — в белый цвет с каймой черного цвета шириной '
                . '15 мм, — спереди и сзади транспортных средств.</li>'
                . '</ul>'
                . '<p>На опознавательный знак наносятся обозначения, характеризующие '
                . 'опасные свойства перевозимого груза:</p>',
                'permissions_id' => 1
            ],
            [
                'url' => '/img/permissions/9.9.png',
                'numeral' => '9.9.',
                'title' => 'Крупногабаритный груз',
                'text' => 'в виде щитка размером 400×400 мм с нанесенными по диагонали '
                . 'красными и белыми чередующимися полосами шириной 50 мм со световозвращающей '
                . 'поверхностью;',
                'permissions_id' => 1
            ],
            [
                'url' => '/img/permissions/9.10.png',
                'numeral' => '9.10.',
                'title' => 'Тихоходное транспортное средство',
                'text' => 'в виде равностороннего треугольника с флюоресцирующим покрытием '
                . 'красного цвета и со световозвращающей каймой желтого или красного '
                . 'цвета (длина стороны треугольника от 350 до 365 мм, '
                . 'ширина каймы от 45 до 48 мм) — сзади механических транспортных '
                . 'средств, для которых предприятием-изготовителем установлена '
                . 'максимальная скорость не более 30 км/ч;',
                'permissions_id' => 1
            ],
            [
                'url' => '/img/permissions/9.11.png',
                'numeral' => '9.11.',
                'title' => 'Длинномерное транспортное средство',
                'text' => 'в виде прямоугольника размером не менее 1200×200 мм желтого '
                . 'цвета с каймой красного цвета (ширина 40 мм), имеющего световозвращающую '
                . 'поверхность, — сзади транспортных средств, длина которых с грузом или '
                . 'без груза более 20 м, и автопоездов с двумя и более прицепами. '
                . 'При невозможности размещения знака указанного размера допускается '
                . 'установка двух одинаковых знаков размером не менее 600×200 мм симметрично '
                . 'оси транспортного средства.',
                'permissions_id' => 1
            ],
            [
                'url' => '/img/permissions/9.12.png',
                'numeral' => '9.12.',
                'title' => 'Начинающий водитель',
                'text' => 'в виде квадрата желтого цвета (сторона 150 мм) с изображением '
                . 'восклицательного знака черного цвета высотой 110 мм — сзади механических '
                . 'транспортных средств (за исключением тракторов, самоходных машин, '
                . 'мотоциклов и мопедов), управляемых водителями, имеющими право на '
                . 'управление указанными транспортными средствами менее 2 лет.',
                'permissions_id' => 1
            ],
            [
                'url' => '/img/permissions/9.13.png',
                'numeral' => '9.13.',
                'title' => 'Врач',
                'text' => 'в виде квадрата синего цвета (сторона 140 мм) с вписанным '
                . 'белым кругом (диаметр 125 мм), на который нанесен красный крест '
                . '(высота 90 мм, ширина штриха 25 мм), — спереди и сзади автомобилей, '
                . 'управляемых водителями-врачами;',
                'permissions_id' => 1
            ],
            [
                'url' => '/img/permissions/9.14.png',
                'numeral' => '9.14.',
                'title' => 'Инвалид',
                'text' => 'в виде квадрата желтого цвета со стороной 150 мм и '
                . 'изображением символа дорожного знака 8.17 черного цвета — спереди '
                . 'или сзади механических транспортных средств, управляемых '
                . 'инвалидами, перевозящих инвалидов, в том числе детей-инвалидов.',
                'permissions_id' => 1
            ],
            [
                'url' => '',
                'numeral' => '',
                'title' => '',
                'text' => 'На транспортных средствах может быть установлен опознавательный '
                . 'знак "Федеральная служба охраны РФ", являющийся условным опознавательным '
                . 'знаком, в виде двух фонарей с огнями синего цвета, работающих в '
                . 'мигающем режиме, расположенных не выше фар ближнего света в передней '
                . 'части транспортного средства, используемого для обеспечения '
                . 'безопасности объектов государственной охраны.',
                'permissions_id' => 1
            ],
            [
                'url' => '',
                'numeral' => '9.',
                'title' => '',
                'text' => 'Предупредительные устройства для обозначения гибких '
                . 'связующих звеньев при буксировке механических транспортных средств '
                . 'должны выполняться в виде флажков или щитков размером 200×200 мм с '
                . 'нанесенными по диагонали красными и белыми чередующимися полосами ш'
                . 'ириной 50 мм со световозвращающей поверхностью.'
                . '<p>На гибкое связующее звено должно устанавливаться не менее двух '
                . 'предупредительных устройств.</p>',
                'permissions_id' => 1
            ],
            [
                'url' => '',
                'numeral' => '10.',
                'title' => '',
                'text' => 'Конструкция жесткого буксирующего устройства должна '
                . 'соответствовать требованиям ГОСТа 25907-89.',
                'permissions_id' => 1
            ],
            [
               'url' => '',
                'numeral' => '11.',
                'title' => 'Запрещается эксплуатация:',
                'text' => '<ul>'
                . '<li>автомобилей, автобусов, автопоездов, прицепов, мотоциклов, '
                . 'мопедов, тракторов и других самоходных машин, если их техническое '
                . 'состояние и оборудование не отвечают требованиям Перечня '
                . 'неисправностей и условий, при которых запрещается эксплуатация '
                . 'транспортных средств (согласно приложению);</li>'
                . '<li>троллейбусов и трамваев при наличии хотя бы одной неисправности '
                . 'по соответствующим Правилам технической эксплуатации;</li>'
                . '<li>транспортных средств, не прошедших в установленном порядке '
                . 'государственный технический осмотр или технический осмотр;</li>'
                . '<li>транспортных средств, оборудованных без соответствующего разрешения '
                . 'опознавательным знаком "Федеральная служба охраны РФ", проблесковыми '
                . 'маячками и (или) специальными звуковыми сигналами, с нанесенными на '
                . 'наружные поверхности специальными цветографическими схемами, надписями '
                . 'и обозначениями, не соответствующими государственным стандартам РФ, '
                . 'без укрепленных на установленных местах регистрационных знаков, '
                . 'имеющих скрытые, поддельные, измененные номера узлов и агрегатов или '
                . 'регистрационные знаки;</li>'
                . '<li>транспортных средств, владельцы которых не застраховали свою '
                . 'гражданскую ответственность в соответствии с законодательством РФ;</li>'
                . '<li>транспортных средств, имеющих на кузове (боковых поверхностях кузова) '
                . 'цветографическую схему легкового такси и (или) на крыше — опознавательный '
                . 'фонарь легкового такси, в случае отсутствия у водителя такого '
                . 'транспортного средства выданного в установленном порядке разрешения на '
                . 'осуществление деятельности по перевозке пассажиров и '
                . 'багажа легковым такси.</li>'
                . '<li>транспортных средств, оборудованных проблесковыми маячками '
                . 'желтого или оранжевого цвета, не зарегистрированных в Государственной '
                . 'инспекции безопасности дорожного движения Министерства внутренних '
                . 'дел Российской Федерации или иных органах, определяемых Правительством '
                . 'Российской Федерации (за исключением транспортных средств, '
                . 'перевозящих крупногабаритные грузы, взрывчатые, легковоспламеняющиеся, '
                . 'радиоактивные вещества и ядовитые вещества высокой степени опасности). </li>'
                . '</ul>',
                'permissions_id' => 1
            ],
            [
                'url' => '',
                'numeral' => '12.',
                'title' => 'Должностным и иным лицам, ответственным за '
                . 'техническое состояние и эксплуатацию транспортных средств, запрещается:',
                'text' => '<ul>'
                . '<li>выпускать на линию транспортные средства, имеющие неисправности, с '
                . 'которыми запрещается их эксплуатация, или переоборудованные без '
                . 'соответствующего разрешения, или не зарегистрированные в '
                . 'установленном порядке, или не прошедшие государственный технический '
                . 'осмотр или технический осмотр;</li>'
                . '<li>допускать к управлению транспортными средствами водителей, находящихся '
                . 'в состоянии опьянения (алкогольного, наркотического или иного), '
                . 'под воздействием лекарственных препаратов, ухудшающих реакцию и внимание, '
                . 'в болезненном или утомленном состоянии, ставящем под угрозу безопасность '
                . 'движения, не имеющих страхового полиса обязательного страхования '
                . 'гражданской ответственности владельца транспортного средства в случаях, '
                . 'когда обязанность по страхованию своей гражданской ответственности '
                . 'установлена федеральным законом, или лиц, не имеющих права управления '
                . 'транспортным средством данной категории или подкатегории; </li>'
                . '<li>направлять для движения по дорогам с асфальто- и цементно-бетонным '
                . 'покрытием тракторы и другие самоходные машины на гусеничном ходу.</li>'
                . '</ul>',
                'permissions_id' => 1
            ],
            [
               'url' => '',
                'numeral' => '13.',
                'title' => 'Должностные и иные лица, ответственные за состояние дорог, '
                . 'железнодорожных переездов и других дорожных сооружений, обязаны:',
                'text' => '<ul>'
                . '<li>содержать дороги, железнодорожные переезды и другие дорожные '
                . 'сооружения в безопасном для движения состоянии в соответствии с '
                . 'требованиями стандартов, норм и правил;</li>'
                . '<li>информировать участников дорожного движения о вводимых ограничениях '
                . 'и об изменениях в организации дорожного движения с помощью соответствующих '
                . 'технических средств, информационных щитов и средств массовой информации;</li>'
                . '<li>принимать меры к своевременному устранению помех для движения, '
                . 'запрещению или ограничению движения на отдельных участках дорог, '
                . 'когда пользование ими угрожает безопасности движения.</li>'
                . '</ul>',
                'permissions_id' => 1
            ],
            [
                'url' => '',
                'numeral' => '14.',
                'title' => '',
                'text' => 'Должностные и иные лица, ответственные за производство работ '
                . 'на дорогах, обязаны обеспечивать безопасность движения в местах '
                . 'проведения работ. Эти места, а также неработающие дорожные машины, '
                . 'строительные материалы, конструкции и тому подобное, которые не могут '
                . 'быть убраны за пределы дороги, должны быть обозначены соответствующими '
                . 'дорожными знаками, направляющими и ограждающими устройствами, а в темное '
                . 'время суток и в условиях недостаточной видимости — дополнительно красными '
                . 'или желтыми сигнальными огнями. '
                . '<p>По окончании работ на дороге должно быть обеспечено безопасное '
                . 'передвижение транспортных средств и пешеходов.</p>',
                'permissions_id' => 1
            ],
            [
                'url' => '',
                'numeral' => '15.',
                'title' => 'Соответствующие должностные и иные лица в случаях, '
                . 'предусмотренных действующим законодательством, в '
                . 'установленном порядке согласовывают:',
                'text' => '<ul>'
                . '<li>проекты организации дорожного движения в городах и на автомобильных '
                . 'дорогах, оборудование дорог техническими средствами организации движения;</li>'
                . '<li>проекты строительства, реконструкции и ремонта дорог, дорожных сооружений;</li>'
                . '<li>установку в непосредственной близости от дороги киосков, транспарантов, '
                . 'плакатов, рекламных щитов и тому подобного, ухудшающих видимость или '
                . 'затрудняющих движение пешеходов;</li>'
                . '<li>маршруты движения и расположение мест остановки маршрутных транспортных средств;</li>'
                . '<li>проведение на дорогах массовых, спортивных и иных мероприятий;</li>'
                . '<li>внесение изменений в конструкцию зарегистрированных транспортных '
                . 'средств, влияющих на обеспечение безопасности дорожного движения;</li>'
                . '<li>перевозку тяжеловесных, опасных и крупногабаритных грузов;</li>'
                . '<li>движение автопоездов общей длиной более 20 м или автопоездов '
                . 'с двумя и более прицепами;</li>'
                . '<li>программы подготовки специалистов по безопасности дорожного движения, '
                . 'инструкторов по вождению и водителей;</li>'
                . '<li>перечень дорог, на которых запрещается учебная езда;</li>'
                . '<li>производство любых работ на дороге, создающих помехи движению '
                . 'транспортных средств или пешеходов.</li>'
                . '</ul>',
                'permissions_id' => 1
            ],
            [
                'url' => '',
                'numeral' => '16.',
                'title' => 'Проблесковые маячки желтого или оранжевого цвета '
                . 'устанавливаются на транспортных средствах:',
                'text' => '<ul>'
                . '<li>выполняющих работы по строительству, ремонту или содержанию дорог, '
                . 'погрузке поврежденных, неисправных и перемещаемых транспортных средств;</li>'
                . '<li>осуществляющих перевозку крупногабаритных грузов, взрывчатых, '
                . 'легковоспламеняющихся, радиоактивных веществ и ядовитых веществ высок'
                . 'ой степени опасности;</li>'
                . '<li>осуществляющих сопровождение транспортных средств, перевозящих '
                . 'крупногабаритные, тяжеловесные и опасные грузы;</li>'
                . '<li>осуществляющих сопровождение организованных групп велосипедистов '
                . 'при проведении тренировочных мероприятий на автомобильных дорогах '
                . 'общего пользования.</li>'
                . '</ul>',
                'permissions_id' => 1
            ],
            [
                'url' => '',
                'numeral' => '17.',
                'title' => '',
                'text' => 'Проблесковые маячки бело-лунного цвета и специальные '
                . 'звуковые сигналы могут устанавливаться на транспортных средствах '
                . 'организаций федеральной почтовой связи, имеющих на боковой поверхности '
                . 'белую диагональную полосу на синем фоне, и на транспортных средствах, '
                . 'перевозящих денежную выручку и (или) ценные грузы и имеющих специальные '
                . 'цветографические схемы, нанесенные на наружные поверхности в '
                . 'соответствии с государственным стандартом РФ, за исключением '
                . 'транспортных средств оперативных служб.',
                'permissions_id' => 1
            ],
            [
                'url' => '',
                'numeral' => '18.',
                'title' => '',
                'text' => 'Выдача разрешений на оборудование соответствующих '
                . 'транспортных средств опознавательными знаками "Федеральная служба охраны РФ", '
                . 'проблесковыми маячками и (или) специальными звуковыми сигналами производится '
                . 'в порядке, установленном Министерством внутренних дел РФ.',
                'permissions_id' => 1
            ],
            [
                'url' => '',
                'numeral' => '19.',
                'title' => '',
                'text' => 'Транспортные средства, не имеющие специальных '
                . 'цветографических схем, нанесенных на наружные поверхности в '
                . 'соответствии с государственными стандартами РФ, могут быть в '
                . 'установленных случаях оборудованы специальным звуковым сигналом и '
                . 'одним проблесковым маячком синего цвета высотой не более 230 мм и с '
                . 'диаметром основания корпуса не более 200 мм.',
                'permissions_id' => 1
            ],
            [
                'url' => '',
                'numeral' => '20.',
                'title' => '',
                'text' => 'Проблесковые маячки всех цветов устанавливаются на '
                . 'крышу транспортного средства или над ней. Способы крепления должны '
                . 'обеспечивать надежность установки на всех режимах движения '
                . 'транспортного средства. При этом должна быть обеспечена видимость '
                . 'светового сигнала на угол 360 градусов в горизонтальной плоскости. '
                . '<p>Для транспортных средств ГИБДД МВД РФ и Военной автомобильной инспекции, '
                . 'сопровождающих колонны транспортных средств, и грузовых автомобилей '
                . 'допускается уменьшение угла видимости проблескового маячка до 180 '
                . 'градусов при условии видимости его со стороны передней части '
                . 'транспортного средства.</p>',
                'permissions_id' => 1
            ],
            [
                'url' => '',
                'numeral' => '21.',
                'title' => '',
                'text' => 'Сведения об оборудовании транспортных средств '
                . 'опознавательным знаком "Федеральная служба охраны РФ", проблесковыми '
                . 'маячками красного и (или) синего цветов и специальными звуковыми '
                . 'сигналами должны быть занесены в регистрационные документы на '
                . 'транспортные средства.',
                'permissions_id' => 1
            ],
           
           ];
            
        
       PermissionPdd::insert($sing);
    }
}