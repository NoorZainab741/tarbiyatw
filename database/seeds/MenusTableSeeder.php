<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = array(
            [
                'name' => 'Quran',
            ],
            [
                'name' => 'Hadith',
            ],
            [
                'name' => 'Home'
            ],
            [
                'name' => 'Complete Books',
            ],
            [
                'name' => 'More',
            ],
        );

        foreach ($menus as $menu) {
            \App\Menu::create($menu);
        }
    }
}

