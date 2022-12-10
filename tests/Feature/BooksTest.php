<?php

namespace Tests\Feature;

use App\Http\Resources\V1\BookResource;
use App\Models\Book;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Log;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
// use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function setUp() : void
    {
        parent::setUp();
        /** Rest of Setup **/
        Log::info('I am called');
        Sanctum::actingAs(User::factory()->create());            
        
    }

    public function test_can_create_book(): void
    {
        $faker = \Faker\Factory::create();
        
        $data = [
            'title' => $faker->word,
            'author' => $faker->name,
            'description' => $faker->text,
            'price' => $faker->randomDigit,
        ];

        $this->post(route('books.store'), $data)
            ->assertStatus(201);
   } 

    public function test_can_show_book() 
    {
        $book = Book::factory()->create();        

        $this->get(route('books.show', $book->id))
            ->assertStatus(200);
    }
    
    public function test_can_delete_book() 
    {
        $book = Book::factory()->create();        

        $this->delete(route('books.destroy', $book->id))
            ->assertStatus(200);
    }

}
