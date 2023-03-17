<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(ModulesTableSeeder::class);
         $this->call(MenusTableSeeder::class);
         $this->call(SubMenusTableSeeder::class);
         $this->call(AboutUsTableSeeder::class);
         $this->call(SocialLinkTableSeeder::class);
    }
}
