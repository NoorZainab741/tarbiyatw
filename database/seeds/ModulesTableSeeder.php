<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules = array(
            [
                'name' => 'تفسیر القرآن',
                'menu_id'=> 1
            ],
            [
                'name' => 'تلاوت القرآن',
                'menu_id'=> 1
            ],
            [
                'name' => 'احادیث کتب',
                'menu_id'=> 2
            ],
            [
                'name' => 'مکمل کتب',
                'menu_id'=> 4
            ],
            [
                'name' => 'پمفلٹ / مقالے',
                'menu_id'=> 5
            ],
            [
                'name' => 'دروس',
                'menu_id'=> 5
            ],
            [
                'name' => 'آڈیو دروس',
                'menu_id'=> 5
            ],
            [
                'name' => 'پریذینٹیشن',
                'menu_id'=> 5
            ],
            [
                'name' => 'بچوں کے لیے',
                'menu_id'=> 5
            ],
            [
                'name' => 'سیرت کتب',
                'menu_id'=> 5
            ],
            [
                'name' => 'مدرسین',
                'menu_id'=> 5
            ],
        );

        foreach ($modules as $module) {
            \App\Module::create($module);
        }
    }
}
