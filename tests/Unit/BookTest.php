<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
// use PHPUnit\Framework\TestCase;
use Tests\TestCase;


class BookTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
    
    public function test_login_route_api()
    {              
        $user = User::factory()->create();

        $hasUser = $user ? true : false;

        $this->assertTrue($hasUser);

        $response = $this->actingAs($user)->get('/api/v1/books');     
        
        $response->assertStatus(200);
    }
}
