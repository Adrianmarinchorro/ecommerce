<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Categorías')
                    ->screenshot('example-test');
        });
    }

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample2()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Categorías');

        });
    }

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample3()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Categorías');

        });
    }

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample4()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Categorías')
                ->screenshot('4example-test');
        });
    }

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample5()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Categorías')
                ->screenshot('5example-test');
        });
    }
}
