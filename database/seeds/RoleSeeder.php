<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Farmer', 'Agro-Input Dealer'];
        foreach($roles as $role){
            $perm = new Role();
            $perm->name = $role;
            $perm->save();
        }
    }
}
