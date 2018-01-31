<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //primer admin
        factory(User::class)->create([
            'name' => 'Angel Daniel Peregrino Juárez',
            'email' => 'angel190884@gmail.com',
        ])->assignRole('administrator');
        //primer student
        factory(User::class)->create([
            'name' => 'student',
            'email' => 'student@gmail.com',
        ])->assignRole('student');
        //primer teacher
        factory(User::class)->create([
            'name' => 'teacher',
            'email' => 'teacher@gmail.com',
        ])->assignRole('teacher');
        //primer supervisor
        factory(User::class)->create([
            'name' => 'supervisor',
            'email' => 'supervisor@gmail.com',
        ])->assignRole('supervisor');
        //primer authenticated
        factory(User::class)->create([
            'name' => 'authenticated',
            'email' => 'authenticated@gmail.com',
        ])->assignRole('authenticated');
    }
}
