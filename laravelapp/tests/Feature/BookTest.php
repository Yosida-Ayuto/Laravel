<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testBook()
    {
        $this->assertTrue(true);
        $arr = [];
        $this->assertEmpty($arr);

        $msg ="Book";
        $this->assertEquals('Book',$msg);

        $n = random_int(0,100);
        $this->assertLessThan(100,$n);
    }
    
    public function testBooks(){
        $this->assertTrue(true);

        $response = $this->get('/');
        $response = $this->assertStatus(200); 

        $response = $this->get('/book');
        $response = $this->assertStatus(302);
        
        $user = factory(user::class)->create();
        $response = $this->actingAs($user)->get('/');
        $response = $this->assertStatus(200); 

        $response = $this-get('/no_route');
        $response = $this->assertStatus(404); 

    }
}
