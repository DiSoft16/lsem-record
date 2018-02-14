<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_patient = App\Role::where('name', 'patient')->first();
        $role_doctor = App\Role::where('name', 'doctor')->first();
        $role_admin = App\Role::where('name', 'admin')->first();

        //DB::table('users')->delete();
        DB::table('users')->truncate();
        //App\User::create(['name' => 'TestUser', 'email' => 'test@gmail.com', 'dob' => '2018-01-23 23:23:06']);

        $patient = new App\User();
        $patient->name = 'TestPatient';
        $patient->email = 'test_patient@gmail.com';
        $patient->password = bcrypt('123456');
        $patient->is_activated = 1;
        $patient->save();
        $patient->roles()->attach($role_patient);

        $doctor = new App\User();
        $doctor->name = 'TestDoctor';
        $doctor->email = 'test_doctor@gmail.com';
        $doctor->password = bcrypt('123456');
        $doctor->is_activated = 1;
        $doctor->save();
        $doctor->roles()->attach($role_doctor);

        $admin = new App\User();
        $admin->fst_name = 'Admin';
        $admin->mdl_name = 'Admin';
        $admin->lst_name = 'Admin';
        $admin->name = 'Admin';
        $admin->email = 'test@gmail.com';
        $admin->password = bcrypt('123456');
        $admin->is_activated = 1;
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
