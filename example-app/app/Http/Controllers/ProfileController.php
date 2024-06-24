<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class ProfileController extends Controller
{

    public function index($id)
    {
        // Declare variables
        $name = "Donal Trump";
        $age = 75;

        // Create data array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false; 
        $httpOnly = true;

    
        return response()->json($data, 200)->withCookie($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);
    }
}
