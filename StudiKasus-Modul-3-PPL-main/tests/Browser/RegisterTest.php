<?php

namespace Tests\Browser;

use Cron\FieldFactory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A basic browser test example,
     * @group Register
     */
    public function testBasicExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(url:'/')
            ->assertSee(text: 'Enterprise Application Development') 
            ->clickLink(link: 'Register')
            ->assertPathIs(path: '/register')
            ->type(field:'name',value:'Hilman')
            ->type(field:'email',value:'user1@gmail.com')
            ->type(field:'password',value:'12345')
            ->type(field:'password_confirmation',value:'12345')
            ->press(button: 'REGISTER')
            ->assertPathIs('/dashboard');
        });
    }
}
