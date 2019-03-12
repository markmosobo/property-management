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
//            $this->call(AccessLevelsSeeder::class);
//            $this->call(TenantSeeder::class);
//            $this->call(MasterfileSeeder::class);
//            $this->call(RoleTableSeeder::class);
//            $this->call(UserTableSeeder::class);
        $this->call(RoutesTableSeeder::class);
    }
}
