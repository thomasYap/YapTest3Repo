<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HelloWorldTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function helloWorldExample()
    {
        $this -> visit('/hello')
              -> see('Hello World')
              -> dontSee('Yap');
    }

//   public function testSomething()
//    {
//        // Optional: Test anything here, if you want.
//        $this->assertTrue(FALSE, 'This should already work.');
//
////        // Stop here and mark this test as incomplete.
////        $this->markTestIncomplete(
////            'This test has not been implemented yet.'
////        );
//    }
//
//    public function testSomething2()
//    {
//        // Optional: Test anything here, if you want.
//        $this->assertTrue(FALSE, 'This should already work.');
//
//    }

//    public function brokenTestExample()
//    {
//
//    }
}
