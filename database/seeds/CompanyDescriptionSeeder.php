<?php

use Illuminate\Database\Seeder;
use App\Models\CompanyDescription;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CompanyDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $value = resource_path('assets/image/about.jpg');
        $img = Image::make($value);
        $path = 'main/about.jpg';
        Storage::disk('public')->put($path, (string) $img->encode());

        CompanyDescription::create([
            'title' => '<h3>КОМПАНИЯ ООО НЦ "Деметра"</h3>
                <span>лидер селекции посевного материала в Украине</span>',
            'count_years' => '6',
            'description_years' => 'лет успешной работы',
            'count_regions' => '24',
            'description_regions' => 'области Украины
засеяны нашими сортами',
            'description' => '<p><b>ООО Деметра</b> - это научный центр, который занимается размножением элитных сортов Украинской и импортной селекции.</p>
                <p>В сферу нашей деятельности входит:</p>
                <ul>
                    <li>
                        производство участков гибридизации гибридов Ф1 наших и зарубежных компаний;
                    </li>
                    <li>
                        наличие своих земельных площадей ПСП Деметра;
                    </li>
                    <li>
                        производство удобрений Гуматы;
                    </li>
                    <li>
                        производство стимуляторов роста;
                    </li>
                    <li>
                        гранулированный куриный помёт и другое.
                    </li>
                </ul>
                <p>Свою продукцию/семена мы перерабатываем на таких заводах, как:</p>
                <ul>
                    <li>  ООО Укрсемпром; </li>
                    <li>  ООО Гибрид С. </li>
                </ul>,',
            'image' => Storage::disk('public')->url($path)
        ]);
    }
}
