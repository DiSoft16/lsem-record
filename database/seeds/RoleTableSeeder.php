<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_patient = new App\Role();
        $role_patient->name = 'patient';
        $role_patient->description = 'patient';
        $role_patient->save();
        
        $role_doctor = new App\Role();
        $role_doctor->name = 'doctor';
        $role_doctor->description = 'doctor';
        $role_doctor->save();
        
        $role_admin = new App\Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'admin';
        $role_admin->save();
    }
}
