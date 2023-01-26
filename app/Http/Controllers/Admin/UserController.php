<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
       return view('admin.user.index' , compact('users'));
    }
    public function admin($id)
    {
        $users = User::find($id);
        $users->user_type = 'admin';
        $users->save();
        return back();
    }
    public function user($id)
    {
        $users = User::find($id);
        $users->user_type = 'user';
        $users->save();
        return back();
    }



}
