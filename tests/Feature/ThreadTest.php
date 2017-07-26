<?php

namespace Tests\Feature;

use Tests\TestCase;

use Illuminate\Foundation\Testing\DatabaseMigrations;


class ThreadTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */

    /**@test*/
    public function test_a_user_can_browse_threads()
    {
        $thread = factory('App\Thread')->create();

        $response = $this->get('/threads');

        $response->assertSee($thread->title);
    }

    public function test_a_user_can_browse_single_thread(){

        $thread = factory('App\Thread')->create();

        $response= $this->get('/threads/'.$thread->id);
        $response->assertSee($thread->title);
    }
}
