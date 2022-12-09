<?php

namespace App\Repositories\Interfaces;
use App\Http\Resources\V1\BookResource;
use App\Models\Book;

interface BookRepositoryInterface
{
    public function all();
    public function show(Book $book);
    public function store(BookStoreRequest $request);    
    // public function update(BookStoreRequest $request);    
    public function update( $request, $book );

    public function delete(Book $book);
}