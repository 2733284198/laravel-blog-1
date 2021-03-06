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
         $this->call(AdminTableSeeder::class);
         $this->call(FriendLinkTableSeeder::class);
         $this->call(SiteInfoSeeder::class);
         $this->call(SiteSwitchSeeder::class);
         $this->call(SettingSeeder::class);
    }
}
