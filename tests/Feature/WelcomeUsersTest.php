<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function it_welcomes_users_with_nickname()
    {
        $this->get('saludo/antonio/rojas')
            ->assertStatus(200)
            ->assertSee('Bienvenido Antonio, tu apodo es rojas');
    }

    /** @test */
    function it_welcomes_users_without_nickname()
    {
        $this->get('saludo/antonio')
            ->assertStatus(200)
            ->assertSee('Bienvenido Antonio');
    }
}
