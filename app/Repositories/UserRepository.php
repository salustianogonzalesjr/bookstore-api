<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function create($data)
    {
        // $user = new User;
        // $user->password = $data['password'];
        // $user->email = $data['email'];        
        // $user->save();    

        return User::create($data);
        
    
    }
      
}