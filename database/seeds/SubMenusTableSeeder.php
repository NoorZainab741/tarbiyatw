<?php

use Illuminate\Database\Seeder;

class SubMenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sub_menus = array(
            [
                'name' => 'تفہیم القرآن',
                'module_id'=> 1
            ],
            [
                'name' => 'تفسیر ابن کثیر',
                'module_id'=> 1
            ],
            [
                'name' => 'قاری عبدالرحمان السدیس',
                'module_id'=> 2
            ],
            [
                'name' => 'مقاری عبدالباسط',
                'module_id'=> 2
            ],
            [
                'name' => 'بخاری شریفے',
                'module_id'=> 3
            ],

        );

        foreach ($sub_menus as $sub_menu) {
            \App\SubMenu::create($sub_menu);
        }
    }
}
