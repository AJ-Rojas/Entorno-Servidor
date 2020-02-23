<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Profession;

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

        $professionId = Profession::where('title', 'Back-end developer')->value('id');

        User::create([
            'name' => 'Antonio Jesus',
            'email' => 'antonio@email.es',
            'password' => bcrypt('laravel'),
            'profession_id' => $professionId,
        ]);
    }
}
