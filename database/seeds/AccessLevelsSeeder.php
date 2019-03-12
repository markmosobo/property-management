<?php

use Illuminate\Database\Seeder;

class AccessLevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('access_levels')->insert([
            'name'=>'All',
            'code'=>'ALL',
            'description'=>'All access granted'
        ]);
        DB::table('access_levels')->insert([
            'name'=>'Limited',
            'code'=>'LIMITED',
            'description'=>'Limited access'
        ]);
    }
}
