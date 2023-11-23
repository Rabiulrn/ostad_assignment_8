<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        $name = "DonultTrump";
        $age = "75";
        $data = [
            "name" => $name,
            "age" => $age,
            "id" => $id
        ];
        $name = "access_token" ;


$value ="123-XYZ";
$minutes = 1;
$path = "/";
$domain = $_SERVER["SERVER_NAME"];
$secure = false;
$httpOnly = true;

$response = response()->json($data, 201);
$response->cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
return $response;

    }
}
