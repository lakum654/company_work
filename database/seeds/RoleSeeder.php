<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = ['Admin','Author','Teacher','Student','Director','Developer','Doctor','Manager','Accounter'];
        for($i=0;$i<count($role);$i++){
            Role::create([
                'name'=>$role[$i]
            ]);
        }
    }
}
