<?php

use App\Http\Traits\ImageTrait;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    use ImageTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('alias', 'winter_wheat')->first();

        $product = Product::create([
            'name' => 'КОМБИН',
            'price' => 10000,
            'description' => '<b class="modal-title">КОМБИН</b>
            <b>СН Комбин - пшеница короткого дня (фотопериодически нечувствительна) и хорошо отрастает в условиях короткого дня поздней осени, а также рано весной. Поздний посев и посев по подсолнечнику - это именно те условия, под которые создавался данный сорт.</b>
             <ul>Основные характеристики/преимущества:
                <li>Высокая зимостойкость</li>
                <li>Хорошая засухоустойчивость</li>
                <li>Устойчив к полеганию и комплекса болезней</li>
                <li>Повышенный коэффициент кущения</li>
             </ul>',
            'position' => 1,
            'category_id' => $category->id,
            'conditions' => 'от 5 тонн'
        ]);
        $value = resource_path('assets/image/wheat.jpg');
        $image = self::storeImage($value, $product->id);
        $product->update(['image' => $image]);

        $product = Product::create([
            'name' => 'БАЛЕТКА',
            'price' => 10000,
            'description' => '<b class="modal-title">БАЛЕТКА</b>
            <b>Растения высотой 78-81 см. Соломина слабо наполнена с сильным восковым налетом на верхнем междоузлии. Колос белого или соломьяножовтого цвета, цилиндрической формы, средней плотности и длины, с сильным восковым налетом и имеющимися зубцами. Нижняя колосковая чешуя по форме овальная. Зерновка красного цвета, средней крупности.</b>
            <ul>Основные характеристики/преимущества:
                <li>Первый среднеранний сорт Западноевропейского генотипа</li>
                <li>Выравненность посева</li>
                <li>Высокая, стабильная урожайность и качество зерна</li>
                <li>Повышенная зимостойкость и засухоустойчивость</li>
            </ul>',
            'position' => 2,
            'category_id' => $category->id,
            'conditions' => 'от 5 тонн'
        ]);
        $value = resource_path('assets/image/wheat2.jpg');
        $image = self::storeImage($value, $product->id);
        $product->update(['image' => $image]);

        $category = Category::where('alias', 'winter_barley')->first();

        $product = Product::create([
            'name' => 'МАСТЕР ЗЕРНОГРАДА',
            'price' => 8000,
            'description' => 'Один из самых сортов ячменя альтернативного типа развития в различных почвенно-климатических условиях Украины. Сорт создан во Всероссийском НИИ зерновых культур им. И. Г. Калиненко. Общая характеристика: Разновидность palidum. Тип развития альтернативный (двохручка). Колос шестирядный, цилиндрический, рыхлый, соломенно-желтого цвета длиной 5-6 см, ости тонкие, эластичные, зазубренные и по длине равны колоса. Зерновка крупная, удлиненной формы. Опушки основной щетинки короткие. Соломина прочная. Сорт устойчив к полеганию, высота растения 85-91 см. Раннеспелый сорт с коротким периодом яровизации. Формирует полноценное зерно также при ранневесеннем посеве. Урожайность около 9 т / га. При весеннем посеве не уступает лучшим сортам ячменя. Сорт характеризуется высокой морозо- и засухоустойчивостью. Высокотехнологичный при выращивании. В полевых условиях устойчив к карликовой ржавчины, мучнистой росы и головневых заболеваний.',
            'position' => 3,
            'category_id' => $category->id,
            'conditions' => 'от 5 тонн'
        ]);
        $value = resource_path('assets/image/wheat.jpg');
        $image = self::storeImage($value, $product->id);
        $product->update(['image' => $image]);

        $product = Product::create([
            'name' => 'КОНДРАТ',
            'price' => 8000,
            'description' => 'Среднерослый. Высота растения варьируется в пределах 75-95 см. Устойчив к полеганию и осыпанию. По данным показателям значительно превосходит родителя. По сравнению с сортом Добрыня-3 стебель имеет менее широкий диаметр (на 100 колосьев имеем разницу в 1 квадратный метр). Среднеспелый. Ячмень относится к категории среднеспелых сортов. Выкашивается на 2-3 дня позже сорта Добрыня-3, и в одно время с сортом Михайло. Ботаническая разновидность. Сорт относится к группе Параллелум. Колос имеет шестигранную форму, плотность на уровне 16-19 единиц. Ости зазубренные. В период созревания ости имеют желтый окрас, после скашивания приобретают антоциановую окраску. Зерно полудлинной формы, размеры – средние. Масса 1000 зерен колеблется в диапазоне 29-38 г.',
            'position' => 4,
            'category_id' => $category->id,
            'conditions' => 'от 5 тонн'
        ]);
        $value = resource_path('assets/image/wheat2.jpg');
        $image = self::storeImage($value, $product->id);
        $product->update(['image' => $image]);
    }
}
