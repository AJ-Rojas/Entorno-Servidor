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

        factory(User::class)->create([
            'name' => 'Antonio Jesus',
            'email' => 'antoniojesus@email.es',
            'password' => bcrypt('123456'),
            'profession_id' => $professionId,
            'is_admin' => true,
        ]);

        factory(User::class)->create([
            'profession_id' => $professionId
        ]);

        factory(User::class, 48)->create([
            'profession_id' => $professionId
        ]);
    }
}
