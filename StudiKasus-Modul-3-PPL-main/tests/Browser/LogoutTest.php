<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class logoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group logout
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->clickLink('Log in')
            ->assertSee('Email')
            ->assertSee('Password')
            ->type('email',  'user1@gmail.com')
            ->type('password', '12345')
            ->press('LOG IN')
            ->waitFor('#click-dropdown')
            ->click('#click-dropdown')
            ->clickLink('Log Out');
        });
    }
}