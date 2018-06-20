<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EventosTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
         $this->visit('home');
        // ->type('Contenido de mi primer post', 'body')



    }

    // public function testUsersCanCreatePosts()
    // {
    //     $this->visit('/public/index.php');
              // ->type('Mi primer Post', 'title')
              // ->type('Contenido de mi primer post', 'body')
              // ->press('publicar')
              // ->seePageIs('blog')
              // ->click('Mi primer Post')
              // ->see();
    //}

  }
