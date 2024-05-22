<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\Services\Service;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $service = new Service;
        return $service->doRegister($request);
    }
    public function login(Request $request)
    {
        $service = new Service;
        return $service->doLogin($request);
    }
    public function logout(Request $request)
    {
        $service = new Service;
        return $service->doLogout($request);
    }
    public function getImage($path)
    {
        $service = new Service;
        return $service->dogetImage($path);
    }
    public function CheckUserifExist(Request $request)
    {
        $service = new Service;
        return $service->doCheckUserifExist($request);
    }
}