<?php

namespace App\Http\Controllers\Admin;
use App\Models\UserInfo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function index()
    {
        $user_infos = UserInfo::all();
       return view('admin.userInfo.index', compact('user_infos'));
    }
    public function userInfo($id){
        $user_infos=User::find($id);
        $user_infos->save();
        return back();

    }
}
