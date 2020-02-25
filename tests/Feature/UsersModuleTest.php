<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;

class UsersModuleTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    function it_shows_the_users_list()
    {

        factory(User::class)->create([
            'name' => 'Antonio',
        ]);

        factory(User::class)->create([
            'name' => 'Maximo',
        ]);

        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios')
            ->assertSee('Antonio')
            ->assertSee('Maximo');
    }

    /** @test */
    function it_shows_a_default_message_if_the_users_list_is_empty()
    {

        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('No hay usuarios registrados.');
    }

    /** @test */
    function it_displays_the_users_details()
    {

        $user = factory(User::class)->create([
            'name' => 'Antonio Jesus'
        ]);

        $this->get('/usuarios/'.$user->id)
            ->assertStatus(200)
            ->assertSee('Antonio Jesus');
    }

    /** @test */
    function it_displays_a_404_if_the_user_is_not_found()
    {
        $this->get('/usuarios/999')
            ->assertStatus(404)
            ->assertSee('Página no encontrada');
    }

    /** @test */
    function it_loads_the_new_users_page()
    {
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Creando usuario');
    }
}
