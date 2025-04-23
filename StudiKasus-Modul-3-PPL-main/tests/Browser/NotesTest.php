<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * @group notes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Log in')
                    ->assertSee('Email')
                    ->assertSee('Password')
                    ->type('email',  'abdul@gmail.com')
                    ->type('password', '1234')
                    ->press('LOG IN')

                    ->assertPathIs('/dashboard')
                    ->pause(1000) 
                    ->clickLink('Notes')
                    ->assertPathIs('/notes')
                    ->pause(500) 
                    ->clickLink('Create Note')
                    ->assertSee('Title')
                    ->assertSee('Description')
                    ->type('title', 'Catatan')
                    ->type('description', '1')
                    ->press('CREATE');
        });
    }
}