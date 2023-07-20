<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function test()
    {
        $result = DB::table('products')
        ->select('*')
        ->limit(10)
        ->get();

        return view('test.test', compact('result'));
        // $packages = Package::all();
        // return view('test.test', compact('packages'));
    }
    public function index()
    {
        $packages = Package::all();
        return view('users.home', compact('packages'));
    }

    public function products()
    {
        $result = DB::table('products')
        ->select('*')
        ->limit(10)
        ->get();

        return view('test.test', compact('result'));
    }



    public function details()
    {
        $packages = Package::all();
        return view('users.home', compact('packages'));
    }
}
