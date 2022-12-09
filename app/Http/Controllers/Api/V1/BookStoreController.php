<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Book;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookStoreRequest;
use App\Http\Resources\V1\BookResource;
use App\Repositories\Interfaces\BookRepositoryInterface;

class BookStoreController extends Controller
{
    private $bookRepository;

    /**
     * Create a new schema blueprint.
     *
     * @param  BookRepositoryInterface   $bookRepository
     
     * @return void (this was previously void)
     */
    public function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }
    
    /**
     * Display listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\JsonResource 
     */    
    public function index()
    {                
        return BookResource::collection( $this->bookRepository->all() );                 
    }

    /**
     * Update the specified resource
     *
     * @param  \App\Http\Requests\BookStoreRequest  $request
     * @param  BookStoreRequest  $request
     * @param  Book  $book
     * @return \Illuminate\Http\Resources\Json\JsonResource 
     */
    public function show(Book $book)
    {     
        $book = $this->bookRepository->show($book);
        return new BookResource($book);            
    }    

    /**
     * Update the specified resource
     *
     * @param  \App\Http\Requests\BookStoreRequest  $request
     * @param  BookStoreRequest  $request
     * @param  Book  $book
     * @return \Illuminate\Http\Resources\Json\JsonResource 
     */
    public function store(BookStoreRequest $request)
    {
        $book = $this->bookRepository->store($request->validated());
        return new BookResource($book); 
    }      
    
    /**
     * Update the specified resource
     *
     * @param  \App\Http\Requests\BookStoreRequest  $request
     * @param  BookStoreRequest  $request
     * @param  Book  $book
     * @return \Illuminate\Http\Resources\Json\JsonResource 
     */
    public function update(BookStoreRequest $request, Book $book)
    {        
        $book->update($request->validated());                     
        return new BookResource($book); 

    }      

    /**
     * Remove the specified resource from DB.
     *
     * @param  Book $book
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Book $book)
    {
        $this->bookRepository->delete($book);                        
        return response()->json("Book Deleted");           
    }       
}
