<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createMultipleLanguages = [
            ['language'=>'English','flag'=>'userassets/images/flags/uk.svg'],
            ['language'=>'Germany','flag'=>'userassets/images/flags/germany.svg'],
            ['language'=>'French','flag'=>'userassets/images/flags/france.svg'],
            ['language'=>'Italian','flag'=>'userassets/images/flags/italy.svg'],
            ['language'=>'Spanish','flag'=>'userassets/images/flags/spain.svg'],
            ['language'=>'Portuguese','flag'=>'userassets/images/flags/portugal.svg'],
            ['language'=>'Mandarin','flag'=>'userassets/images/flags/china.svg'],
            ['language'=>'Japanese','flag'=>'userassets/images/flags/japan.svg'],
            ['language'=>'Korean','flag'=>'userassets/images/flags/south-korea.svg'],
            ['language'=>'Russian','flag'=>'userassets/images/flags/russia.svg'],
            ['language'=>'Hindi','flag'=>'userassets/images/flags/india.svg'],
            ['language'=>'Arabic','flag'=>'userassets/images/flags/arabic.svg'],
            ['language'=>'Persian','flag'=>'userassets/images/flags/iran.svg'],
            ['language'=>'Turkish','flag'=>'userassets/images/flags/turkey.svg'],
            ['language'=>'Kurdish','flag'=>'userassets/images/flags/iran.svg'],
            ['language'=>'Vietnamese','flag'=>'userassets/images/flags/vietnam.svg'],
            ['language'=>'Urdu','flag'=>'userassets/images/flags/india.svg'],
            ['language'=>'Polish','flag'=>'userassets/images/flags/poland.svg'],
            ['language'=>'Hebrew','flag'=>'userassets/images/flags/israel.svg'],
            ['language'=>'Bengali','flag'=>'userassets/images/flags/bangladesh.svg'],
        ];
        
        Language::insert($createMultipleLanguages);
    }
}
