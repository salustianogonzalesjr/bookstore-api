<?php

namespace App\Repositories\Interfaces;
use App\Http\Resources\V1\BookResource;
use App\Models\User;

interface UserRepositoryInterface
{
    public function create($data);    
}