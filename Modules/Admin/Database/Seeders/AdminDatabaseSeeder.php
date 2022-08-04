<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Modules\Admin\Entities\Admin;

class AdminDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::firstOrCreate([

            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456789')
        ]);
        $admin->attachRole('superadministrator');
        // $this->call("OthersTableSeeder");
    }
}
