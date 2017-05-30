<?php

namespace Tests\Unit;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testPostArchives()
    {
    	// Given I have two records in the database that are posts,
    	// and each one is posted a month apart.
    	
    	// When I fetch the archives.
    	Post::archives();
    	
    	// Then the response should be in the proper format.
    }
}
