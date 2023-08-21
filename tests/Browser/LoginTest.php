<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testSuccessFulLogin(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
            ->type('email', 'uyoshimoto@example.org')
            ->type('password', 'password')
            ->press('ログイン')
            ->assertPathIs('/tweet')
            ->assertSee('つぶやきアプリ');
        });
    }
}
