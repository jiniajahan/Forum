<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CreateThreadTest extends TestCase
{
    /** @test */

    function guests_may_not_create_threads()
    {
        $this->expectException('Illuminate\Auth\AuthenticationException');
        $thread = make('App\Thread');
        $this->post('/threads', $thread->toArray());
    }

    /** @test */

    function guests_can_not_see_create_thread_page()
    {
        $this->withExceptionHandling()
            ->get('threads/create')
            ->assertRedirect('/login');

    }
//
//    /** @test */
//    function an_authenticated_user_can_create_forum_threads(){
//
//    //    we have authenticated user
//
//        $this->actingAs(create('App\User'));
//
//        // user can create threads
//
//        $thread = make('App\Thread');
//
//        $this->post('/threads', $thread->toArray());
//        $this->get($thread->path())
//            ->assertSee($thread->title)
//            ->assertSee($thread->body);
//
//
//    }
}
