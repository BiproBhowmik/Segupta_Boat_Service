<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('users.home', compact('packages'));
    }

    public function details()
    {
        $packages = Package::all();
        return view('users.home', compact('packages'));
    }
}
