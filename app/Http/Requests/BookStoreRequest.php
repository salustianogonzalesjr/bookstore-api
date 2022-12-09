<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BookStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [            
            // 'title' => ['required','min:3', 'max:150', 'unique:books,title'],
            // 'title' => ['required', Rule::unique('books')->ignore($this->book)],
            'title' => ['required','min:3', 'max:150'],
            'author' => ['required','min:3', 'max:150'],            
            'description' => ['required','min:3', 'max:350'],            
            'price' => ["required", "regex:/^(\d+|\d+(\.\d{1,2})?|(\.\d{1,2}))$/"],            
        ];        
    }
}
