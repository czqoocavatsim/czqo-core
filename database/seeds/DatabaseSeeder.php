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
        DB::table('core_info')->insert([
            'id' => 1,
            'sys_name' => 'Gander Oceanic Core',
            'release' => 'DEV',
            'sys_build' => 'DEV',
            'copyright_year' => 'NONE',
            'banner' => '',
            'bannerLink' => '',
            'bannerMode' => '',
            'emailfirchief' => 'webmaster@ganderoceanic.com',
            'emaildepfirchief' => 'webmaster@ganderoceanic.com',
            'emailcinstructor' => 'webmaster@ganderoceanic.com',
            'emaileventc' => 'webmaster@ganderoceanic.com',
            'emailfacilitye' => 'webmaster@ganderoceanic.com',
            'emailwebmaster' => 'webmaster@ganderoceanic.com',
        ]);

        DB::table('users')->insert([
            'id' => 1,
            'fname' => 'System',
            'lname' => 'User',
            'email' => 'no-reply@ganderoceanic.com',
            'display_fname' => 'System',
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'fname' => 'Roster',
            'lname' => 'Placeholder',
            'email' => 'no-reply@ganderoceanic.com',
            'display_fname' => 'Roster',
        ]);

        $this->call([
            PermissionsSeeder::class,
            TrainingPermissionsSeeder::class
        ]);
    }
}
