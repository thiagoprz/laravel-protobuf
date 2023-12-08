<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use User;

class UserController extends Controller
{
    
    public function showUser()
    {
        // Create a User object
        $user = new User();
        $user->setName("John Doe");
        $user->setEmail("john@example.com");
        $user->setAge(30);

        // Serialize the User object to a binary string
        $userSerialized = $user->serializeToString();

        // Set response headers for Protobuf
        return response($userSerialized)
            ->header('Content-Type', 'application/protobuf');
    }
}
