<?php
/**
    *Autor: Valeria Suárez
*/
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Joab',
            'lastname' => 'Romero',
            'celphone' => '111122211',
            'username' => 'jjromeroh',
            'email' => 'jjromeroh@eafit.edu.co',
            'password' => bcrypt('123456'),
            'role_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Valeria',
            'lastname' => 'Suarez',
            'celphone' => '1134446611',
            'username' => 'vsuarezm',
            'email' => 'vsuarezm@eafit.edu.co',
            'password' => bcrypt('zftUYR85'),
        ]);

        DB::table('users')->insert([
            'name' => 'Alex',
            'lastname' => 'Herrera',
            'celphone' => '123456789',
            'username' => 'kaherrerag',
            'email' => 'kaherrerag@eafit.edu.co',
            'password' => bcrypt('123456'),
            'role_id' => 1,
        ]);

        factory(App\User::class, 20)->create();
    }
}