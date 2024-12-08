<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index($id){
       
        $name = "Donald Trump";
        $age = "75";
        $data = [
            "id"=>$id,
            "name"=> $name,
            "age" => $age,
        ];
        
        $cookieName = "access_token";
        $value = "123-XYZ";
        $minutes = 1;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly=true;

        $code = 200;
       
        return response($data,$code)->cookie($cookieName, $value, $minutes, $path, $domain, $secure, $httpOnly);
    }
}
