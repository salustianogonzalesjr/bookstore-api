<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRegistrationRequest;
use App\Repositories\Interfaces\UserRepositoryInterface;

class AuthController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    
    /**
     * Store a new user.
     *
     * @param  \App\Http\Requests\UserRegistrationRequest $request
     * @return
     */
    public function register(UserRegistrationRequest $request)
    {
        // The incoming request is valid...
        // Retrieve the validated input data...
        $validatedData = $request->validated();

        $validatedData['password'] = bcrypt($validatedData['password']);

        $user = $this->userRepository->create($validatedData);

        $success['token'] =  $user->createToken('BookStore')->plainTextToken;
        $success['name'] =  $user->name;
        
        $response = [
            'success' => true,
            'data' => $success,
            'message' => 'User Created Successfully'
        ];

        return response()->json($response, 200);

    }

    /**
     * Login new user.
     *
     * @param \Illuminate\Http\Request $request
     * @return
     */
    public function login(Request $request)
    {
        if (Auth::attempt([
                'email' => $request->email, 
                'password' => $request->password
            ])) {

            $user = $request->user();

            $success['token'] = $user->createToken('BookStore')->plainTextToken;
            $success['name'] = $user->name;
    
            $response = [
                'success' => true,
                'data' => $success,
                'message' => 'User Logged In Successfully'
            ];
    
            return response()->json($response, 200);            

        }

        return response()->json( [ 
            'success' => false,
            'data' => null,
            'message' => 'Invalid Credentials'
        ], 422);            
    }


}
