<?php

use Illuminate\Database\Seeder;

class AboutUsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about_us = array(
            [
                'about' => 'تربیت سارا گھرانہ جنت کی راہ پر  کا مقصد لے کر بنائی گی ویب سائیٹ اور موبائل ایپ ہے جس پر آپ کو دینی و دنیاوی کتب کا ایک نایاب ذخیرہ ملے گا۔',
            ],
        );

        foreach ($about_us as $about) {
            \App\AboutUs::create($about);
        }
    }
}
