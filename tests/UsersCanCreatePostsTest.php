<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UsersCanCreatePostsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUsersCanCreatePosts()
    {
        $this->visit('posts/create')
              ->type('Mi primer Post', 'title')
              ->type('Contenido de mi primer post', 'body');

              // ->seePageIs('blog')
               //->click('Mi primer Post');
              // ->see();
    }
}
