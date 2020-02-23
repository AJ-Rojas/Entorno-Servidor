<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //$professions = DB::select('SELECT id FROM professions WHERE title = ?', ['Back-end developer']);

        $professionId = DB::table('professions')
            ->where('title', 'Back-end developer')
            ->value('id');

        dd($profession);

        DB::table('users')->insert([
            'name' => 'Antonio Jesus',
            'email' => 'antonio@email.es',
            'password' => bcrypt('laravel'),
            'profession_id' => $professionId,
        ]);
    }
}
