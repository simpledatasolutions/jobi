<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        Role::create(['name' => 'admin', 'uuid'=>'d0402be5-e1ba-4cb2-a87c-5340b406e2c3']);
        Role::create(['name' => 'user','uuid'=>'c0402be5-e1ba-4cb2-a80c-5340b406e2c3']);

    }
}
