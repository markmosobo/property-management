<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Route;

class RoutesTableSeeder extends Seeder
{
    const SystemAdmin = 'SYSADMIN';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\RoleRoute::truncate();
        \Illuminate\Support\Facades\DB::table('routes')->delete();
        $admin = Role::where('code', self::SystemAdmin)->first();
        $frontOffice = Role::where('code','FRONTOFFICE')->first();
        $manager = Role::where('code','MANAGER')->first();
        $coreAdmin = Role::where('code','ADMIN')->first();
        $fofficer = Role::where('code','FIELDOFFICER')->first();




//        #### Dashboard
        $dashboard = new Route();
        $dashboard->route_name = 'Dashboard';
        $dashboard->icon = 'fa-dashboard';
        $dashboard->sequence = 1;
        $dashboard->save();
        $dashboard_id = $dashboard->id;

        #### Dashboard child
        $analytics_dash = new Route();
        $analytics_dash->route_name = 'Analytics Dashboard';
        $analytics_dash->url = 'home';
        $analytics_dash->parent_route = $dashboard_id;
        $analytics_dash->save();
        $analytics_dash->roles()->attach($admin);
        $analytics_dash->roles()->attach($manager);
        $analytics_dash->roles()->attach($coreAdmin);

    }
}
