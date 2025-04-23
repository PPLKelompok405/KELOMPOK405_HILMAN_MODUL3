<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example,
     * @group login
     */
    public function testLogin(): void
    {
        $this->browse(callback: function (Browser $browser):void {
            $browser->visit(url: '/')
            #->assertSee(text:'Laravel')
            ->clickLink(link: 'Log in')
            ->assertPathIs(path:'/login')
            ->type(field: 'email', value: 'user1@gmail.com')
            ->type(field: 'password', value: '12345')
            ->press  (button: 'LOG IN')
            ->assertPathIs(path: '/dashboard');
        });
    }
}