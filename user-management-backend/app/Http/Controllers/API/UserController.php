<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\Services\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function insertNewTask(Request $request)
    {
        $service = new Service;
        return $service->doInsertNewTask($request);
    }
    public function getTask(Request $request)
    {
        $service = new Service;
        return $service->doGetTask($request);
    }
    public function doneTask(Request $request)
    {
        $service = new Service;
        return $service->doDoneTask($request);
    }
    public function removeTask(Request $request)
    {
        $service = new Service;
        return $service->doRemoveTask($request);
    }
    public function getSelfInfo()
    {
        $service = new Service;
        return $service->dogetSelfInfo();
    }
    public function changeProfile(Request $request)
    {
        $service = new Service;
        return $service->dochangeProfile($request);
    }
    public function updateUserInfo(Request $request)
    {
        $service = new Service;
        return $service->doupdateUserInfo($request);
    }
    public function changePass(Request $request)
    {
        $service = new Service;
        return $service->dochangePass($request);
    }
}
