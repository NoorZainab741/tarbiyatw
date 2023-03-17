<?php

use Illuminate\Database\Seeder;

class SocialLinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $social_links = array(
            [
                'website' => 'https://tarbiyat.pk/',
                'youtube' => 'https://www.youtube.com/tarbiyatpk',
                'facebook' => 'https://www.facebook.com/%D8%AA%D8%B1%D8%A8%DB%8C%D8%AA-112430067616133'
            ],
        );

        foreach ($social_links as $link) {
            \App\SocialLink::create($link);
        }
    }
}
