<?php

namespace App\Repositories;

use App\Models\Book;
use App\Http\Resources\V1\BookResource;
use App\Repositories\Interfaces\BookRepositoryInterface;

class BookRepository implements BookRepositoryInterface
{
    public function all()
    {                
        return Book::orderBy('id', 'desc')->paginate(5);    
    }

    public function show($book)
    {    
        return new BookResource($book);        
    }

    public function store($request)
    {    
        return Book::create($request);        
    }

    public function update($request, $book)
    {
        // dd($book);
        return $book->update($request);             

        // return Book::create($request);        
    }    

    public function delete($book)
    {    
        return $book->delete();            
    }   
}